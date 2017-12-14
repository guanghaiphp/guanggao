<?php
namespace app\index\controller;

use app\index\model\Image;
use app\index\model\IndexModel;
use think\Controller;
use think\Db;
use think\Request;
use app\common\redis\StatisticsRedis;

class IndexController extends Controller
{
    public function index()
    {
        //获取一个随机开启计划
        $result = Db::query('SELECT * FROM plan where status = 1  ORDER BY RAND() LIMIT 1');
        //判断计划是否为空
        if(!empty($result)){
            if($result[0]['num']==0){
                //num等于0 计划下没有广告
                return $this->error("该计划没有广告数据");
            }else{
            @$plan_id = $result[0]['plan_id'];
            $this ->assign('plan_id',$plan_id);
            return view('home');
            }
        }else{
            return $this->error("该计划没有广告数据");
           }
    }



//展示次数统计
    public function addnum(){
         $type = 1;
         IndexModel::insert_Table($type);
        }
//点击次数统计
    public function ajax1(){
        $type = 2;
        IndexModel::insert_Table($type);
    }

    /**
     * 添加展示\点击记录[record_log]
     *         $g_id,  广告Id
     *         $userip, 请求ip
     *         $type,   展示1,点击2
     *         $time    请求时间
     * @return \think\helper\json
     */
    public function addRecord()
    {
        $type = Request::instance()->post('type',1);
        //$g_id, $userip, $type, $time
        $type = Request::instance()->post('type',1);
        $g_id = Request::instance()->post('g_id',1);
        $userip = Request::instance()->ip();
        $time = Request::instance()->time();
        return StatisticsRedis::createDataToList($g_id, $userip, $type, $time);
    }

    /**
     * 根据name删除队列  [谨慎使用]
     * @return mixed
     */
    public function delList()
    {
        $name = Request::instance()->get('listName','record_log');
        $redis = new StatisticsRedis();
        return $redis->removeListByName($name);
    }


}
