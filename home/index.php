<?php
include '../config/inc.php';
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>博客首页</title>
<meta name="keywords" content="个人博客" >
<meta name="description" content="个人博客" >
<link href="../public/hom/css/base.css" rel="stylesheet">
<link href="../public/hom/css/index.css" rel="stylesheet">
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
      <div class="logo f_l">个人博客</div>
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
  <div class="jztop"></div>
  <div class="container">
    <div class="bloglist f_l">

      <?php
      $rows =get('article','aid desc');
      if(is_array($rows)):
      foreach($rows as $v):
      ?>
      <h3><a><?php echo $v['title']?></a></h3>
      <figure><img src="../public/hom/images/img_1.jpg" alt="【心路历程】请不要在设计这条路上徘徊啦"></figure>
      <ul>
        <p> 如果你还在踌躇不前，坚持下去！</p>
        <a  href="article_show.php?aid=<?php echo $v['aid']?>" target="_blank" class="readmore">阅读全文&gt;&gt;</a>
        <span><?php echo date('Y-m-d H:i:s',$v['now']);?></span>
      </ul>
      <p class="dateview"><span>2017-07-13</span><span>作者：</span><span>个人博客：[<a href="/jstt/bj/">心得笔记</a>]</span></p>
        <?php
      endforeach;
      endif;
      ?>

    </div>
    <div class="r_box f_r">
      <div class="tit01">
        <h3 class="tit">关注我</h3>
        <div class="gzwm">
          <ul>
            <li><a class="email" href="#" target="_blank">我的电话</a></li>
            <li><a class="qq" href="#mailto:admin@admin.com" target="_blank">我的邮箱</a></li>
            <li><a class="tel" href="#" target="_blank">我的QQ</a></li>
            <li><a class="prize" href="#">个人奖项</a></li>
          </ul>
        </div>
      </div>
      <!--tit01 end-->

      <div class="tuwen">
        <h3 class="tit">图文推荐</h3>
        <ul>
          <li><a href="/"><img src="../public/hom/images/01.jpg"><b>住在手机里的朋友</b></a>
            <p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>
          </li>
          <li><a href="/"><img src="../public/hom/images/02.jpg"><b>教你怎样用欠费手机拨打电话</b></a>
            <p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>
          </li>
          <li><a href="/" title="手机的16个惊人小秘密，据说99.999%的人都不知"><img src="../public/hom/images/03.jpg"><b>手机的16个惊人小秘密，据说...</b></a>
            <p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>
          </li>
          <li><a href="/"><img src="../public/hom/images/06.jpg"><b>住在手机里的朋友</b></a>
            <p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>
          </li>
          <li><a href="/"><img src="../public/hom/images/04.jpg"><b>教你怎样用欠费手机拨打电话</b></a>
            <p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>
          </li>
          <li><a href="/"><img src="../public/hom/images/02.jpg"><b>教你怎样用欠费手机拨打电话</b></a>
            <p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>
          </li>
          <li><a href="/" title="手机的16个惊人小秘密，据说99.999%的人都不知"><img src="../public/hom/images/03.jpg"><b>手机的16个惊人小秘密，据说...</b></a>
            <p><span class="tulanmu"><a href="/">手机配件</a></span><span class="tutime">2015-02-15</span></p>
          </li>
        </ul>
      </div>
      <div class="ph">
        <h3 class="tit">点击排行</h3>
        <ul class="rank">
          <li><a href="/jstt/bj/2017-07-13/784.html" title="【心路历程】请不要在设计这条路上徘徊啦" target="_blank">【心路历程】请不要在设计这条路上徘徊啦</a></li>
          <li><a href="/news/s/2016-05-20/751.html" title="IP要突破2000+了" target="_blank">IP要突破2000+了</a></li>
          <li><a href="/jstt/web/2015-07-03/749.html" title="帝国cms首页、自定义页面如何实现分页" target="_blank">帝国cms首页、自定义页面如何实现分页</a></li>
          <li><a href="/jstt/web/2015-02-25/745.html" title="【已评选】给我模板PSD源文件，我给你设计HTML！" target="_blank">【已评选】给我模板PSD源文件，我给你设计HTML！</a></li>
          <li><a href="/jstt/bj/2015-02-14/744.html" title="【郑重申明】本站只提供静态模板下载！" target="_blank">【郑重申明】本站只提供静态模板下载！</a></li>
          <li><a href="/news/s/2015-01-23/741.html" title="【孕期日记】生活本该如此" target="_blank">【孕期日记】生活本该如此</a></li>
          <li><a href="/jstt/bj/2015-01-09/740.html" title="【匆匆那些年】总结个人博客经历的这四年…" target="_blank">【匆匆那些年】总结个人博客经历的这四年…</a></li>
          <li><a href="/jstt/web/2015-01-01/739.html" title=" 2014年度优秀个人博客排名公布" target="_blank"> 2014年度优秀个人博客排名公布</a></li>
          <li><a href="/jstt/web/2014-12-18/736.html" title="2014年度优秀个人博客评选活动" target="_blank">2014年度优秀个人博客评选活动</a></li>
          <li><a href="/jstt/css3/2014-12-09/734.html" title="使用CSS3制作文字、图片倒影" target="_blank">使用CSS3制作文字、图片倒影</a></li>
          <li><a href="/jstt/css3/2014-11-18/733.html" title="【分享】css3侧边栏导航不同方向划出效果" target="_blank">【分享】css3侧边栏导航不同方向划出效果</a></li>
          <li><a href="/jstt/bj/2014-11-06/732.html" title="分享我的个人博客访问量如何做到IP从10到600的(图文)" target="_blank">分享我的个人博客访问量如何做到IP从10到600的(图文)</a></li>
        </ul>
      </div>
      <div class="ad"> <img src="../public/hom/images/03.jpg"> </div>
    </div>
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
