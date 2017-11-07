<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/1 0001
 * Time: 18:31
 */
header("content-type:text/html;charset=utf-8");
include '../config/inc.php';
$id =intval($_GET['id']);
$res=delete('photo','id',$id);
delete('photo','id',$id);
if($res){
    echo "数据删除成功,<a href='upload_image_todb.php'>进入管理</a>";
}else{
    echo "数据删除失败,<a href='upload_image_todb.php'>进入管理</a>";
}