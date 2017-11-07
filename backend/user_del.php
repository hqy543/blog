<?php
/**
 * Created by PhpStorm.
 * User: LXW
 * Date: 2017/7/28
 * Time: 11:32
 */

include '../config/inc.php';
include '../config/show_msg.php';
$uid =intval($_GET['uid']);
$res=delete('admin','uid',$uid);
delete('admin','uid',$uid);
if($res){
    show_msg("用户删除成功！",'user_set.php');
}else{
    show_msg("用户删除失败！",'user_set.php');
}