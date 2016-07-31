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

	<div class="main fl qiandao">
		<div class="box">
			<div class="head">
				<div class="vipname fl">
					尊敬的 <?php echo ($_user["username"]); ?> 会员
					<?php
 if( ! $hasSign ){ echo ", 您今日还没签到"; } ?>
				</div>
				<div class="button fl">
					<button id="daysButton">
						<?php
 if( $hasSign ){ echo "已签到"; } else { echo "签到"; } ?>
					</button>
				</div>
				<div class="guize fl">
					签到规则及奖励机智
				</div>
			</div>
			<div class="footer">
				<ul>
					<!-- <li>
						连续签到天数
						<p>
							<?php echo ($signNote); ?>
						</p>
					</li> -->
					<li>
						累计积分奖励
						<p>
							<?php
 $day_rank = O('day_rank'); echo $signNote * $day_rank; ?>
						</p>
					</li>
					<li>
						累计签到天数
						<p>
							<?php echo ($signNote); ?>
						</p>
					</li>
					<li>
						今日签到人数
						<p>
							<?php
 $jinrizuigao = count( $todays ); echo ceil( $jinrizuigao * 150 * 0.8 ); ?>
						</p>
					</li>
					<li>
						最高签到人数
						<p>
							<?php
 echo ceil( $zonggong * 150 * 0.8 ); ?>
						</p>
					</li>
				</ul>
				<div class="cl"></div>
				<div class="leftTop">
					<img src="/Public/Home/images//qiandaotop10.png">
					<table>
						<thead>
							<tr>
								<th>
									会员账号
								</th>
								<th>
									签到总天数
								</th>
								<th>
									累计积分
								</th>
							</tr>
						</thead>
						<tbody>
							<?php if(is_array($todays)): $i = 0; $__LIST__ = $todays;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$today): $mod = ($i % 2 );++$i;?><tr>
									<td> <?php echo (mb_substr(getUsername($today["uid"]),0,3,'utf-8')); ?>*** </td>
									<td> <?php
 $today_user_sign = signSumDay( $today['uid']); echo $today_user_sign; ?> 
									</td>
									<td>
										<?php
 echo $today_user_sign * $day_rank; ?>
									</td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
					</table>
				</div>
				<div class="rightTop">
					<img src="/Public/Home/images//zongqiandaotop10.png">
					<table>
						<thead>
							<tr>
								<th>
									会员账号
								</th>
								<th>
									签到总天数
								</th>
								<th>
									累计积分
								</th>
							</tr>
						</thead>
						<tbody>
							<?php if(is_array($sumNumbers)): $i = 0; $__LIST__ = $sumNumbers;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sumNumber): $mod = ($i % 2 );++$i;?><tr>
									<td>
										<?php echo (mb_substr(getUsername($sumNumber["uid"]),0,3,'utf-8')); ?>***
									</td>
									<td> <?php echo ($sumNumber["num"]); ?> </td>
									<td>
										<?php
 echo $sumNumber['num'] * $day_rank; ?>
									</td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
					</table>
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


	<script>
		// 签到按钮
		$("#daysButton").click( function()
		{
			var ii = layer.load();
			$.get("<?php echo U('sign');?>",{}, function( res ){
				if( res.status == 1 ){
					layer.msg( res.info , {icon: 6}, function(){
						window.location.reload();
					});
				} else {
					layer.msg( res.info , {icon: 5});
				}
		        layer.close(ii);					
			});
		});
	</script>

</body>
</html>