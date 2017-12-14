<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"D:\phpStudy\WWW\basic/application/admin\view\index\login.html";i:1512749244;}*/ ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->



    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo \think\Config::get('object_name'); ?> | USB数据管理后台 登陆</title>
        <link rel="icon" type="image/ico" href="__PUBLIC__/images/favicon.ico" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">




        <!-- ============================================
        ================= Stylesheets ===================
        ============================================= -->
        <!-- vendor css files -->
        <link rel="stylesheet" href="__PUBLIC__/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="__PUBLIC__/css/vendor/animate.css">
        <link rel="stylesheet" href="__PUBLIC__/css/vendor/font-awesome.min.css">

        <!-- project main css files -->
        <link rel="stylesheet" href="__PUBLIC__/css/main.css">
        <!--/ stylesheets -->



        <!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="__PUBLIC__/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!--/ modernizr -->




    </head>





    <body id="minovate" class="appWrapper">






        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->












        <!-- ====================================================
        ================= Application Content ===================
        ===================================================== -->
        <div id="wrap" class="animsition">

            <div class="page page-core page-login">

                <div class="text-center"><h3 class="text-light text-white"><img src="__PUBLIC__/images/logo.png" alt="<?php echo \think\Config::get('object_name'); ?> " width="175" height="68"></h3></div>

                <div class="container w-420 p-15 bg-white mt-40 text-center">


                    <h2 class="text-light">USB数据管理后台</h2>

                    <form name="form" action="<?php echo url('/admin/login_action'); ?>" class="form-validation mt-20" novalidate method="POST">

                        <div class="form-group">
                            <input type="text" autocomplete="off" class="form-control name" placeholder="管理员账号" name="admin_username" >
                        </div>

                        <div class="form-group">
                            <input type="password" autocomplete="off" class="form-control password" placeholder="密码" name="admin_password" >
                        </div>

                        <div class="form-group">
                            <input type="text" autocomplete="off" class="form-control capt" placeholder="验证码" name="capt" >
                            <img src="<?php echo captcha_src(); ?>" alt="captcha" onclick="javascript:this.src='<?php echo captcha_src(); ?>?tm='+Math.random();" style="cursor: pointer"/>
                        </div>

                        <div class="form-group text-left mt-20">
                            <input type="hidden" class="form-control"  name="redirect" value=''>
                            <input type="submit" class="btn btn-blue b-0 br-2 mr-5" name="login_submit" value="登录">
                            <a href="<?php echo url('/admin/lost_password'); ?>" class="pull-right mt-10">忘记密码?</a>
                        </div>

                    </form>
                </div>

            </div>



        </div>
        <!--/ Application Content -->














        <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src="__PUBLIC__/js/vendor/jquery/jquery-1.11.2.min.js"></script>

        <script src="__PUBLIC__/js/vendor/bootstrap/bootstrap.min.js"></script>

        <script src="__PUBLIC__/js/vendor/jRespond/jRespond.min.js"></script>

        <script src="__PUBLIC__/js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script src="__PUBLIC__/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="__PUBLIC__/js/vendor/animsition/js/jquery.animsition.min.js"></script>

        <script src="__PUBLIC__/js/vendor/screenfull/screenfull.min.js"></script>
        <!--/ vendor javascripts -->




        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="__PUBLIC__/js/main.js"></script>
        <script src="__PUBLIC__/js/layer/layer.js"></script>
        <!--/ custom javascripts -->






        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
           $(function () {
               $('.btn').click(function () {
                   var name = $('.name').val();
                   var password = $('.password').val();
                   var capt = $('.capt').val();
                   if(!name){
                       layer.msg('用户名不能为空');
                       return false;
                   }
                   if(!password){
                       layer.msg('密码不能为空');
                       return false;
                   }
                   if(!capt){
                       layer.msg('验证码不能为空');
                       return false;
                   }
                   if(capt.length !== 4){
                       layer.msg('验证码必须是4位');
                       return false;
                   }
               });
           })
        </script>
        <!--/ Page Specific Scripts -->

    </body>
</html>
