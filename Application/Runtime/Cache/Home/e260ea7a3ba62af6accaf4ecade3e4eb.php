<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
     <head>
     <title>地方菜系</title>
     <meta charset="utf-8">
     <link rel="icon" href="/carshop1/Public/home/other/images/favicon.ico">
     <link rel="shortcut icon" href="/carshop1/Public/home/other/images/favicon.ico" />
     <link rel="stylesheet" href="/carshop1/Public/home/other/css/style.css">
     <link rel="stylesheet" type="text/css" href="/carshop1/Public/home/other/css/style1.css">
  <link rel="stylesheet" type="text/css" href="/carshop1/Public/home/other/css/add.css">
  <link rel="stylesheet" type="text/css" href="/carshop1/Public/home/other/bootstrap/css/bootstrap.min.css">
     <script src="/carshop1/Public/home/other/js/jquery.js"></script>
     <script src="/carshop1/Public/home/other/js/jquery-migrate-1.1.1.js"></script>
     <script src="/carshop1/Public/home/other/js/superfish.js"></script>
     <script src="/carshop1/Public/home/other/js/jquery.easing.1.3.js"></script>
     <script src="/carshop1/Public/home/other/js/sForm.js"></script>
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
    <h1><a href="index.html"><img src="/carshop1/Public/home/other/images/SHAN1.png" alt="EXTERIOR"></a> </h1>
    
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
      <h2 class="head2"><?php echo ($cate["name"]); ?></h2>
      <div class="news">
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="extra_wrapper">
          <div class="col1"><?php echo ($vo["title"]); ?></div>
          <p><?php echo ($vo["des"]); ?></p>
          <a href="<?php echo U('index/detail',array('id'=>$vo["id"] ) );?>" class="btn">More</a>
        </div>
      </div><?php endforeach; endif; else: echo "" ;endif; ?>
      <div class="news mb0">
       
      
    </div>
  
    <div class="clear"></div>
  
  </div>
</div>
<!--==============================footer=================================-->

<footer>
    <div class="footer">
      <div class="footer-top ptb-30 grey-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="single-footer">
                <h3 class="single-footer-title">联系我们</h3>
                <div class="single-footer-details mt-30">
                  <p class="addresses">
                    <strong>地址：</strong>渭南师范学院
                  </p>
                  <p class="email">
                    <strong>邮箱：</strong>88888888@qq.com<br>88888888@163.com
                  </p>
                  <p class="phon">
                    <strong>电话:</strong>029 88888888<br>029 88888888
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="single-footer">
                <h3 class="single-footer-title">开放时间</h3>
                <div class="single-footer-details mt-30">
                  <div class="open-list">
                    <ul>
                      <li>陕西人们随时等候您的光临！</li>
                      <li>您的满意使我们最大的幸运！</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="single-footer instagram">
                <h3 class="single-footer-title">照片分享</h3>
                <div class="single-footer-details mt-30">
                  <ul>
                    <li><a href="#"><img src="/carshop1/Public/home/other/images/img/xiaotu/01.png" alt=""></a></li>
                    <li><a href="#"><img src="/carshop1/Public/home/other/images/img/xiaotu/7.png" alt=""></a>
                    </li>
                    <li><a href="#"><img src="/carshop1/Public/home/other/images/img/xiaotu/3.png" alt=""></a>
                    </li>
                    <li><a href="#"><img src="/carshop1/Public/home/other/images/img/xiaotu/4.png" alt=""></a>
                    </li>
                    <li><a href="#"><img src="/carshop1/Public/home/other/images/img/xiaotu/5.png" alt=""></a>
                    </li>
                    <li><a href="#"><img src="/carshop1/Public/home/other/images/img/xiaotu/6.png" alt=""></a>
                    </li>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="single-footer newsletter">
                <h3 class="single-footer-title">时事通讯</h3>
                <div class="single-footer-details mt-30">
                  <p>家乡如我们的母亲，是她用一草一木哺育了我们成长。</p>
                  <div class="newsletter-form">
                    <form action="#">
                      <input type="text" placeholder="输入您的邮箱">
                      <button type="submit">提交</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </footer> -->
</body>
</html>