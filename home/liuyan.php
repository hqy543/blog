<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>给我留言</title>
<meta name="keywords" content="个人博客" >
<meta name="description" content="个人博客" >
<link href="../public/hom/css/base.css" rel="stylesheet">
<link href="../public/hom/css/main.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../public/back/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../public/back/css/style.css">
<!--[if lt IE 9]>
  <script src="../public/hom/js/modernizr.js"></script>
  <![endif]-->
<script type="text/javascript" src="../public/hom/js/jquery.js"></script>
</head>
<body>
<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://itbyc.com/templets/yang/js/snow.js"></script>
<style type="text/css">.snow-container{position:fixed;top:0;left:0;width:100%;height:100%;pointer-events:none;z-index:100001;}</style>
<div class="snow-container"></div>
<div id="wrapper">
  <header>
    <div class="headtop"></div>
    <div class="contenttop">
      <div>
        <form action="../backend/login.php" method="post" name="searchform" id="searchform">
          <input name="Submit" class="login_submit" value="登陆" type="submit">
        </form>
      </div>
      <div class="logo f_l">给我留言</div>
      <div class="search f_r">
        <form action="/e/search/index.php" method="post" name="searchform" id="searchform">
          <input name="keyboard" id="keyboard" class="input_text" value="请输入关键字" style="color: rgb(153, 153, 153);" onfocus="if(value=='请输入关键字'){this.style.color='#000';value=''}" onblur="if(value==''){this.style.color='#999';value='请输入关键字'}" type="text">
          <input name="show" value="title" type="hidden">
          <input name="tempid" value="1" type="hidden">
          <input name="tbname" value="news" type="hidden">
          <input name="Submit" class="input_submit" value="搜索" type="submit">
        </form>
      </div>
      <div class="blank"></div>
      <nav>
        <div  class="navigation">
          <ul class="menu">
            <li><a href="index.php">网站首页</a></li>
            <li><a href="newslistpic.php">推荐文章</a></li>
            <li><a href="about.php">个人简介</a></li>
            <li><a href="listpic.php">图片世界</a></li>
            <li><a href="liuyan.php">给我留言</a></li>
          </ul>
        </div>
      </nav>
      <SCRIPT type=text/javascript>
	// Navigation Menu
    $(function() {
      $(".menu ul").css({display: "none"}); // Opera Fix
      $(".menu li").hover(function(){
        $(this).find('ul:first').css({visibility: "visible",display: "none"}).slideDown("normal");
      },function(){
        $(this).find('ul:first').css({visibility: "hidden"});
      });
    });
      </SCRIPT>
    </div>
  </header>
  <div class="container">
    <div class="con_content">
      <div class="about_box">
        <h2 class="nh1"><span>您现在的位置是：<a href="/" target="_blank">网站首页</a>>><a href="#" target="_blank">信息浏览</a></span><b>留言板</b></h2>
        <div class="f_box">
          <p class="a_title">留言板</p>
          <p class="p_title"></p>
            <div class="table-responsive">
              <table class="table table-bordered">
                <tbody>
                <?php
                include '../config/inc.php';
                $i=1;
                $rows = get('liuyan','lid desc');
                if(is_array($rows)):
                  foreach($rows as $v):
                    ?>
                    <div class="panel">
                      <span class="nickname">留言者:<?php echo $v['nickname'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                      <span class="email">邮箱:<?php echo $v['email'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                      <span class="time">时间:<?php echo date('Y-m-d H-i-s',$v['replytime']);?></span>
                    </div>
                    <div class="panel-body">
                      <span class="content">内容: <?php echo $v['content'];?></span>
                      <span class="time" style="float: right"><?php echo $i++;?>楼</span>
                    </div>
                    <?php
                  endforeach;
                endif;
                ?>
                </tbody>
              </table>
        </div>
          <h1 class="page-header">发表留言</h1>
          <form action="../backend/liuyan_add_post.php" method="post" >
            <div class="form-group">
              <label class="control-label"></label>
              <input type="text" name="nickname" id="nickname" class="form-control" placeholder="游客姓名">
            </div>
            <div class="form-group">
              <div class="control-label"></div>
              <textarea name="content" id="content" rows="4" class="form-control" placeholder="留言内容"></textarea>
            </div>
            <div class="form-group">
              <label class="control-label"></label>
              <input type="text" name="email" id="email" class="form-control" placeholder="邮箱">
            </div>
            <div class="form-group">
              <input type="submit" name="submit" value="添加数据" class="btn btn-info btn-sm form-control">
            </div>
          </form>
      </div>
    </div>
    <div class="blank"></div>
  </div>
  <!-- container代码 结束 -->

  <footer>
    <div class="footer">
      <div class="f_l">
        <p>All Rights Reserved 版权所有：<a href="http://www.yangqq.com">杨青个人博客</a> 备案号：蜀ICP备00000000号</p>
      </div>
      <div class="f_r textr">
        <p>Design by DanceSmile</p>
      </div>
    </div>
  </footer>
</div>
</body>
</html>