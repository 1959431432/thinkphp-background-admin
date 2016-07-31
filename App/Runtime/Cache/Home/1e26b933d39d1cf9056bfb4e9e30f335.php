<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/Public/Home/css//main.css">
</head>
<body>
<div class="left bg_color fl">
	<a class="bbin"></a>
	<ul>
		<li>
			<a href="<?php echo U('Index/index');?>">
				<img src="/Public/Home/images//shouye.png" class='menu'>
			</a>
		</li>
		<li>
			<a href="<?php echo U('Link/index');?>">
				<img src="/Public/Home/images//youxiwangzhi.png" class='menu'>
			</a>
		</li>
		<li>
			<a href="<?php echo U('Activity/index');?>">
				<img src="/Public/Home/images//huodongzhuanqu.png" class='menu'>
			</a>
		</li>
		<!-- <li>
			<a href="">
				<img src="/Public/Home/images//xingyunzhuanpan.png" class='menu'>
			</a>
		</li> -->
		<li>
			<a href="<?php echo U('Days/index');?>">
				<img src="/Public/Home/images//meiriqiandao.png" class='menu'>
			</a>
		</li>
		<!-- <li>
			<a href="">
				<img src="/Public/Home/images//duihuanchouma.png" class='menu'>
			</a>
		</li> -->
		<!-- <li>
			<a href="">
				<img src="/Public/Home/images//wanjiatuiguang.png" class='menu'>
			</a>
		</li> -->
		<li>
			<a href="<?php echo U('Shop/index');?>">
				<img src="/Public/Home/images//jifenshangcheng.png">
			</a>
		</li>
	</ul>
	<div class='beian'>
		Copyright © 2016
		<p>
			金沙娱乐城
		</p> 
	</div>
</div>



<div class="main fl huodong">
	<div class="head">
		<div id="banner">  
		    <div id="banner_bg">       
		    </div>
			<!--标题背景-->
		    <div id="banner_info"> 
		    </div>
			<!--标题-->
		    <ul>   
		        <li class="on">
		            1
		        </li>
		        <li>
		            2
		        </li>
		    </ul>
		    <div id="banner_list">
		        <a href="#" target="_blank">
		        	<img src="/Public/Home/images//hd1.png" title="活动图片1" alt="活动图片1">
		        </a>
		        <a href="#" target="_blank">
		        	<img src="/Public/Home/images//hd2.png" title="活动图片2" alt="活动图片2">
		        </a>
		    </div>
		</div>
	</div>
	<div class="foot">
		<div class="foot_box">
			<div class="slick">
				<?php if(is_array($activitys)): $i = 0; $__LIST__ = $activitys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$activity): $mod = ($i % 2 );++$i;?><div>
			    		<a class='layer_iframe' href="<?php echo U('detail',array('id'=>$activity['id']));?>" title="<?php echo ($activity["title"]); ?>">		
			    			<img src="<?php echo (getImg($activity["img"])); ?>" alt="<?php echo ($activity["title"]); ?>">
			    		</a>
			    	</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
	</div>
</div>


<div class="right bg_color fl">
	<a class='color' id="close" href="">
		
	</a>
	<a id="small" href="">

	</a>

	<div class="right_nav">
		<div class="right_box">
			<a href="">
				<img src="/Public/Home/images//right_1.png" alt="">
				<div class="pleaceholder">
					个人中心
				</div>
			</a>
		</div>
		<div class="right_box">
			<a href="">
				<img src="/Public/Home/images//right_2.png" alt="">
				<div class="pleaceholder">
					联系我们
				</div>
			</a>
		</div>
		<div class="right_box">
			<a href="">
				<img src="/Public/Home/images//right_3.png" alt="">
				<div class="pleaceholder">
					消息中心
				</div>
			</a>
		</div>
		<div class="right_box">
			<a href="">
				<img src="/Public/Home/images//right_4.png" alt="">
				<div class="pleaceholder">
					订单记录
				</div>
			</a>
		</div>
		<div class="right_box">
			<a href="">
				<img src="/Public/Home/images//right_5.png" alt="">
				<div class="pleaceholder">
					投诉建议
				</div>
			</a>
		</div>
		<div class="right_box weixin">
			<a href="">
				<img src="/Public/Home/images//right_6.png" alt="">
				<div class="pleaceholder">
					微信扫一扫
				</div>
			</a>
		</div>
	</div>
</div>
<!-- <img src="/Public/Home/images//index.png"> -->
<script type="text/javascript" src="/Public/Home/js//jquery.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/forms/jquery.validationEngine-zh-CN.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/forms/jquery.validationEngine.js"></script>
<script type="text/javascript" src="/Public/Admin/js//plugins/layer/layer.js"></script>
<script type="text/javascript" src="/Public/Home/js//slick.js"></script>

<script type="text/javascript" src="/Public/Home/js//main.js"></script>




</body>
</html>