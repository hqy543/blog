<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>博客管理系统</title>
    <link rel="stylesheet" type="text/css" href="../public/back/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/back/css/style.css">
    <link rel="stylesheet" type="text/css" href="../public/back/css/font-awesome.min.css">
    <script src="../public/back/js/jquery-2.1.4.min.js"></script>
    <!--[if gte IE 9]>
    <script src="../public/back/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="../public/back/js/html5shiv.min.js" type="text/javascript"></script>
    <script src="../public/back/js/respond.min.js" type="text/javascript"></script>
    <script src="../public/back/js/selectivizr-min.js" type="text/javascript"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script>window.location.href='upgrade-browser.html';</script>
    <![endif]-->
</head>

<body class="user-select">
<section class="container-fluid">
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">切换导航</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="/">blog</a> </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="">消息</a></li>
                        <li class="dropdown"> <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">admin <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-left">
                                <li><a  title="查看或修改个人信息" data-toggle="modal" data-target="#seeUserInfo">个人信息</a></li>
                                <li><a  title="查看您的登录记录" data-toggle="modal" data-target="#seeUserLoginlog">登录记录</a></li>
                            </ul>
                        </li>
                        <li><a href="login.php" onClick="if(!confirm('是否确认退出？'))return false;">退出登录</a></li>
                        <li><a href="../home/index.php" onClick="if(!confirm('是否确认回到前台？'))return false;">回到前台</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="row">
        <aside class="col-sm-3 col-md-2 col-lg-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="index.php">系统信息</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="article_set.php">文章管理</a></li>
                <li><a href="upload_image_todb.php">图片管理</a></li>
                <li><a href="liuyan_manager.php">留言管理</a></li>
                <li><a href="talk_set.php">评论管理</a></li>
                <li><a href="user_set.php">用户管理</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="login.php">退出系统</a></li>
            </ul>
        </aside>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
            <h1 class="page-header">信息总览</h1>
            <div class="row placeholders">
                <div class="col-xs-6 col-sm-3 placeholder">
                    <h4>文章</h4>
                    <span class="text-muted">0 条</span> </div>
                <div class="col-xs-6 col-sm-3 placeholder">
                    <h4>评论</h4>
                    <span class="text-muted">0 条</span> </div>
                <div class="col-xs-6 col-sm-3 placeholder">
                    <h4>访问量</h4>
                    <span class="text-muted">0</span> </div>
            </div>
            <h1 class="page-header">状态</h1>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <tbody>
                    <tr>
                        <td>登录者: <span>admin</span>，这是您第 <span>90</span> 次登录</td>
                        <td>上次登录时间: 2017-07-30 15:50:28 </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <h1 class="page-header">系统信息</h1>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr> </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>管理员个数:</td>
                        <td>2 人</td>
                        <td>服务器软件:</td>
                        <td>Apache/2.4.10 (Win32) OpenSSL/1.0.1i mod_fcgid/2.3.9</td>
                    </tr>
                    <tr>
                        <td>浏览器:</td>
                        <td>Chrome47</td>
                        <td>PHP版本:</td>
                        <td>5.6.1</td>
                    </tr>
                    <tr>
                        <td>操作系统:</td>
                        <td>Windows 10</td>
                        <td>PHP运行方式:</td>
                        <td>CGI-FCGI</td>
                    </tr>
                    <tr>
                        <td>登录者IP:</td>
                        <td>::1:55570</td>
                        <td>MYSQL版本:</td>
                        <td>5.5.40</td>
                    </tr>
                    <tr>
                        <td>程序版本:</td>
                        <td class="version">blog</td>
                        <td>上传文件:</td>
                        <td>可以 <font size="-6" color="#BBB">(最大文件：2M ，表单：8M )</font></td>
                    </tr>
                    <tr>
                        <td>程序编码:</td>
                        <td>UTF-8</td>
                        <td>当前时间:</td>
                        <td>2017-07-30 15:50:30</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr></tr>
                    </tfoot>
                </table>
            </div>
            <footer>
                <h1 class="page-header">程序信息</h1>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <tbody>
                        <tr>
                            <td><span style="display:inline-block; width:8em">版权所有</span> POWERED BY WY ALL RIGHTS RESERVED</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </footer>
        </div>

    </div>
</section>
<?php include '../config/personal.php'?>
</body>
</html>