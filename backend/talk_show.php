<?php
/**
 * Created by PhpStorm.
 * User: LXW
 * Date: 2017/7/29
 * Time: 13:58
 */
include '../config/inc.php';
include '../config/show_msg.php';

$tid = intval($_GET['tid']);
$val = intval($_GET['val']);
if($val == 1){
    $sql = "update talk set status=1 where tid=$tid";
}
if($val == 2){
    $sql = "update talk set status=2 where tid=$tid";
}
$res = save($sql);
if($res){
    show_msg('操作成功!','talk_set.php');
}else{
    show_msg('操作失败!','talk_set.php');
}