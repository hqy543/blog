
<!doctype html>
<html lang="zh-CN">
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
                        <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">admin <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-left">
                                <li><a title="查看或修改个人信息" data-toggle="modal" data-target="#seeUserInfo">个人信息</a></li>
                                <li><a title="查看您的登录记录" data-toggle="modal" data-target="#seeUserLoginlog">登录记录</a></li>
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
                <li ><a href="article_set.php">文章管理</a></li>
                <li class="active"><a href="upload_image_todb.php">图片管理</a></li>
                <li><a href="liuyan_manager.php">留言管理</a></li>
                <li><a href="talk_set.php">评论管理</a></li>
                <li><a href="user_set.php">用户管理</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="login.php">退出系统</a></li>
            </ul>
        </aside>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
            <div class="row">
                <div class="col-md-5">
                    <h1 class="page-header">添加</h1>
                    <form name="form1" method="post" action="photo-add-post.php" enctype="multipart/form-data">
                        <p>图片：<input type="file" name="photo"></p>
                        <p><input type="hidden" name="action" value="add"><input type="submit" name="b1" value="提交"></p>
                    </form>
                </div>
                <div class="col-md-7">
                    <h1 class="page-header">管理</h1>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>照片</th>
                                <th>类型</th>
                                <th>编辑</th>
                            </tr>
                        <?php
                        include 'photo-add-post.php';
                        $sqlstr = "select * from photo order by id desc";
                        $query = mysql_query($sqlstr) or die(mysql_error());
                        $result = array();
                        while($thread=mysql_fetch_assoc($query)){
                            $result[] = $thread;
                        }
                        foreach($result as $val):

                        ?>
                            <tr>
                                <td><?php echo '<img src="photo-add-post.php?action=show&id='.$val['id'].'&t='.time().'" width="150">';?></td>
                                <td><?php echo $val['type'];?></td>
                                <td><a href="photo_del.php?id=<?php echo $val['id'];?>" class="btn btn-info btn-xs">删除</a></td>
                            </tr>

                            <?php
                            endforeach;;
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</section>
</body>
</html>
