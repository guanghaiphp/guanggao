<?php
/**
 * Created by PhpStorm.
 * User: 75763
 * Date: 2017/12/13
 * Time: 14:23
 */
namespace app\helper;

class MsgHelper{

    /**
     * 返回json
     * @param $status (string|int) 返回状态
     * @param $message string 返回消息
     * @param $data array 返回数据
     * @return json_encode_data
     */
    static function json($status = 0, $message = '', $data = array())
    {
        return json_encode(
            array(
                'status' => $status,
                'message' => $message,
                'data' => $data
            )
        );
    }
}