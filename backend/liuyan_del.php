<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/30 0030
 * Time: 17:29
 */
header("content-type:text/html;charset=utf-8");
include '../config/inc.php';
$lid =intval($_GET['lid']);
$res=delete('liuyan','lid',$lid);
delete('liuyan','lid',$lid);
if($res){
    echo "数据删除成功,<a href='../backend/liuyan_manager.php'>进入管理</a>";
}else{
    echo "数据删除失败,<a href='../backend/liuyan_manager.php'>进入管理</a>";
}