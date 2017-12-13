<?php
namespace app\test\controller;
/**
 * Created by PhpStorm.
 * User: x_x94
 * Date: 2017/12/11
 * Time: 13:52
 */
class Index {
    public function index( )
    {
        $redis = new Redis();
        $redis -> set('username','tangengnjun');
        echo $redis ->get('username');

    }
}