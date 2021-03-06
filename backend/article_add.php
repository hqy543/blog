<?php
/**
 * Created by PhpStorm.
 * User: LXW
 * Date: 2017/7/29
 * Time: 1:53
 */

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
                <li class="active"><a href="article_set.php">文章管理</a></li>
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
            <div class="row">
                <form action="article_add_post.php" method="post" >
                    <div class="col-md-9">
                        <h1 class="page-header">撰写新文章</h1>
                        <div class="form-group">
                            <label for="article-title" class="sr-only">标题</label>
                            <input type="text" id="article-titlt" name="title" class="form-control" placeholder="在此处输入标题" required autofocus autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="article-content" class="sr-only">内容</label>
                            <script id="article-content" name="content" type="text/plain"></script>
                        </div>
                        <div class="add-article-box">
                            <h2 class="add-article-box-title"><span>关键字</span></h2>
                            <div class="add-article-box-content">
                                <input type="text" class="form-control" placeholder="请输入关键字" name="keyword" autocomplete="off">
                                <span class="prompt-text">多个标签请用英文逗号,隔开。</span>
                            </div>
                        </div>
                        <div class="add-article-box-footer">
                            <button class="btn btn-primary" type="submit" name="submit">发布</button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h1 class="page-header">操作</h1>
                        <div class="add-article-box">
                            <h2 class="add-article-box-title"><span>栏目</span></h2>
                            <div class="add-article-box-content">
                                <ul class="category-list">
                                    <li>
                                        <label>
                                            <input name="category" type="radio" value="1" checked>
                                            这是栏目 <em class="hidden-md">( 栏目ID: <span>1</span> )</em></label>
                                    </li>
                                    <li>
                                        <label>
                                            <input name="category" type="radio" value="2">
                                            这是栏目 <em class="hidden-md">( 栏目ID: <span>2</span> )</em></label>
                                    </li>
                                    <li>
                                        <label>
                                            <input name="category" type="radio" value="3">
                                            这是栏目 <em class="hidden-md">( 栏目ID: <span>3</span> )</em></label>
                                    </li>
                                    <li>
                                        <label>
                                            <input name="category" type="radio" value="4">
                                            这是栏目 <em class="hidden-md">( 栏目ID: <span>4</span> )</em></label>
                                    </li>
                                    <li>
                                        <label>
                                            <input name="category" type="radio" value="5">
                                            这是栏目 <em class="hidden-md">( 栏目ID: <span>5</span> )</em></label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="add-article-box">
                            <h2 class="add-article-box-title"><span>标签</span></h2>
                            <div class="add-article-box-content">
                                <input type="text" class="form-control" placeholder="输入新标签" name="tags" autocomplete="off">
                                <span class="prompt-text">多个标签请用英文逗号,隔开</span> </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

<script src="../public/back/ueditor/ueditor.config.js"></script>
<script src="../public/back//ueditor/ueditor.all.min.js"> </script>
<script src="../public/back//ueditor/lang/zh-cn/zh-cn.js"></script>
<script id="uploadEditor" type="text/plain" style="display:none;"></script>
<script type="text/javascript">
    var editor = UE.getEditor('article-content');
    window.onresize=function(){
        window.location.reload();
    }
    var _uploadEditor;
    $(function () {
        //重新实例化一个编辑器，防止在上面的editor编辑器中显示上传的图片或者文件
        _uploadEditor = UE.getEditor('uploadEditor');
        _uploadEditor.ready(function () {
            //设置编辑器不可用
            //_uploadEditor.setDisabled();
            //隐藏编辑器，因为不会用到这个编辑器实例，所以要隐藏
            _uploadEditor.hide();
            //侦听图片上传
            _uploadEditor.addListener('beforeInsertImage', function (t, arg) {
                //将地址赋值给相应的input,只去第一张图片的路径
                $("#pictureUpload").attr("value", arg[0].src);
                //图片预览
                //$("#imgPreview").attr("src", arg[0].src);
            })
            //侦听文件上传，取上传文件列表中第一个上传的文件的路径
            _uploadEditor.addListener('afterUpfile', function (t, arg) {
                $("#fileUpload").attr("value", _uploadEditor.options.filePath + arg[0].url);
            })
        });
    });
    //弹出图片上传的对话框
    $('#upImage').click(function () {
        var myImage = _uploadEditor.getDialog("insertimage");
        myImage.open();
    });
    //弹出文件上传的对话框
    function upFiles() {
        var myFiles = _uploadEditor.getDialog("attachment");
        myFiles.open();
    }
</script>
<?php include '../config/personal.php'?>
</body>
</html>
