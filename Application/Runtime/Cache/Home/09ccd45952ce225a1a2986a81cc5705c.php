<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
     <head>
     <title>关于我们</title>
     <meta charset="utf-8">
     <link rel="icon" href="/carshop1/Public/home/other/images/favicon.ico">
     <link rel="shortcut icon" href="/carshop1/Public/home/other/images/favicon.ico" />
     <link rel="stylesheet" href="/carshop1/Public/home/other/css/style.css">
     <link rel="stylesheet" href="/carshop1/Public/home/other/css/slider.css">
     <link rel="stylesheet" type="text/css" href="/carshop1/Public/home/other/css/style1.css">
  <link rel="stylesheet" type="text/css" href="/carshop1/Public/home/other/css/add.css">
  <link rel="stylesheet" type="text/css" href="/carshop1/Public/home/other/bootstrap/css/bootstrap.min.css">
     <script src="/carshop1/Public/home/other/js/jquery.js"></script>
     <script src="/carshop1/Public/home/other/js/jquery-migrate-1.1.1.js"></script>
     <script src="/carshop1/Public/home/other/js/superfish.js"></script>
     <script src="/carshop1/Public/home/other/js/jquery.easing.1.3.js"></script>
     <script src="/carshop1/Public/home/other/js/sForm.js"></script>
     <script src="/carshop1/Public/home/other/js/jquery.carouFredSel-6.1.0-packed.js"></script>
     <script src="/carshop1/Public/home/other/js/tms-0.4.1.js"></script>
     <script>
      $(window).load(function(){
      $('.slider')._TMS({
              show:0,
              pauseOnHover:false,
              prevBu:'.prev',
              nextBu:'.next',
              playBu:false,
              duration:800,
              preset:'fade', 
              pagination:true,//'.pagination',true,'<ul></ul>'
              pagNums:false,
              slideshow:8000,
              numStatus:false,
              banners:false,
          waitBannerAnimation:false,
        progressBar:false
      })  
      });
      
     $(window).load (
    function(){$('.carousel1').carouFredSel({auto: false,prev: '.prev',next: '.next', width: 960, items: {
      visible : {min: 1,
       max: 4
},
height: 'auto',
 width: 240,

    }, responsive: false, 
    
    scroll: 1, 
    
    mousewheel: false,
    
    swipe: {onMouse: false, onTouch: false}});
    
    
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

<div class="content page1">
 
  <div class="container_12">
      <div class="grid_7">
        <h2>陕西</h2>
        <div class="page1_block col1">
          <div class="extra_wrapper">
            陕西（shaanxi），简称“ 陕”或“ 秦”， 省会古都 西安。全省总面积20.58万平方公里，截止2016年底，全省常住人口3812.62万，下辖1个副省级城市——西安，和9个地级市——宝鸡、 咸阳、渭南、 铜川、汉中、 安康、 商洛、榆林、 延安，以及杨凌农业高新技术产业示范区，其中西安、宝鸡两市城市人口过百万。<br>
            <a href="#" class="btn">更 多</a>
          </div>
          <div class="clear"></div>
        </div>
      </div>
      <div class="grid_5">
        <h2>学校</h2>
        <ul class="list">
          <li><a href="#">渭南师范学院是中国共产党创建的第一所高校，肇始于1923年，经历了赤水职业学校和“抗大式”的赤水农业职业学校、20世纪50年代末到60年代初的渭南师范学院、改革开放以来的渭南师范专科学校与渭南教育学院、新渭南师范学院，沧桑九十四载。学校建校初期的23年，开办初等师范、中等师范、高等师范等三个层次教师教育，开设师范类、科学技术类等学科专业，兴办校办工厂勤工俭学，现今，已成为一所以教师教育为主要特色的综合性地方高校，正朝着建设特色鲜明的高水平地方师范大学的目标迈进!　　学校地处渭水华岳之间的渭南市临渭区、富平县。这里历史悠久、文化底蕴深厚，从仓颉造字、杜康酿酒到渭华起义，千百年来书写着秦东大地的神奇;这里钟灵毓秀、物宝天华，药王孙思邈、史圣司马迁、大诗人白居易、爱国将领杨虎城和革命先辈刘志丹、谢子长、高岗、习仲勋等铸造了彪炳千秋的伟绩;这里“红色精神”闪耀、革命圣火不息，传承着“坚定创业创新”为核心的渭华照金精神。</a></li>
         <!--  <li><a href="#">Expert advice on traditions, customs, aetiquette</a></li>
          <li><a href="#">Determine and stay within budget</a></li>
          <li><a href="#">Choosing the right Wedding Venue</a></li>
          <li><a href="#">Provide preferred vendor's list</a></li>
          <li><a href="#">Assist with wedding scheme and design</a></li> -->
        </ul>
      </div>
      <div class="clear"></div>
      <div class="grid_12">
        <div class="hor_separator"></div>
      </div>
       <div class="grid_6">
      <h2>Find Us</h2>
            <div class="map">
            <figure class="img_inner">
                          <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
               </figure>
          </div>
    </div>
      <div class="grid_5 prefix_1">
        <h2>联系我们</h2>
        <form id="form">
          <div class="success_wrapper">
            <div class="success">通过邮件联系我们！<br>
              <strong>我们将很快联系您</strong> </div>
          </div>
          <fieldset>
            <label class="name">
              <input type="text" value="Name:">
              <br class="clear">
              <span class="error error-empty">*这不是正确用户名</span><span class="empty error-empty">*请填写正确</span> </label>
            <label class="email">
              <input type="text" value="E-mail:">
              <br class="clear">
              <span class="error error-empty">*这不是合法邮件地址.</span><span class="empty error-empty">*请填写正确.</span> </label>
            <label class="phone">
              <input type="tel" value="Phone:">
              <br class="clear">
              <span class="error error-empty">*手机号错误.</span><span class="empty error-empty">*请填写正确.</span> </label>
            <label class="message">
              <textarea>Message:</textarea>
              <br class="clear">
              <span class="error">*内容不完整</span> <span class="empty">*请填写完整.</span> </label>
            <div class="clear"></div>
            <div class="btns"><a data-type="reset" class="btn">清除</a><a data-type="submit" class="btn">发送</a>
              <div class="clear"></div>
            </div>
          </fieldset>
        </form>
      </div>
      <!--Contact bottom section-->
      
      <!--Contact bottom section end-->
    </div>
      
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
  </footer>
</body>
</html>