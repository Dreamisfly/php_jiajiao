<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:78:"G:\phpStudy\WWW\thinkphp\tp5\public/../application/index\view\photo\index.html";i:1508375423;s:73:"G:\phpStudy\WWW\thinkphp\tp5\public/../application/index\view\layout.html";i:1508375423;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
        
    <p>
        输出变量：
        name = <?php echo $name; ?><br>
        row['title'] = <?php echo $row['title']; ?>
    </p>
    <p>
        常量输出：
        <?php echo APP_PATH; ?>

    </p>

</body>
</html>