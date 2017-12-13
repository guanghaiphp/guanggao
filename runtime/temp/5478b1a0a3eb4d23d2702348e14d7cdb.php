<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:86:"E:\phpstudy\PHPTutorial\WWW\basic\public/../application/admin\view\guanggao\index.html";i:1512625030;s:78:"E:\phpstudy\PHPTutorial\WWW\basic\public/../application/admin\view\layout.html";i:1483410766;s:78:"E:\phpstudy\PHPTutorial\WWW\basic\public/../application/admin\view\header.html";i:1512404914;s:76:"E:\phpstudy\PHPTutorial\WWW\basic\public/../application/admin\view\left.html";i:1512379050;s:78:"E:\phpstudy\PHPTutorial\WWW\basic\public/../application/admin\view\footer.html";i:1509873334;}*/ ?>
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
        <script src="__PUBLIC__/js/vendor/jquery-1.11.1.min.js"></script>
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
                        <a href="<?php echo url($data['module_url']); ?>"><?php echo $data['module_name']; ?>列表</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- page content -->
        <div class="pagecontent">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-md-12">
                    <!-- tile -->
                    <section class="tile">
                        <!-- tile header -->
                        <div class="tile-header dvd dvd-btm">
                            <h1 class="custom-font"><strong><?php echo $data['module_name']; ?></strong> 列表</h1>
                            <!--<ul class="controls">-->
                                <!--<li><a href="<?php echo url($data['module_url'].'create'); ?>"><i class="fa fa-plus mr-5"></i> 新增</a></li>-->
                            <!--</ul>-->
                        </div>
                        <!-- /tile header -->
                        <!-- tile body -->
                        <div class="tile-body">
                           <div class="alert alert-info" style="display:none;">显示一些提示信息</div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-custom" id="products-list">
                                    <thead>
                                        <tr>
                                            <th>广告ID</th>
                                            <th>广告名称</th>
                                            <th style="overflow: hidden;">广告描述</th>
                                            <th>广告类型</th>
                                            <th>广告计划</th>
                                            <th>图片名称</th>
                                            <th>安卓广告链接</th>
                                            <th>苹果广告链接</th>
                                            <th>展示次数</th>
                                            <th>开启状态</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($list as $key =>$value):?>

                                            <tr id="tr_<?=$value['g_id']?>" >
                                                <td style="overflow: hidden;"><?=$value['g_id']?></td>
                                                <td style="overflow: hidden;"><?=$value['g_name']?></td>
                                                <td style="width: 120px;display:block;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;"><?=$value['g_info']?></td>
                                                <td style="overflow: hidden;"><?=$value['g_type']?></td>
                                                <td style="overflow: hidden;"><?=$value['plan_id']?></td>
                                                <td style="overflow: hidden;"><?=$value['picname']?></td>
                                                <td style="overflow: hidden;"><?=$value['g_lianjie_A']?></td>
                                                <td style="overflow: hidden;"><?=$value['g_lianjie_I']?></td>
                                                <td style="overflow: hidden;"><?=$value['show_number']?></td>
                                                <td class="expire_time" style="overflow: hidden;">
                                                    <?=$value['status']?>

                                                </td>
                                                <td>
                                                    <a class="btn btn-danger" href="<?php echo url('Guanggao/del'); ?>?g_id=<?php echo $value['g_id']; ?>&&plan_id=<?php echo $value['plan_id']; ?>"  onclick="if(confirm('确定要删除该广告吗')){ }">
                                                        <i class="glyphicon glyphicon-trash icon-white"></i>
                                                        删除
                                                    </a>
                                                    <a class="btn btn-danger" href="<?php echo url('Guanggao/edit'); ?>?g_id=<?php echo $value['g_id']; ?>&&plan_id=<?php echo $value['plan_id']; ?>&&g_name=<?php echo $value['g_name']; ?>&&g_info=<?php echo $value['g_info']; ?>&&lianjie_A=<?php echo $value['g_lianjie_A']; ?>&&lianjie_I=<?php echo $value['g_lianjie_I']; ?>">
                                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                                       修改
                                                    </a>
                                                </td>
                                            </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                                <div class="text-center"><?php echo $list->render(); ?></div>
                            </div>
                        </div>
                        <!-- /tile body -->
                    </section>
                    <!-- /tile -->
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /page content -->
        <script type="text/javascript">
        function deleteData(id){
            $.ajax({
                type:"POST",
                url:"<?php echo url($data['module_url'].'delete'); ?>/"+id,
                success:function(data){
                    if(data.error == 0){
                        $('#tr_'+data.id).remove();
                    }
                    $('.alert').html(data.msg).show();
                    setTimeout(function() {
                        $('.alert').hide();
                    }, 3000);
                }
            });
        }
        function updateExpireTime(id){
            $.ajax({
                type:"POST",
                url:"<?php echo url($data['module_url'].'update_expire_time'); ?>/"+id,
                success:function(data){
                    if(data.error == 0){
                        $('#tr_'+data.id+' .expire_time').html(data.expire_time);
                    }
                    $('.alert').html(data.msg).show();
                    setTimeout(function() {
                        $('.alert').hide();
                    }, 3000);
                }
            });
        }
        </script>
    </div>
</section>
<!--/ CONTENT -->

        </div>

        <!--/ custom javascripts -->
        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->

    </body>
</html>