<?php
// 连接数据库
$conn=@mysql_connect("localhost","root","")  or die(mysql_error());
@mysql_select_db('blog',$conn) or die(mysql_error());

// 判断action
$action = isset($_REQUEST['action'])? $_REQUEST['action'] : '';

// 上传图片
if($action=='add'){
    $image = mysql_escape_string(file_get_contents($_FILES['photo']['tmp_name']));
    $type = $_FILES['photo']['type'];
    $sqlstr = "insert into photo(type,data) values('".$type."','".$image."')";
    @mysql_query($sqlstr) or die(mysql_error());
    header('location:upload_image_todb.php');
    exit();
// 显示图片
}elseif($action=='show'){
    $id = isset($_GET['id'])? intval($_GET['id']) : 0;
    $sqlstr = "select * from photo where id=$id";
    $query = mysql_query($sqlstr) or die(mysql_error());
    $thread = mysql_fetch_assoc($query);
    if($thread){
        header('content-type:'.$thread['type']);
        echo $thread['data'];
        exit();
    }
}
?>