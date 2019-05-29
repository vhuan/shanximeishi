<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
     <head>
     <title>美食详情</title>
     <meta charset="utf-8">
     <link rel="icon" href="/Public/home/other/images/favicon.ico">
     <link rel="shortcut icon" href="/Public/home/other/images/favicon.ico" />
     <link rel="stylesheet" href="/Public/home/other/css/style.css">
     <link rel="stylesheet" type="text/css" href="/Public/home/other/css/style1.css">
  <link rel="stylesheet" type="text/css" href="/Public/home/other/css/add.css">
  <link rel="stylesheet" type="text/css" href="/Public/home/other/bootstrap/css/bootstrap.min.css">
     <script src="/Public/home/other/js/jquery.js"></script>
     <script src="/Public/home/other/js/jquery-migrate-1.1.1.js"></script>
     <script src="/Public/home/other/js/superfish.js"></script>
     <script src="/Public/home/other/js/jquery.easing.1.3.js"></script>
     <script src="/Public/home/other/js/sForm.js"></script>
     <link rel="stylesheet" type="text/css" href="/Public/home/other/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="/Public/home/other/css/index.css">
     <script type="text/javascript" src="/Public/home/other/js/jquery-min.js"></script>
     <script type="text/javascript" src="/Public/home/other/js/index.js"></script>
     <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">
    <![endif]-->
     </head>
     <body>
       <div class="main">
<!--==============================header=================================-->
 <header> 
  <div class="container_12">
    <div class="grid_12">
    <h1><a href="index.html"><img src="/Public/home/other/images/SHAN1.png" alt="EXTERIOR"></a> </h1>
    
         <div class="menu_block">
           <nav  class="" >
            <ul class="sf-menu">
                   <li class="current"><a href="<?php echo U('index/index_one');?>">首页</a></li>
                   <li class=""><a href="<?php echo U('index/index4');?>">美食故事</a></li>
                   <li class="with_ul"><a href="javascript:;">地方系列</a><ul>
                            <li><a href="<?php echo U('index/index5?cateid=99');?>">陕菜系列</a></li>
                            <li><a href="<?php echo U('index/index5?cateid=112');?>">面食系列</a></li>
                            <li><a href="<?php echo U('index/index5?cateid=113');?>">特产系列</a></li>
                            <li><a href="<?php echo U('index/index5?cateid=111');?>">小吃系列</a></li>
                     </ul></li>
                   <li><a href="<?php echo U('index/index_lst');?>">家乡地图</a></li>
                   <li><a href="<?php echo U('index/about');?>">关于我们</a></li>
                   <li> 
                      <form  method="get" action="<?php echo U('index/index5');?>" id="searchform" class="searchform">
                        <div class="search-box">
                            <input class="search_input" id="search_input" type="text" name="keywords" placeholder="请输入搜索内容菜名">
                            <input type="submit" value="搜索" id="search_button" class="search_button">
                        </div>
                     </form>
                </li>
                 </ul>
              </nav>
           <div class="clear"></div>
           </div>
           <div class="clear"></div>
      </div>
    </div>
</header>
<!--=======content================================-->

<div class="content">
  <div class="container_12">
    <div class="grid_7">
      <h2 class="head2"><?php echo ($data["name"]); ?></h2>
      <div class="news">
        <h4><?php echo ($data["title"]); ?></h4>
      <div class="news mb0">
         <?php echo htmlspecialchars_decode($data['content']);?>
         
    </div>
  
    <div class="clear"></div>
    <iframe   src="http://localhost/carshop1/index.php/Home/index/pinglun" width="1000" height="500"   frameborder="1/0"></iframe>
  </div>

</div>
<!--==============================footer=================================-->
<div class="clear"></div>

</body>
</html>