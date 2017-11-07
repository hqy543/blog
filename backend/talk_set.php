<?php
/**
 * Created by PhpStorm.
 * User: LXW
 * Date: 2017/7/27
 * Time: 10:17
 */
error_reporting(0);
include '../config/inc.php';
include "../config/page.php";
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
                <li class="active"><a href="#">评论管理</a></li>
                <li><a href="user_set.php">用户管理</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="#">退出系统</a></li>
            </ul>
        </aside>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
            <form action="comment_set.php" method="post">
                <h1 class="page-header">管理</h1>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th><span class="glyphicon glyphicon-th-large"></span> <span class="visible-lg">选择</span></th>
                            <th><span class="glyphicon glyphicon-file"></span> <span class="visible-lg">内容</span></th>
                            <th><span class="glyphicon glyphicon-pencil"></span> <span class="visible-lg">操作</span></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        $page = $_GET['page'];//$page为空
                        $total = getCount('talk');//获取总记录数
                        $pageSize= 10;
                        $arr=page($total,$page,$pageSize);
                        $rows = get('talk',"tid desc limit {$arr['offSet']},{$pageSize}");
                        if(is_array($rows)):
                            foreach($rows as $v):
                                ?>
                        <tr>
                            <td><input type="checkbox" class="input-control" name="checkbox[]" value=""></td>
                            <td><?php echo mb_substr($v['content'],0,25,'utf-8')."...";?></td>
                            <td><a href="talk_show.php?tid=<?php echo $v['tid'];?>&val=1" class="btn btn-info btn-xs">显示</a>&nbsp;&nbsp;<a href="talk_show.php?tid=<?php echo $v['tid'];?>&val=2" class="btn
                <?php if($v['status']==2)
                                {
                                    echo "btn-default";
                                }else{
                                    echo "btn-success";
                                }
                                ?> btn-xs">屏蔽</a></td>
                        </tr>
                            <?php
                        endforeach;
                        endif;
                        ?>
                        </tbody>
                    </table>
                </div>
                <footer class="message_footer">
                    <nav>
                        <div class="btn-toolbar operation" role="toolbar">
                            <div class="btn-group" role="group">
                                <a class="btn btn-default" onClick="select()">全选</a>
                                <a class="btn btn-default" onClick="reverse()">反选</a>
                                <a class="btn btn-default" onClick="noselect()">不选</a>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="submit" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="删除全部选中" name="checkbox_delete">删除</button>
                            </div>
                        </div>
                        <ul class="pagination pagenav">
                            <li class="disabled"><a aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a> </li>
                            <li class="active"><a>1</a></li>
                            <li class="disabled"><a aria-label="Next"> <span aria-hidden="true">&raquo;</span> </a> </li>
                        </ul>
                    </nav>
                </footer>
            </form>
        </div>



    </div>
</section>
<?php include '../config/personal.php'?>
</body>
</html>
