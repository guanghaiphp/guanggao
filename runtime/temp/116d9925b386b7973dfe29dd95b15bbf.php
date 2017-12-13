<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:80:"E:\phpstudy\PHPTutorial\WWW\basic/application/admin\view\administrator\edit.html";i:1512696855;s:68:"E:\phpstudy\PHPTutorial\WWW\basic/application/admin\view\layout.html";i:1483410766;s:68:"E:\phpstudy\PHPTutorial\WWW\basic/application/admin\view\header.html";i:1512633342;s:66:"E:\phpstudy\PHPTutorial\WWW\basic/application/admin\view\left.html";i:1512734518;s:75:"E:\phpstudy\PHPTutorial\WWW\basic/application/admin\view\custom-fields.html";i:1509180060;s:68:"E:\phpstudy\PHPTutorial\WWW\basic/application/admin\view\footer.html";i:1509873334;}*/ ?>
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

                                    <a role="button" tabindex="0"><i class="fa fa-list" aria-hidden="true"></i><span>展示统计</span></a>
                                    <ul>
                                        <li><a class="ajax-link" href="<?php echo url('/admin/record/index'); ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> 统计列表</a></li>

                                    </ul>
                                </li>

                                <li class="data">

                                    <a role="button" tabindex="0"><i class="fa fa-list" aria-hidden="true"></i><span>计划统计</span></a>
                                    <ul>
                                        <li><a class="ajax-link" href="<?php echo url('/admin/record/planStat'); ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> 计划统计列表</a></li>

                                    </ul>
                                </li>
                                <li class="data">

                                    <a role="button" tabindex="0"><i class="fa fa-list" aria-hidden="true"></i><span>广告统计</span></a>
                                    <ul>
                                        <li><a class="ajax-link" href="<?php echo url('/admin/record/adverStat'); ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> 广告统计列表</a></li>

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
                        <a href="javascript:void 0">管理员</a>
                    </li>
                    <li>
                        修改<?php echo $data['module_name']; ?>
                    </li>

                </ul>

            </div>

        </div>

        <div class="pagecontent">


            <form action="<?php echo url('admin/administrator/edit'); ?>?id=<?php echo $list['id']; ?>"  method="post">
                用户名<input type="text" value="<?=$list['username']?>"><br>
                密码<input type="text" name="password"value="" ><br>
<button type="submit" >修改</button>
            </form>

            <!--<div class="add-nav">-->
                <!--<div class="nav-heading">-->
                    <!--<h3>修改<?php echo $data['module_name']; ?></h3>-->
                    <!--<span class="controls pull-right">-->
                        <!--<a href="<?php echo url($data['module_url']); ?>" class="btn btn-ef btn-ef-1 btn-ef-1-default btn-ef-1a btn-rounded-20 mr-5" data-toggle="tooltip" title="返回"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>-->
                    <!--</span>-->
                <!--</div>-->

                <!--&lt;!&ndash; row &ndash;&gt;-->
                <!--<div class="row">-->
                    <!--&lt;!&ndash; col &ndash;&gt;-->
                    <!--<div class="col-md-12">-->


                        <!--&lt;!&ndash; tile &ndash;&gt;-->
                        <!--<section class="tile">-->

                            <!--&lt;!&ndash; tile header &ndash;&gt;-->
                            <!--<div class="tile-header dvd dvd-btm">-->
                                <!--<h1 class="custom-font"><strong>修改</strong> 基本信息</h1>-->
                            <!--</div>-->
                            <!--&lt;!&ndash; /tile header &ndash;&gt;-->



                            <!--&lt;!&ndash; tile body &ndash;&gt;-->
                            <!--<div class="tile-body">-->

                                <!--<form role="form" enctype="multipart/form-data" action="<?php echo url($data['module_url']).'add'; ?>" method="post">-->
                                    <!--
