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

<?php
 $before_user = session('before_user'); ?>
	<div class="main fl yxwz index login">
		<div class="box">
			<h2>
				欢迎登陆
				<p>
					Welcome
				</p>
			</h2>
			<form action="" class="form ajax_form" method="post">
				<fieldset>
	                <div class="formRow">
	                    <label for="username">我的帐号:</label>
	                    <div class="huangse"><?php echo (mb_substr($_user["username"],0,4,'utf-8')); ?>***</div>
	                    <div class="clear"></div>
	                </div>
	                
	                <div class="formRow">
	                    <label for="password">我的等级:</label>
	                    <div class="huangse"><?php echo ($_userGroup["title"]); ?></div>
	                    <div class="clear"></div>
	                </div>

	                <div class="formRow">
	                    <label for="password">我的积分:</label>
	                    <div class="huangse"><?php echo ($_user["rank"]); ?></div>
	                    <div class="clear"></div>
	                </div>


	                <div class="formRow">
	                    <label for="password">上次登录:</label>
	                    <div class="huangse"><?php echo (date('Y-m-d H:i',$before_user["lastlogin"])); ?></div>
	                    <div class="clear"></div>
	                </div>

	            </fieldset>
			</form>
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