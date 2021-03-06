<?php
/**
 * Created by PhpStorm.
 * User: LXW
 * Date: 2017/7/27
 * Time: 10:49
 */
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="../public/login/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="../public/login/css/demo.css" />
    <!--必要样式-->
    <link rel="stylesheet" type="text/css" href="../public/login/css/component.css" />
    <!--[if IE]>
    <script src="../public/login/js/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="container demo-1">
    <div class="content">
        <div id="large-header" class="large-header">
            <canvas id="demo-canvas"></canvas>
            <div class="logo_box">
                <h3>欢迎你</h3>
                <form action="login_post.php" name="f" method="post">
                    <div class="input_outer">
                        <span class="u_user"></span>
                        <input name="username" class="text" style="color: #FFFFFF !important" type="text" placeholder="请输入账户">
                    </div>
                    <div class="input_outer">
                        <span class="us_uer"></span>
                        <input name="password" class="text" style="color: #FFFFFF !important; position:absolute; z-index:100;" value="" type="password" placeholder="请输入密码">
                    </div>
                    <div class="mb2">
                        <input type="submit" name="submit" value="登陆" class="act-but submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /container -->
<script src="../public/login/js/TweenLite.min.js"></script>
<script src="../public/login/js/EasePack.min.js"></script>
<script src="../public/login/js/rAF.js"></script>
<script src="../public/login/js/demo-1.js"></script>
</body>
</html>
