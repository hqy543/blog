<?php
/**
 * Created by PhpStorm.
 * User: LXW
 * Date: 2017/7/30
 * Time: 0:19
 */
session_start();
if(isset($_POST['submit'])){
    $title = trim($_POST['title']);
    $now = time();
    $uid = $_SESSION['uid'];
    $keyword = trim($_POST['keyword']);
    $content = trim($_POST['content']);
    include '../config/inc.php';
    include '../config/show_msg.php';
    $sql = "insert into article(title,now,uid,keyword,content) values('$title',$now,$uid,'$keyword','$content')";
    $result = add($sql) ;
    if($result){
        show_msg('文章添加成功!','article_set.php');
    }else{
        show_msg('文章添加失败！','article_set.php');
    }
}


