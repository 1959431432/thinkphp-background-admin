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


<div class="main fl yxwz">
	<img src="/Public/Home/images//yxwzhead.png">
	<div class="yxwzfoot">
		<div class="lists">
			<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="one">
					<div class="box ms">
					<?php
 $rand = mt_rand(1,30); if( $rand <= 10 ){ echo "<span style='color:green;'>流畅</span>"; } else if( $rand > 10 && $rand <= 20 ){ echo '<span style="color:#CCBB2B;">拥挤</span>'; } else { echo '爆满'; } ?>
					</div>
					<div class="box url"> <?php echo ($vo["url"]); ?> </div>
					<div class="box button">
						<a href="//<?php echo ($vo["url"]); ?>"> 打开链接 </a>
						<a class='layer_iframe' href="<?php echo U('Message/send',array('title'=>$vo['url'].'该链接错误'));?>" title="问题反馈" > 报错 </a>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
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