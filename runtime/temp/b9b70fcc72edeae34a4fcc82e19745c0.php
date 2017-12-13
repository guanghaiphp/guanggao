<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:77:"E:\phpstudy\PHPTutorial\WWW\basic/application/admin\view\guanggao\update.html";i:1512658326;s:68:"E:\phpstudy\PHPTutorial\WWW\basic/application/admin\view\layout.html";i:1483410766;s:68:"E:\phpstudy\PHPTutorial\WWW\basic/application/admin\view\header.html";i:1512633341;s:66:"E:\phpstudy\PHPTutorial\WWW\basic/application/admin\view\left.html";i:1512379050;s:68:"E:\phpstudy\PHPTutorial\WWW\basic/application/admin\view\footer.html";i:1509873334;}*/ ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo \think\Config::get('object_name'); ?> | 后台管理系统</title>
        <link rel="icon" type="image/ico" href="__PUBLIC__/images/favicon.ico" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="__PUBLIC__/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/vendor/bootstrap-switch.css">
        <script src="__PUBLIC__/js/vendor/jquery-1.7.2.min.js"></script>
         <script type="text/javascript" src="__PUBLIC__/js/vendor/bootstrap-switch.js"></script>
        <link rel="stylesheet" href="__PUBLIC__/css/vendor/font-awesome.min.css">
        <link rel="stylesheet" href="__PUBLIC__/css/main.css">
        <link rel="stylesheet" href="__PUBLIC__/css/custom.css">

        <script src="__PUBLIC__/js/vendor/jquery/jquery-1.11.2.min.js"></script>
        <script src="__PUBLIC__/js/vendor/bootstrap/bootstrap.min.js"></script>
        <script src="__PUBLIC__/js/vendor/jRespond/jRespond.min.js"></script>
        <script src="__PUBLIC__/js/laydate/laydate.js"></script>
        <script src="__PUBLIC__/js/layer/layer.js"></script>
        <script src="__PUBLIC__/js/vendor/animsition/js/jquery.animsition.min.js"></script>
        <script src="__PUBLIC__/js/vendor/slimscroll/jquery.slimscroll.js"></script>
        <script src="__PUBLIC__/js/main.js"></script>


    </head>
    <body id="minovate" class="appWrapper">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="wrap" class="animsition">
            <section id="header">
                <header class="clearfix">
                    <div class="branding">
                        <a class="brand" href="<?php echo url('/admin'); ?>" target="_blank">
                            <span><?php echo \think\Config::get('object_name'); ?></span>
                        </a>
                        <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav-right pull-right list-inline">
                        <li class="dropdown nav-profile">
                            <a href class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span><?php echo \think\Session::get('admin_nickname'); ?> <i class="fa fa-angle-down"></i></span>
                            </a>

                            <ul class="dropdown-menu animated littleFadeInRight" role="menu">
                                <li>
                                    <a role="button" tabindex="0" href="<?php echo url('/admin/administrator/'); ?><?php echo \think\Session::get('uid'); ?>">
                                        <i class="fa fa-user"></i>管理员信息
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?php echo url('/admin/logout'); ?>" role="button" tabindex="0">
                                        <i class="fa fa-sign-out"></i>退出
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </header>
            </section>


<div id="controls">
    <aside id="sidebar">
        <div id="sidebar-wrap">
            <div class="panel-group slim-scroll" role="tablist">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#sidebarNav">
                                Navigation <i class="fa fa-angle-up"></i>
                            </a>
                        </h4>
                    </div>
                    <div id="sidebarNav" class="panel-collapse collapse in" role="tabpanel">
                        <div class="panel-body">
                            <script>
                                $(window).load(function(){
                                    var moduleUrl = '<?php echo !empty($data['module_slug'])?$data['module_slug'] : "admin"; ?>';
                                    if(moduleUrl){
                                        var currentMenuItem = $('#navigation .'+moduleUrl);
                                        if(currentMenuItem.hasClass('dropdown')){
                                            currentMenuItem.addClass('open');
                                            currentMenuItem.find('ul').show();
                                        }else{
                                            currentMenuItem.addClass('active');
                                        }
                                    }
                                });
                            </script>
                            
                            <ul id="navigation">
                                <li class="manage"><a class="ajax-link" href="<?php echo url('/admin'); ?>"><i class="fa fa-home" aria-hidden="true"></i>
                					起始页</a>
                				</li>
                                <li class="administrator">
                                    <a role="button" tabindex="0"><i class="fa fa-user-secret" aria-hidden="true"></i> <span>管理员管理</span></a>
                                    <ul>
                                        <li><a class="ajax-link" href="<?php echo url('/admin/administrator/index'); ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> 管理员列表</a></li>
                                        <li><a class="ajax-link" href="<?php echo url('/admin/administrator/create'); ?>"><i class="fa fa-caret-right"></i> 新增管理员</a></li>

                                    </ul>
                                <li class="data">
                                    <a role="button" tabindex="0"><i class="fa fa-user-secret" aria-hidden="true"></i> <span>广告计划</span></a>
                                    <ul>
                                        <li><a class="ajax-link" href="<?php echo url('/admin/plan'); ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> 计划列表</a></li>
                                    </ul>
                                </li>
                                </li>
                                <li class="data">
                                    <a role="button" tabindex="0"><i class="fa fa-list" aria-hidden="true"></i><span>表单模板</span></a>
                                    <ul>
                                        <li><a class="ajax-link" href="<?php echo url('/admin/test'); ?>"><i class="fa fa-caret-right"></i>新增测试数据</a></li>
                                    </ul>
                                </li>

                                <li class="data">

                                    <a role="button" tabindex="0"><i class="fa fa-list" aria-hidden="true"></i><span>广告管理</span></a>
                                    <ul>
                                        <li><a class="ajax-link" href="<?php echo url('/admin/guanggao/index'); ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> 广告列表</a></li>

                                    </ul>
                                </li>
                                <li class="data">

                                    <a role="button" tabindex="0"><i class="fa fa-list" aria-hidden="true"></i><span>广告统计</span></a>
                                    <ul>
                                        <li><a class="ajax-link" href="<?php echo url('/admin/record/index'); ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> 统计列表</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div>

