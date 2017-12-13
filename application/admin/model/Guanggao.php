<?php

namespace app\admin\model;

use app\admin\model\Plan;
use think\Db;
use think\Model;

class Guanggao extends Model {

    // 设置完整的数据表（包含前缀）
    protected $table = 'guanggao';

    static function corejs($plan_id) {
        $planname = Db::table('plan')->where('plan_id', $plan_id)->value('name');
        $plantype = Db::table('plan')->where('plan_id', $plan_id)->value("type");
        //获取计划下的所有广告
        $planinfodata = Db::table('guanggao')->where('plan_id', $plan_id)->select();

        $uploadUrl = $_SERVER['HTTP_HOST'] . "/basic/public/static";
        $js_info = "";
        $js_info .= "var sUserAgent = navigator.userAgent.toLowerCase();\n";
        $js_info .= "var bIsAndroid = sUserAgent.match(/android/i) == \"android\";\n";
        $js_info .= "var bIsIpad = sUserAgent.match(/ipad/i) == \"ipad\";\n";
        $js_info .= "var bIsIphoneOs = sUserAgent.match(/iphone os/i) == \"iphone os\";\n";
        $js_info .= "function getadCookie(cname) {var name = cname + \"=\"; var ca = document.cookie.split(';'); for (var i = 0; i < ca.length; i++) { var c = ca[i]; while (c.charAt(0) == ' ') c = c.substring(1);  if (c.indexOf(name) != -1) return c.substring(name.length, c.length);}return \"\";}\n";
        //if ((bIsAndroid) || bIsIpad || bIsIphoneOs) {
        //var nn = Math.floor(Math.random() * 4) + 1;
        $js_info .= "var arrayObj=new Array();\n";
        //}
        foreach ($planinfodata as $key => $value) {
            $js_info .= "arrayObj[" . $key . "] =new Array();\n";
            $js_info .= "arrayObj[" . $key . "][\"g_info\"] =\"" . $value['g_info'] . "\";\n";
            $js_info .= "arrayObj[" . $key . "][\"g_id\"] =\"" . $value['g_id'] . "\";\n";
            $js_info .= "arrayObj[" . $key . "][\"a_url\"]=\"" . $value['g_lianjie_A'] . "\";\n";
            $js_info .= "arrayObj[" . $key . "][\"i_url\"]=\"" . $value['g_lianjie_I'] . "\";\n";
            $js_info .= "arrayObj[" . $key . "][\"images\"]=\"" . "http://www.cctybt.com/" . $value['picname'] . "\";\n";
        }
        /* $js_info .= "var nn = getadCookie(\"str\");\n";
          $js_info .= "if (nn === \"\") {nn = 1;}\n";
          $js_info .= "if (nn > 3) {nn = 1;} else {nn = parseInt(nn) + 1;}\n"; */
        $js_info .= "document.writeln(\"<div class=\\\"bottomS123D\\\" id=\\\"bottomS123D\\\">\");\n";
        $js_info .= "document.writeln(\"<a class=\\\"dVo39\\\" style=\\\"display :none\\\">X</a>\");\n";
        $js_info .= "
            var Ajax={
                get: function(url, fn) {
                    var obj = new XMLHttpRequest();
                    obj.open('GET', url, true);
                    obj.onreadystatechange = function() {
                        if (obj.readyState == 4 && obj.status == 200 || obj.status == 304) {
                            fn.call(this, obj.responseText);
                        }
                    };
                    obj.send();
                },
                post: function (url, data, fn) {
                    var obj = new XMLHttpRequest();
                    obj.open(\"POST\", url, true);
                    obj.setRequestHeader(\"Content-type\", \"application/x-www-form-urlencoded\");
                    obj.onreadystatechange = function() {
                        if (obj.readyState == 4 && (obj.status == 200 || obj.status == 304)) {
                            fn.call(this, obj.responseText);
                        }
                    };
                    obj.send(data);
    }
}
function onskip(g_id) {
    Ajax.post(\"http://" . $_SERVER['HTTP_HOST'] . "/index/Index/ajax1\", \"g_id=\"+g_id);
}

function rd(n, nn) {
    var c = nn - n + 1;
    return Math.floor(Math.random() * c + n);
}
nn = rd(0, arrayObj.length - 1);

var uu = arrayObj[nn][\"a_url\"];
if (bIsIpad || bIsIphoneOs) {
    uu = arrayObj[nn][\"i_url\"];
}

function addnum(g_id) {
    Ajax.post(\"http://" . $_SERVER['HTTP_HOST'] . "/index/Index/addnum\", \"g_id=\"+g_id);
}
addnum(arrayObj[nn][\"g_id\"]);\n";
        $js_info .= "document.cookie = \"str=\" + nn + \";expires=3600\";\n";
        $js_info .= "document.writeln(\"<a id=\\\"bottomLink\\\"  onclick=\\\"onskip(arrayObj[nn]['g_id'])\\\" target=\'_blank\' href=\\\"\" + uu + \"\\\">";
        if ($plantype == 2) {
            $js_info .= "<img src=\\\"\" + arrayObj[nn][\"images\"] + \"\\\" width=\\\"100%\\\" />";
        } else {
            $js_info .= "\"+arrayObj[nn]['g_info']+\"";
        }
        $js_info .= "</a>\");\n";
        $js_info .= "document.writeln(\"</div>\");\n";
        $js_info .= "document.writeln(\"</div>\");\n";
        $style = ['bottom:0;right:0;','top:0;right:0','top:50%;left:50%;'];
        $jsname = ['bottom','top','center'];
        foreach ($style as $k =>$v){
            $js_info .= "document.writeln(\"<style>\");\n";
            $js_info .= "document.writeln(\".bottomS123D{-webkit-box-sizing:border-box;position:fixed;".$v."z-index:1000;padding:0 0px;overflow:hidden;width:100%}.bottomS123D a{top:0;right:0;bottom:0}.dVo39{position:absolute;right:0;top:-20px;z-index:2147483647!important;width:22px;height:20px;background:rgba(0,0,0,0.1);text-align:center;color:#fff;font-size:17px;line-height:20px;font-family:Arial}\");\n";
            $js_info .= "document.writeln(\"</style>\");\n";

            file_put_contents("public/static/planjs/$plan_id-$jsname[$k].js", $js_info);
        }

    }

    /**
     * [根据广告计划Id查找广告计划]
     * @param $Id
     * @return static
     */
    static function getGuanggaoById($Id) {
        return Guanggao::get($Id);
    }

}
