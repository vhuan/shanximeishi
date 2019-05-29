<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
  <title>首页</title>
  <meta charset="utf-8">
  <link rel="icon" href="/Public/home/other/images/favicon.ico">
  <link rel="shortcut icon" href="/Public/home/other/images/favicon.ico" />
  <link rel="stylesheet" href="/Public/home/other/css/style.css">
  <link rel="stylesheet" href="/Public/home/other/css/slider.css">
  <link rel="stylesheet" type="text/css" href="/Public/home/other/css/style1.css">
  <link rel="stylesheet" type="text/css" href="/Public/home/other/css/add.css">
  <link rel="stylesheet" type="text/css" href="/Public/home/other/bootstrap/css/bootstrap.min.css">
  <script src="/Public/home/other/js/jquery.js"></script>
  <script src="/Public/home/other/js/jquery-migrate-1.1.1.js"></script>
  <script src="/Public/home/other/js/superfish.js"></script>
  <script src="/Public/home/other/js/jquery.easing.1.3.js"></script>
  <script src="/Public/home/other/js/sForm.js"></script>
  <script src="/Public/home/other/js/jquery.carouFredSel-6.1.0-packed.js"></script>
  <script src="/Public/home/other/js/tms-0.4.1.js"></script>
  <script src="/Public/home/other/js/main.js"></script>
  <script>
    $(window).load(function () {
      $('.slider')._TMS({
        show: 0,
        pauseOnHover: false,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 800,
        preset: 'fade',
        pagination: true, //'.pagination',true,'<ul></ul>'
        pagNums: false,
        slideshow: 8000,
        numStatus: false,
        banners: false,
        waitBannerAnimation: false,
        progressBar: false
      })
    });

    $(window).load(
      function () {
        $('.carousel1').carouFredSel({
          auto: false,
          prev: '.prev',
          next: '.next',
          width: 960,
          items: {
            visible: {
              min: 1,
              max: 4
            },
            height: 'auto',
            width: 240,

          },
          responsive: false,

          scroll: 1,

          mousewheel: false,

          swipe: {
            onMouse: false,
            onTouch: false
          }
        });


      });
  </script>
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
    <div class="content page1">
      <div class="lunbo clearfix">
        <div class="juzhong">
          <div class="trent-slider">
            <div class="t-slide current-t-slide">
              <img src="/Public/home/other/images/upload/xian1.jpg" alt="" />
            </div>
            <div class="t-slide">
              <img src="/Public/home/other/images/upload/xian6.jpg" alt="" />
            </div>
            <div class="t-slide">
              <img src="/Public/home/other/images/upload/xian4.jpg" alt="" />
            </div>
            <div class="t-slide">
              <img src="/Public/home/other/images/upload/xian2.jpg" alt="" />
            </div>
            <div class="t-slider-controls">
              <div class="arrow right-arrow">
                <div class="arrow-container">
                  <div class="arrow-icon"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                </div>
              </div>
              <div class="arrow left-arrow">
                <div class="arrow-container">
                  <div class="arrow-icon"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                </div>
                <div class="t-load-bar">
                  <div class="inner-load-bar"></div>
                </div>
                <div class="t-dots-container">
                  <div class="t-slide-dots-wrap">
                    <div class="t-slide-dots">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="hor_separator lineheart"></div>
      <div class="ic"> <a href=""></a></div>
      <div class="container_12">
        <div class="grid_7">
          <h2>关于我们</h2>
          <div class="page1_block col1">
            <img src="/Public/home/other/images/welcome_img.png" alt="">
            <div class="extra_wrapper">
              <p><span class="col2"></span>
              </p>
              陕西面食得简介，以及做法我们将为您提供详细得介绍，下面就有我带您领略陕西得美食文化<br>
              <a href="#" class="btn">more</a>
            </div>
            <div class="clear"></div>
          </div>
        </div>
        <div class="grid_5">
          <h2>今日推荐</h2>
          <ul class="list">
            <?php if(is_array($data2)): $i = 0; $__LIST__ = $data2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('index/detail',array('id'=>$vo[" id"] ) );?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
        </div>
        <div class="clear"></div>
        <div class="grid_12">
          <div class="hor_separator"></div>
        </div>
        <div class="grid_12">
          <div class="car_wrap">
            <h2>最新美食</h2>
            <a href="#" class="prev"></a><a href="#" class="next"></a>
            <ul class="carousel1">
              <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                  <div><img src="/<?php echo ($vo["pic"]); ?>" alt="">
                    <div class="col1 upp"> <a href="#"><?php echo ($vo["title"]); ?></a></div>
                    <span><?php echo ($vo["des"]); ?></span>

                </li><?php endforeach; endif; else: echo "" ;endif; ?>

            </ul>
          </div>
          <div class="hor_separator "></div>
          <section id="about-us">
            <div id="container">
              <div class="skill-wrap clearfix">

                <div class="center wow fadeInDown">
                  <h2>本周推荐</h2>
                  <p class="lead">
                    美味的牛羊肉泡馍、香辣的粉汤羊血、意犹未尽的荞面饸饹（凉拌）<br> 特色的肉夹馍、令人难忘的笼笼肉、还有满口香的酸汤水饺<br>
                    舌尖上的陕西，好吃嘴的天堂<br>相信你吃过就在也忘不了他们的味道
                  </p>
                </div>
              </div>
              <div id="gallery">
                <ul>
                  <li>
                    <div style="display: inline-block;">
                      <a href="/Public/home/other/images/upload/today/1.JPEG">
                        <img src="/Public/home/other/images/upload/today/1.JPEG" alt="图片"
                          class="animated bounceInLeft" />
                      </a>
                      <a href="/Public/home/other/images/upload/today/1.JPEG">
                        <p class="animated bounceInLeft">牛羊肉泡馍 </p>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div style="display: inline-block;">
                      <a href="/Public/home/other/images/upload/today/2.JPEG">
                        <img src="/Public/home/other/images/upload/today/2.JPEG" alt="图片"
                          class="animated bounceInDown" />
                      </a>
                      <a href="/Public/home/other/images/upload/today/2.JPEG">
                        <p class="animated bounceInDown">粉汤羊血</p>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div style="display: inline-block;">
                      <a href="/Public/home/other/images/upload/today/3.JPEG">
                        <img src="/Public/home/other/images/upload/today/3.JPEG" alt="图片"
                          class="animated bounceInRight" />
                      </a>
                      <a href="/Public/home/other/images/upload/today/3.JPEG">
                        <p class="animated bounceInRight">肉夹馍 </p>
                      </a>
                    </div>
                  </li>
                </ul>

                <ul>
                  <li>
                    <div style="display: inline-block;">
                      <a href="/Public/home/other/images/upload/today/4.JPEG">
                        <img src="/Public/home/other/images/upload/today/4.JPEG" alt="图片" class="animated swing" />
                      </a>
                      <a href="/Public/home/other/images/upload/today/4.JPEG">
                        <p class="animated swing">笼笼肉</p>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div style="display: inline-block;">
                      <a href="/Public/home/other/images/upload/today/5.JPEG">
                        <img src="/Public/home/other/images/upload/today/5.JPEG" alt="图片" class="animated swing" />
                      </a>
                      <a href="/Public/home/other/images/upload/today/5.JPEG">
                        <p class="animated swing">荞面饸饹（凉拌）</p>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div style="display: inline-block;">
                      <a href="/Public/home/other/images/upload/today/6.JPEG">
                        <img src="/Public/home/other/images/upload/today/6.JPEG" alt="图片" class="animated swing" />
                      </a>
                      <a href="/Public/home/other/images/upload/today/6.JPEG">
                        <p class="animated swing">酸汤水饺</p>
                      </a>
                    </div>
                  </li>
                </ul>
              </div>

            </div>
          </section>
        </div>
        <div class="clear"></div>
        <div class="bottom_block">


          <div class="clear"></div>
        </div>
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
                      <li><a href="#"><img src="/Public/home/other/images/img/xiaotu/01.png" alt=""></a></li>
                      <li><a href="#"><img src="/Public/home/other/images/img/xiaotu/7.png" alt=""></a>
                      </li>
                      <li><a href="#"><img src="/Public/home/other/images/img/xiaotu/3.png" alt=""></a>
                      </li>
                      <li><a href="#"><img src="/Public/home/other/images/img/xiaotu/4.png" alt=""></a>
                      </li>
                      <li><a href="#"><img src="/Public/home/other/images/img/xiaotu/5.png" alt=""></a>
                      </li>
                      <li><a href="#"><img src="/Public/home/other/images/img/xiaotu/6.png" alt=""></a>
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
    </footer>
</body>

</html>