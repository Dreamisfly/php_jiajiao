<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:77:"G:\phpStudy\WWW\thinkphp\tp5\public/../application/index\view\user\index.html";i:1509004484;s:73:"G:\phpStudy\WWW\thinkphp\tp5\public/../application/index\view\layout.html";i:1508375423;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>分页码的使用—所有用户</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!--显示当前页用户-->
<table>
    <tr>
        <td>用户名</td>
        <td>密码</td>
    </tr>
    <?php if(is_array($users) || $users instanceof \think\Collection || $users instanceof \think\Paginator): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr>
            <td><?php echo $vo['name']; ?></td>
            <td><?php echo $vo['pswd']; ?></td>
        </tr>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<!--显示分页码-->
<?php echo $users->render(); ?>
</body>
</html>

</body>
</html>