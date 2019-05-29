<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="keywords" content="百度地图,百度地图API，百度地图自定义工具，百度地图所见即所得工具" />
<meta name="description" content="百度地图API自定义地图，帮助用户在可视化操作下生成百度地图" />
 <link rel="icon" href="/carshop1/Public/home/other/images/favicon.ico">
     <link rel="shortcut icon" href="/carshop1/Public/home/other/images/favicon.ico" />
     <link rel="stylesheet" href="/carshop1/Public/home/other/css/style1.css">
     <!-- <link rel="stylesheet" href="/carshop1/Public/home/other/css/slider.css"> -->
     <link rel="stylesheet" type="text/css" href="/carshop1/Public/home/other/css/style1.css">
  <link rel="stylesheet" type="text/css" href="/carshop1/Public/home/other/css/add.css">
  <link rel="stylesheet" type="text/css" href="/carshop1/Public/home/other/bootstrap/css/bootstrap.min.css">
<title>家乡地图</title>
<!--引用百度地图API-->
<style type="text/css">
    html,body{margin:0;padding:0;}
    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
</style>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
</head>

<body>
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
  <!--百度地图容器-->
  <center>
  <div style="width:697px;height:550px;border:#ccc solid 1px;margin-top: 20px;" id="dituContent"></div>
</center>
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
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
    }
    
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(108.946465,34.347269);//定义一个中心点坐标
        map.centerAndZoom(point,12);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }
    
    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }
    
    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
  var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
  map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
  var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
  map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
  var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
  map.addControl(ctrl_sca);
    }
    
    
    initMap();//创建和初始化地图
</script>
</html>