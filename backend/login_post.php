<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/13 0013
 * Time: 9:12
 * 完成用户登入验证
 */
session_start();
if(isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    function stripCharacter($value){
        $value = str_replace("'","",$value);
        $value = str_replace('"',"",$value);
        $value = str_replace("#","",$value);
        $value = str_replace("\\","",$value);
        return  $value;
    }
    $username = stripCharacter($username);
    $password = stripCharacter($password);
    include '../config/inc.php';
    include '../config/show_msg.php';
    $link = connect();
    $sql = "select * from admin where username='$username'and password='$password' limit 1";
    $result = @mysqli_query($link,$sql) or die(mysqli_error($link));
    if($result && mysqli_num_rows($result)){
        $_SESSION['username']=$username;
        $row = find('admin');
        $uid = $row['uid'];
        $_SESSION['uid']=$uid;
        $_SESSION['flag']=1;
        show_msg("用户登入成功！",'index.php');
    }else{
        show_msg("用户名或密码错误，登入失败！",'login.php');
    }

}

