<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:73:"E:\phpstudy\PHPTutorial\WWW\basic/application/admin\view\plan\create.html";i:1512473162;s:68:"E:\phpstudy\PHPTutorial\WWW\basic/application/admin\view\layout.html";i:1483410766;s:68:"E:\phpstudy\PHPTutorial\WWW\basic/application/admin\view\header.html";i:1512633341;s:66:"E:\phpstudy\PHPTutorial\WWW\basic/application/admin\view\left.html";i:1512379050;s:68:"E:\phpstudy\PHPTutorial\WWW\basic/application/admin\view\footer.html";i:1509873334;}*/ ?>
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
    <link href="__PUBLIC__/css/admin/test.css">
    <div class="page page-fullwidth-layout">
        <div class="pageheader">
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="<?php echo url('/admin'); ?>"><i class="fa fa-home"></i> 起始页</a>
                    </li>
                    <li>
                        广告计划
                    </li>
                    <li>
                        新增广告计划
                    </li>
                </ul>
            </div>
        </div>
        <div class="pagecontent">
            <div class="add-nav">
                <div class="nav-heading">
                    <h3>新增广告计划 </h3>
                    <span class="controls pull-right">
                        <a href="<?php echo url($data['module_url']); ?>" class="btn btn-ef btn-ef-1 btn-ef-1-default btn-ef-1a btn-rounded-20 mr-5" data-toggle="tooltip" title="返回"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                    </span>
                </div>

                <div class="row">

                    <div class="col-md-12">

                        <section class="tile">

                            <div class="tile-header dvd dvd-btm">
                                <h1 class="custom-font"><strong>填写信息</strong> </h1>
                            </div>

                            <div class="tile-body">
                                <form role="form" enctype="multipart/form-data" action="<?php echo url($data['module_url']).'add'; ?>" method="post">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>广告计划名称</label>
                                            <input type="text" class="form-control " name="name" value="">
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            广告计划链接<br><br>
                                            <label onclick="fun_3()"> 手动<input type="radio"  name="aa" checked> </label><br>
                                            <label onclick="fun_4()">上传<input type="radio"   name="aa"></label><br><br>
                                            <input id="shoudong" type="text" name="p_lianjie" class="form-control"><br>
                                            <input id="shangchuan" type="file" name="p_lianjie"  style="display: none"><br>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>广告类型</label>
                                            <select name="type"  class="selectpicker" name="type">
                                                <option value="1">文字</option>
                                                <option value="2">图片</option>
                                            </select>
                                            <!--<input type="text" class="form-control " name="macIp" value="">-->
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>尺寸</label>
                                            <input type="text" class="form-control " style="width:120px; " name="plan_width" placeholder="宽度">
                                            <input type="text" class="form-control " style="width:120px; " name="plan_height" placeholder="高度">
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>开始时间</label>
                                            <input type="text" class="form-control layui-input" id="start_time" name="start_time" placeholder="选择开始时间">
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>结束时间</label>
                                            <input type="text" class="form-control layui-input" id="end_time" name="end_time" placeholder="选择结束时间">
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>广告条数限制</label>
                                            <input type="number" class="form-control " name="limit" value="5" placeholder="请输入限制条数">
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>计划展示状态</label>
                                            <select  class="selectpicker" name="status">
                                                <option value="1">展示</option>
                                                <option value="2">隐藏</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button class="btn btn-lg btn-primary" type="submit"><i class="glyphicon glyphicon-ok"></i>&nbsp;提交</button>
                                </form>
                            </div>

                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function fun_3() {
            var shoudong = document.getElementById('shoudong')
            var shangchuan = document.getElementById('shangchuan')
            shoudong.style.display="block";
            shangchuan.style.display="none";
        }
        function fun_4() {
            var shoudong = document.getElementById('shoudong')
            var shangchuan = document.getElementById('shangchuan')
            shoudong.style.display="none";
            shangchuan.style.display="block";
        }
        laydate.render({
            elem: '#start_time', //指定元素
//            format: 'YYYY/MM/DD',
//            istime: false, //是否显示分钟
//            istoday: true //是否显示今天
        });
        laydate.render({
            elem: '#end_time', //指定元素
        });


    </script>
</section>


        </div>

        <!--/ custom javascripts -->
        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->

    </body>
</html>