<div class="row">
<?php if(is_array($data['edit_fields']) || $data['edit_fields'] instanceof \think\Collection): if( count($data['edit_fields'])==0 ) : echo "" ;else: foreach($data['edit_fields'] as $key=>$field): switch($name=$field['type']): case "text": if(isset($field['extra']['wrapper'])): ?>
                <div class="<?php echo $field['extra']['wrapper'];?>">
            <?php else: ?>
                <div class="col-xs-12">
            <?php endif; ?>
                <div class="form-group">
                    <?php if(isset($field['label']) AND $field['label']): ?><label><?php echo $field['label']; ?></label><?php endif; ?>

                    <input type="<?php echo $field['type']; ?>"
                        <?php if(isset($field['id']) AND $field['id']): ?>id="<?php echo $field['id']; ?>"<?php endif; if(isset($field['disabled']) AND $field['disabled']): ?>disabled="disabled"<?php endif; ?>
                        class="form-control <?php if(isset($field['class']) AND $field['class']): ?><?php echo $field['class']; endif; ?>"
                        <?php if(isset($field['extra']['data']['format'])): ?>data-format="<?php echo $field['extra']['data']['format']; ?>"<?php endif; ?>
                        name="<?php echo $key; ?>" value="<?php if(isset($item[$key])): ?><?php echo $item[$key]; endif; ?>">

                    <?php if(isset($field['notes']) AND $field['notes']): ?><p class="help-block"><?php echo $field['notes']; ?></p><?php endif; ?>
                </div>
            </div>
        <?php break; case "password": if(isset($field['extra']['wrapper'])): ?>
                <div class="<?php echo $field['extra']['wrapper'];?>">
            <?php else: ?>
                <div class="col-xs-12">
            <?php endif; ?>
                <div class="form-group">
                    <?php if(isset($field['label']) AND $field['label']): ?><label><?php echo $field['label']; ?></label><?php endif; ?>

                    <input type="<?php echo $field['type']; ?>"
                    <?php if(isset($field['id']) AND $field['id']): ?>id="<?php echo $field['id']; ?>"<?php endif; if(isset($field['disabled']) AND $field['disabled']): ?>disabled="disabled"<?php endif; ?>
                    class="form-control" name="<?php echo $key; ?>" value="">

                    <?php if(isset($field['notes']) AND $field['notes']): ?><p class="help-block"><?php echo $field['notes']; ?></p><?php endif; ?>
                </div>
            </div>
        <?php break; case "file": if(isset($field['extra']['wrapper'])): ?>
                <div class="<?php echo $field['extra']['wrapper'];?>">
            <?php else: ?>
                <div class="col-xs-12">
            <?php endif; ?>
                <div class="form-group">
                    <?php if(isset($field['label']) AND $field['label']): ?><label><?php echo $field['label']; ?></label><?php endif; ?>

                    <input type="<?php echo $field['type']; ?>"
                        <?php if(isset($field['id']) AND $field['id']): ?>id="<?php echo $field['id']; ?>"<?php endif; if(isset($field['disabled']) AND $field['disabled']): ?>disabled="disabled"<?php endif; ?>
                        name="<?php echo $key; ?>">

                    <?php if(isset($item[$key]) AND $item[$key] != ""): ?>
                        <a href="__UPLOADS__/<?php echo $item[$key]; ?>" target="_blank"><img src="__UPLOADS__/<?php echo $item[$key]; ?>" class="img-responsive img-thumbnail"></a>
                        <a href="<?php echo url($data['module_url'] . 'delete_image/' . $item['id']); ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                    <?php endif; if(isset($field['notes']) AND $field['notes']): ?><p class="help-block"><?php echo $field['notes']; ?></p><?php endif; ?>
                </div>
            </div>
        <?php break; case "radio": if(isset($field['extra']['wrapper'])): ?>
                <div class="<?php echo $field['extra']['wrapper'];?>">
            <?php else: ?>
                <div class="col-xs-12">
            <?php endif; ?>
                <div class="checkbox">
                    <?php if(isset($field['label']) AND $field['label']): ?><span><?php echo $field['label']; ?></span><?php endif; foreach($field['default'] as $ov => $ol): ?>
                        <label>
                            <input type="<?php echo $field['type']; ?>" name="<?php echo $key; ?>"
                                <?php if(isset($field['disabled']) AND $field['disabled']): ?>disabled="disabled"<?php endif; ?>
                                value="<?php echo $ov; ?>" <?php if((isset($item[$key]) && $item[$key] == $ol)): ?>
                                checked="checked" <?php endif; ?>> <?php echo $ol; ?>
                        </label>
                    <?php endforeach; if(isset($field['notes']) AND $field['notes']): ?><p class="help-block"><?php echo $field['notes']; ?></p><?php endif; ?>
                </div>
            </div>
        <?php break; case "checkbox": if(isset($field['extra']['wrapper'])): ?>
                <div class="<?php echo $field['extra']['wrapper'];?>">
            <?php else: ?>
                <div class="col-xs-12">
            <?php endif; ?>
                <div class="checkbox">
                    <?php if(isset($field['label']) AND $field['label']): ?><span><?php echo $field['label']; ?></span><?php endif; foreach($field['default'] as $ov => $ol): ?>
                        <label>
                            <input type="<?php echo $field['type']; ?>" name="<?php echo $key; ?>[]"
                                <?php if(isset($field['disabled']) AND $field['disabled']): ?>disabled="disabled"<?php endif; ?>
                                value="<?php echo $ov; ?>" <?php if((isset($item[$key]) && $item[$key] == $ol)): ?>
                                checked="checked" <?php endif; ?>> <?php echo $ol; ?>
                        </label>
                    <?php endforeach; if(isset($field['notes']) AND $field['notes']): ?><p class="help-block"><?php echo $field['notes']; ?></p><?php endif; ?>
                </div>
            </div>
        <?php break; case "select": if(isset($field['extra']['wrapper'])): ?>
                <div class="<?php echo $field['extra']['wrapper'];?>">
            <?php else: ?>
                <div class="col-xs-12">
            <?php endif; ?>
                <div class="form-group">
                    <?php if(isset($field['label']) AND $field['label']): ?><label><?php echo $field['label']; ?></label><?php endif; ?>

                    <select  name="<?php echo $key; ?>"
                        <?php if(isset($field['id']) AND $field['id']): ?>id="<?php echo $field['id']; ?>"<?php endif; if(isset($field['disabled']) AND $field['disabled']): ?>disabled="disabled"<?php endif; ?>
                        class="form-control" style="max-width: 300px;">

                            <?php foreach($field['default'] as $ov => $ol): ?>
                                <option value="<?php echo $ov; ?>" <?php if(isset($item[$key]) AND $item[$key] == $ol): ?>selected="selected"<?php endif; ?>><?php echo $ol; ?></option>
                            <?php endforeach; ?>
                    </select>

                    <?php if(isset($field['notes']) AND $field['notes']): ?><p class="help-block"><?php echo $field['notes']; ?></p><?php endif; ?>
                </div>
            </div>
        <?php break; case "textarea": if(isset($field['extra']['wrapper'])): ?>
                <div class="<?php echo $field['extra']['wrapper'];?>">
            <?php else: ?>
                <div class="col-xs-12">
            <?php endif; ?>
                <div class="form-group">
                    <?php if(isset($field['label']) AND $field['label']): ?><label><?php echo $field['label']; ?></label><?php endif; ?>

                    <textarea
                        class="form-control <?php if(isset($field['class']) AND $field['class']): ?><?php echo $field['class']; endif; ?>"
                        <?php if(isset($field['id']) AND $field['id']): ?>id="<?php echo $field['id']; ?>"<?php endif; ?>
                        name="<?php echo $key; ?>"
                        <?php if(isset($field['disabled']) AND $field['disabled']): ?>disabled="disabled"<?php endif; ?>><?php if(isset($item[$key]) AND $item[$key]): ?><?php echo $item[$key]; endif; ?></textarea>
                    <?php if((isset($data['ckeditor']) and $data['ckeditor'])): ?><?php echo display_ckeditor($data['ckeditor']);; endif; if(isset($field['notes']) AND $field['notes']): ?><p class="help-block"><?php echo $field['notes']; ?></p><?php endif; ?>
                </div>
            </div>
        <?php break; case "alert": if(isset($field['extra']['wrapper'])): ?>
                <div class="<?php echo $field['extra']['wrapper'];?>">
            <?php else: ?>
                <div class="col-xs-12">
            <?php endif; ?>
                <div class="alert <?php if(isset($field['class']) AND $field['class']): ?><?php echo $field['class']; else: ?>alert-info<?php endif; ?>">
                    <?php if(isset($field['default'])): ?><?php echo $field['default']; endif; ?>
                </div>
            </div>
        <?php break; case "hr": ?>
             <div class="clearfix hr b-b mb-20 pb-20"></div>
        <?php break; case "clearfix": ?>
             <div class="clearfix"></div>
        <?php break; default: endswitch; endforeach; endif; else: echo "" ;endif; ?>
</div>-->
                                    <!--<button class="btn btn-lg btn-primary" type="submit"><i class="glyphicon glyphicon-ok"></i>&nbsp;提交</button>-->
                    			<!--</form>-->

                            <!--</div>-->
                            <!--&lt;!&ndash; /tile body &ndash;&gt;-->

                        <!--</section>-->
                        <!--&lt;!&ndash; /tile &ndash;&gt;-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->



        </div>

    </div>

</section>

        </div>

        <!--/ custom javascripts -->
        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->

    </body>
</html>
