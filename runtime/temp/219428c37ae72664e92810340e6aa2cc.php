<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"D:\phpStudy\WWW\basic/application/index\view\index\home.html";i:1512745329;}*/ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script type="text/javascript" src="__PUBLIC__/home/js/jquery-1.7.2.min.js"></script>
</head>
<body>
<?php
    $js_name = array();
    $js_name = ['-bottom','-top','-center'];
    $js = array_rand($js_name,1);
?>
<script type="text/javascript" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/public/static/planjs/<?php echo $plan_id; ?><?php echo $js_name[$js]; ?>.js"></script>

</body>
</html>
