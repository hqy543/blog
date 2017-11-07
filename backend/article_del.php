<?php
/**
 * Created by PhpStorm.
 * User: LXW
 * Date: 2017/7/29
 * Time: 22:58
 */
include '../config/inc.php';
include '../config/show_msg.php';
$aid = intval($_GET['aid']);
$res = delete('article','aid',$aid);
if($res){
    show_msg('文章删除成功','article_set.php');
}else{
    show_msg('文章删除失败','article_set.php');
}