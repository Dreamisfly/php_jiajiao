
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>微信商城后台管理</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/common.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/a.css') }}" />
    <script type="text/javascript" src="{{ asset('js/libs/modernizr.min.js') }}"></script>
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>


    <!--<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">-->
    <!--</head>-->

<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="/admin/index/index" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="/admin/index/index">首页</a></li>
                <li><a href="/index/index/index" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-logo-wrap">
            <ul class="navbar-list navbar-nav navbar-right">
                <!-- {empty name="Think.session.loginedAdminUser"}

                    <li><a href="/admin/adminuser/register">注册</a>
                    <li><a href="/admin/adminuser/login">登录</a>
                {else/}
                        欢迎您！{$Think.session.loginedAdminUser}
                        <a href="/admin/adminuser/logout">注销</a>
                {/empty} -->
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="/admin/menu/index"><i class="icon-font">&#xe017;</i>菜单管理</a>
                    <ul class="sub-menu">
                        <li><a href="/admin/menu/create"><i class="icon-font">&#xe008;</i>创建菜单</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/admin/media/index"><i class="icon-font">&#xe017;</i>素材管理</a>
                    <ul class="sub-menu">
                        <li><a href="/admin/media/index"><i class="icon-font">&#xe003;</i>所有素材<li><li><a href="/admin/media/create1"><i class="icon-font">&#xe008;</i>添加临时素材</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/admin/category/index"><i class="icon-font">&#xe017;</i>列表分类管理</a>
                    <ul class="sub-menu">
                        <li><a href="/admin/category/index"><i class="icon-font">&#xe003;</i>所有分类<li><a href="/admin/category/create"><i class="icon-font">&#xe008;</i>添加分类</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/admin/user/index"><i class="icon-font">&#xe017;</i>用户管理</a>
                    <ul class="sub-menu">
                        <li><a href="/admin/user/index"><i class="icon-font">&#xe003;</i>所有用户<li><a href="/admin/user/create"><i class="icon-font">&#xe008;</i>添加用户</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">
        <!-- {__CONTENT__} -->
    </div>
    <!--/main-->
</div>
<div class="container" align="center">
    &copy; 河北师范大学软件学院
</div>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
</body>

</html>