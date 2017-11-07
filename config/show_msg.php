<?php
/**
 * Created by PhpStorm.
 * User: LXW
 * Date: 2017/7/26
 * Time: 16:46
 */

function show_msg($msg='添加成功',$url=''){
    $str ="<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>{$msg}</title>
    <link rel='stylesheet' type='text/css' href='../public/bootstrap/css/bootstrap.min.css'>
    <script src='../public/bootstrap/js/bootstrap.min.js'></script>
</head>
<body>
<ol class='breadcrumb' style='background: #337AB7;'>
    <li><a href='#' style='color: #fff;'>博客系统</a></li>
    <li><a href='#' style='color: #fff;'>{$msg}</a></li>
</ol>
<div class='panel panel-default'>
    <div class='panel-heading'>信息提示</div>
    <div class='panel-body'>
    <span>{$msg},<a href='{$url}'>点击跳转</a></span>
</div>
</div>

</body>
</html>";
    echo $str;
}