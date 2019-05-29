<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>陕味</title>
	<link rel="stylesheet" href="/carshop1/Public/home/index/sp/css/normalize.css">
	<link rel="stylesheet" href="/carshop1/Public/home/index/sp/css/demo.css">
	<link rel="stylesheet" href="/carshop1/Public/home/index/sp/css/style1.css">
	<link rel="stylesheet" href="/carshop1/Public/home/index/sp/dist/jquery.vidbacking.min.css">
</head>

<body>

	<div class="video-back">
		<video autoplay muted loop class="vidbacking">
			<source src="/carshop1/Public/home/index/sp/asset/int.mp4" type="video/mp4">
		</video>
		<h1>陕味</h1>
		<p>一切就绪，来一场味觉与视觉的惊艳奇舞</p>
		<div class="htmleaf-demo center">
			<a href="<?php echo U('index/index_one');?>" class="current">进入首页</a>
		</div>
		<div class="clearfix"></div>
	</div>
	<script src="/carshop1/Public/home/index/sp/dist/jquery-1.11.0.min.js"></script>
	<script src="/carshop1/Public/home/index/sp/dist/jquery.vidbacking.js"></script>
	<script type="text/javascript">
		$(function () {
			$('.video-back').vidbacking();
		});
	</script>
</body>

</html>