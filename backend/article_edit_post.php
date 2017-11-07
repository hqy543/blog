<?php
/**
 * Created by PhpStorm.
 * User: LXW
 * Date: 2017/7/31
 * Time: 17:44
 */

error_reporting(0);
session_start();
if(isset($_POST['submit'])){
    $title =trim($_POST['title']);
    $content =trim($_POST['content']);
    $keyword = trim($_POST['keyword']);
    $now = time();
    $uid = trim($_POST['uid']);
    $aid = $_SESSION['aid'];
    include '../config/inc.php';
    include '../config/show_msg.php';


    $sql= "update article set title='$title',now=$now,content='$content',keyword='$keyword' ,uid='$uid' where aid='$aid'";
    $res = save($sql);
    if($res){
        show_msg('文章修改成功!','article_set.php');
    }else{
        show_msg('文章修改失败!','article_set.php');
    }
}
