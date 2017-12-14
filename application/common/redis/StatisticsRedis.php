<?php
/**
 * Created by PhpStorm. 此文件为广告点击统计使用
 * User: 75763
 * Date: 2017/12/13
 * Time: 13:59
 */

namespace app\common\redis;

use app\helper\MsgHelper;
use think\cache\driver\Redis;
use app\admin\model\Guanggao;
use think\Db;

class StatisticsRedis extends RedisBase
{
    /**
     * 添加点击数据到队列
     * @param $g_id
     * @param $userip
     * @param $type
     * @param $time
     * @return \think\helper\json
     */
    static function createDataToList($g_id, $userip, $type, $time)
    {
        //验证数据g_id ... 不能为空(...按需求添加验证条件)
        if(!isset($g_id)||!isset($userip)) {
            return MsgHelper::json('101','参数错误');
        }
        //检验g_id是否存在(检查g_id)
        $isGid = Guanggao::get($g_id);
        if(!$isGid){
            return MsgHelper::json('102','广告异常，或已经不存在');
        }
        $redis = new Redis();
//        $redis->rPush("record_log",$g_id."%".$userip. "%" .$time."%".$type);
//        return $redis->lLen('record_log');exit;
        $result =  $redis->rPush("record_log",$g_id."%".$userip. "%" .$time."%".$type);
        if(!$result) {
            return MsgHelper::json('103','数据跟新是失败!');
        }else{
            return MsgHelper::json('100','数据更新成功!');
        }
    }

    /**
     * 计划任务缓存数据（广告点击记录）入库
     * @return array
     */
    static function cteateListToMysql()
    {
        //获取现有消息队列的长度
        $count = 0;
        $redis = new Redis();
        $max = $redis->lLen("record_log");
        if(!empty($max)||$max==0){
            return array('101','暂无广告点击数据');
        }
        // 获取消息队列的内容，拼接sql
        $insertSql = "insert into record (`g_id`, `userip`,`time`,`type`) values ";
        // 回滚数组
        $rollBackArr = array();
        while ($count < $max) {
            $logInfo = $redis->lPop("record_log");
            //队列中取出数据
            $rollBackArr = $logInfo;
            if ($logInfo == 'nil' || !isset($logInfo)) {
                $insertSql .= ";";
                break;
            }
            // 切割出时间和info
            $logInfoArr = explode("%",$logInfo);
            $insertSql .= " ('".$logInfoArr[0]."','".$logInfoArr[1]."','".$logInfoArr[2]."','".$logInfoArr[3]."'),";
            $count++;
        }
        //
        $insertResult = Db::query($insertSql);
        //添加失败，添加失败记录
        if(!$insertResult){
            //@$rollBackArr
            return array('-1',$insertResult.'记录更新失败');
        }else{
            return array('1',$insertResult,'记录更新成功');
        }
    }

    /**
     * 清除一个name下的队列 [谨慎使用]
     */
    public function removeListByName($name)
    {
        $redis = new Redis();
        return $redis ->del($name);
    }
}