<?php
/**
 * Created by PhpStorm.
 * User: LXW
 * Date: 2017/7/30
 * Time: 17:32
 */
include'../config/inc.php';
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>个人博客</title>
<meta name="keywords" content="个人博客" >
<meta name="description" content="个人博客" >
<link href="../public/hom/css/base.css" rel="stylesheet">
<link href="../public/hom/css/main.css" rel="stylesheet">
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
    <div class="logo f_l">推荐文章</div>
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
        <h2 class="nh1"><span>您现在的位置是：<a href="/" target="_blank">网站首页</a>>><a href="#" target="_blank">个人日记</a></span><b>个人日记</b></h2>
        <div class="dtxw box">
            <?php
            $rows =get('article','aid desc');
            if(is_array($rows)):
            foreach($rows as $v):
            ?>
          <li>
            <div class="dttext f_l">
              <ul>
                  <h2><a><?php echo $v['title']?></a></h2>
                  <p>个人博客模板古典系列之――江南墨卷个人博客模板古典系列之――江南墨卷个人博客模板古典系列之――江南墨卷原汁原味重现经典....</p>
                  <a  href="article_show.php?aid=<?php echo $v['aid']?>" target="_blank" class="readmore">阅读全文&gt;&gt;</a>
                  <span><?php echo date('Y-m-d H:i:s',$v['now']);?></span>
              </ul>

            </div>
            <div class="xwpic f_r"><a href="/"><img src="../public/hom/images/02.jpg"></a></div>
          </li>
                <?php
            endforeach;
            endif;
            ?>

        </div>
        <div class="pagelist">页次：1/1 <a href="/">首页</a><a href="/">上一页</a><a href="/">下一页</a><a href="/">尾页</a></div>
      </div>
    </div>
    <div class="blank"></div>
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
</div>
</body>
</html>