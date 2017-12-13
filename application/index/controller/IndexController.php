<?php
namespace app\index\controller;

use app\index\model\Image;
use app\index\model\IndexModel;
use think\Controller;
use think\Db;

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
 }