<section id="content">

    <div class="page page-fullwidth-layout">

        <div class="pageheader">

            <h2><?php echo $data['module_name']; ?></h2>

            <div class="page-bar">

                <ul class="page-breadcrumb">
                    <li>
                        <a href="<?php echo url('/admin'); ?>"><i class="fa fa-home"></i> 起始页</a>
                    </li>
                    <li>
                        <a href="javascript:void 0">广告</a>
                    </li>
                    <li>
                        修改广告
                    </li>

                </ul>

            </div>

        </div>
        <form action="<?php echo url('/admin/guanggao/edit'); ?>&g_id=<?php echo $type['g_id']; ?>" method="post" enctype="multipart/form-data">
            广告名称
            <input type="text" name="name" class="form-control" value="<?php echo $type['g_name']; ?>"><br>
            广告类型  <br><br>
            <input type="hidden" value="<?php echo $type; ?>" name="type">
            图片<input type="radio" id="img_1" name="typ"  value="2" disabled <?php echo !empty($type['g_type']) && $type['g_type']==2?"checked":""; ?>> <br>
            文字<input type="radio"  id="txt_1" name="typ"  value="1" disabled <?php echo !empty($type['g_type']) && $type['g_type']==1?"checked":""; ?>><br><br>


            开启状态  <br><br>
            <label  >开<input type="radio" name="status"  value="开" checked> </label><br>
            <label >关<input type="radio" name="status"  value="关"></label><br><br>
            广告描述
            <input type="text" name="info" class="form-control" value="<?php echo $g_info; ?>"><br><br>
            <span id="txt_a" style="display: block"> 广告计划
        <input type="text" name="plan_id" class="form-control " value="<?php echo $plan_id; ?>" readonly ><br><br>
       </span>
            广告链接<br><br>
            <label onclick="fun_3()"> 手动<input type="radio" name="aa"  value="手动" checked> </label><br>
            <label onclick="fun_4()">上传<input type="radio" name="aa"  value="上传"></label><br><br>
            安卓广告链接 <input id="shoudong1" type="text" name="lianjie_A" class="form-control" value="<?php echo $type['g_lianjie_A']; ?>"><br>
            <input id="shangchuan1" type="file" name="lianjie_A"  style="display: none"><br>


            <label onclick="fun_5()"> 手动<input type="radio" name="aa1"  value="手动" checked> </label><br>
            <label onclick="fun_6()">上传<input type="radio" name="aa1"  value="上传"></label><br><br>
            苹果广告链接<input id="shoudong2" type="text" name="lianjie_I" class="form-control" value="<?php echo $type['g_lianjie_I']; ?>"><br>

            <input id="shangchuan2" type="file" name="lianjie_I"  style="display: none"><br>

        <span id="img_a" style="display: none">
            上传图片
            <input type="file" name="pic" value=""  ><br><br>
        </span>
            <button type="submit" class="btn cke_btn_over">提交</button>
        </form>

    </div>

    <input type="hidden" value="<?php echo $type; ?>" id="type_1">
    <script>

        function fun_1() {
            var img = document.getElementById('img_a');

            if($("#type_1").val()==2){
                img.style.display="block";
            }else {
                img.style.display="none";
            }
        }
        fun_1();
//        function fun_1() {
//            var txt = document.getElementById('txt_a')
//            var img = document.getElementById('img_a')
//            txt.style.display="block";
//            img.style.display="none";
//        }
//        function fun_2() {
//            var txt = document.getElementById('txt_a')
//            var img = document.getElementById('img_a')
////            txt.style.display="none";
//            img.style.display="block";
//        }

        function fun_3() {
            var shoudong1 = document.getElementById('shoudong1')

            var shangchuan1 = document.getElementById('shangchuan1')
            shoudong1.style.display="block";
            shangchuan1.style.display="none";
        }
        function fun_4() {
            var shoudong1 = document.getElementById('shoudong1')
            var shangchuan1 = document.getElementById('shangchuan1')
            shoudong1.style.display="none";
            shangchuan1.style.display="block";
        }
        function fun_5() {
            var shoudong2 = document.getElementById('shoudong2')

            var shangchuan2 = document.getElementById('shangchuan2')
            shoudong2.style.display="block";
            shangchuan2.style.display="none";
        }
        function fun_6() {
            var shoudong2 = document.getElementById('shoudong2')
            var shangchuan2 = document.getElementById('shangchuan2')
            shoudong2.style.display="none";
            shangchuan2.style.display="block";
        }
    </script>
</section>
<!--/ CONTENT -->
        </div>

        <!--/ custom javascripts -->
        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->

    </body>
</html>
