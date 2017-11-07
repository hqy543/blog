<?php
/**
 * Created by PhpStorm.
 * User: LXW
 * Date: 2017/7/27
 * Time: 14:20
 */
include "../config/inc.php";
include "../config/show_msg.php";
if(isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $u_date = time();
    $sql="insert into admin(username,password,u_date) values('$username','$password','$u_date')";
    $res = add($sql);
    if($res){
        show_msg('用户增添成功！','user_set.php');
    }

}