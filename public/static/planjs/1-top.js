var sUserAgent = navigator.userAgent.toLowerCase();
var bIsAndroid = sUserAgent.match(/android/i) == "android";
var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
function getadCookie(cname) {var name = cname + "="; var ca = document.cookie.split(';'); for (var i = 0; i < ca.length; i++) { var c = ca[i]; while (c.charAt(0) == ' ') c = c.substring(1);  if (c.indexOf(name) != -1) return c.substring(name.length, c.length);}return "";}
var arrayObj=new Array();
arrayObj[0] =new Array();
arrayObj[0]["g_info"] ="asdfasdf";
arrayObj[0]["g_id"] ="1";
arrayObj[0]["a_url"]="asdfasdfas";
arrayObj[0]["i_url"]="asdfasdf";
arrayObj[0]["images"]="http://www.cctybt.com/";
document.writeln("<div class=\"bottomS123D\" id=\"bottomS123D\">");
document.writeln("<a class=\"dVo39\" style=\"display :none\">X</a>");

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
                    obj.open("POST", url, true);
                    obj.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    obj.onreadystatechange = function() {
                        if (obj.readyState == 4 && (obj.status == 200 || obj.status == 304)) {
                            fn.call(this, obj.responseText);
                        }
                    };
                    obj.send(data);
    }
}
function onskip(g_id) {
    Ajax.post("http://basic.com/index/Index/ajax1", "g_id="+g_id);
}

function rd(n, nn) {
    var c = nn - n + 1;
    return Math.floor(Math.random() * c + n);
}
nn = rd(0, arrayObj.length - 1);

var uu = arrayObj[nn]["a_url"];
if (bIsIpad || bIsIphoneOs) {
    uu = arrayObj[nn]["i_url"];
}

function addnum(g_id) {
    Ajax.post("http://basic.com/index/Index/addnum", "g_id="+g_id);
}
addnum(arrayObj[nn]["g_id"]);
document.cookie = "str=" + nn + ";expires=3600";
document.writeln("<a id=\"bottomLink\"  onclick=\"onskip(arrayObj[nn]['g_id'])\" target=\'_blank\' href=\"" + uu + "\">"+arrayObj[nn]['g_info']+"</a>");
document.writeln("</div>");
document.writeln("</div>");
document.writeln("<style>");
document.writeln(".bottomS123D{-webkit-box-sizing:border-box;position:fixed;bottom:0;right:0;z-index:1000;padding:0 0px;overflow:hidden;width:100%}.bottomS123D a{top:0;right:0;bottom:0}.dVo39{position:absolute;right:0;top:-20px;z-index:2147483647!important;width:22px;height:20px;background:rgba(0,0,0,0.1);text-align:center;color:#fff;font-size:17px;line-height:20px;font-family:Arial}");
document.writeln("</style>");
document.writeln("<style>");
document.writeln(".bottomS123D{-webkit-box-sizing:border-box;position:fixed;top:0;right:0z-index:1000;padding:0 0px;overflow:hidden;width:100%}.bottomS123D a{top:0;right:0;bottom:0}.dVo39{position:absolute;right:0;top:-20px;z-index:2147483647!important;width:22px;height:20px;background:rgba(0,0,0,0.1);text-align:center;color:#fff;font-size:17px;line-height:20px;font-family:Arial}");
document.writeln("</style>");
