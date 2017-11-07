<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/30 0030
 * Time: 16:24
 */
header("content-type:text/html;charset=utf-8");
if(isset($_POST['submit'])){
    $nickname =trim($_POST['nickname']);
    $email =trim($_POST['email']);
    $content =trim($_POST['content']);
    $replytime = time();
    include '../config/inc.php';
    $sql="insert into liuyan(nickname,email,content,replytime) values('$nickname','$email','$content',$replytime)";
    $res = add($sql);
    if($res){
        echo "留言添加成功,<a href='../home/liuyan.php'>跳转</a>";
    }

}
