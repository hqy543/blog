<?php
/**
 * Created by PhpStorm.
 * User: LXW
 * Date: 2017/7/27
 * Time: 9:38
 */
error_reporting(0);
include'../config/inc.php';
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
                <li><a href="index.php">系统信息</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="article_set.php">文章管理</a></li>
                <li><a href="upload_image_todb.php">图片管理</a></li>
                <li><a href="liuyan_manager.php">留言管理</a></li>
                <li><a href="talk_set.php">评论管理</a></li>
                <li class="active"><a href="user_set.php">用户管理</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="login.php">退出系统</a></li>
            </ul>
        </aside>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
            <h1 class="page-header">用户增加</h1>
            <form action="user_set_post.php" method="post" autocomplete="off">
                <div class="form-group">
                    <label for="category-name">用户名称</label>
                    <input type="username" id="username" name="username" class="form-control" placeholder="在此处输入用户名称" required autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="category-describe">密码</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="在此处输入密码" required autocomplete="off">
                </div>
                <button class="btn btn-primary" type="submit" name="submit">添加新用户</button>
            </form>
            <h1 class="page-header">用户管理</h1>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th><span class="glyphicon glyphicon-th-large" ></span> <span class="visible-lg">ID</span></th>
                        <th><span class="glyphicon glyphicon-user" ></span> <span class="visible-lg">用户名</span></th>
                        <th><span class="glyphicon glyphicon-bookmark"></span> <span class="visible-lg">密码</span></th>
                        <th><span class="glyphicon glyphicon-pushpin"></span> <span class="visible-lg">文章</span></th>
                        <th><span class="glyphicon glyphicon-time"></span> <span class="visible-lg">时间</span></th>
                        <th><span class="glyphicon glyphicon-pencil"></span> <span class="visible-lg">操作</span></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $rows =get('admin','uid desc');
                    if(is_array($rows)):
                    foreach($rows as $v):
                    ?>
                    <tr>
                        <td><?php echo $v['uid'];?></td>
                        <td><?php echo $v['username']?></td>
                        <td><?php echo $v['password']?></td>
                        <td>4</td>
                        <td><?php echo date('Y-m-d H:i:s',$v['u_date']);?></td>
                        <td><a rel="1" name="see">修改</a>
                            <a href="user_del.php?uid=<?php echo $v['uid'];?>">删除</a>
                        </td>
                    </tr>
                        <?php
                    endforeach;
                    endif;
                    ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>
<?php include '../config/personal.php'?>
</body>
</html>