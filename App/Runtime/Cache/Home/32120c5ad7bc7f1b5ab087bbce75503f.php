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
$rank = session('user.rank'); ?>
	<div class="main fl shop yxwz">
	<div class="head">
		<h2 class="fl">
			积分商城 精挑细选
			<p>
				积分可自由兑换商品啦！！
			</p>
		</h2>
		<img src="/Public/Home/images//shop_empty.png" class='fl'>
		<h2 class='fl jifen'>
			可用积分
			<p>
				<span>
					<?php echo ($rank); ?>
				</span>
				分
			</p>
		</h2>
		<div class="cl"></div>
		<div class="note">
			注：积分抵用兑换商品过程中无需任何手续费，无需任何的邮寄费，无需任何的加价只需要填写您的收件地址跟联系方式即可兑换商品
		</div>
		<div class="cl"></div>
		<form class='search'>
			<fieldset>
				<label>积分范围:</label>
				<input type="number" name="" value="0"> - 
				<input type="number" name="" value="99999">
			</fieldset>
			<fieldset>
				商品名称:
				<input class='shop_name' type="text" name="">
				<input type="submit" name="" style="display:none">
			</fieldset>
		</form>
	</div>
	<div class="list">
		<?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="item">
				<div class="buyNow">
					<a href="">查看详情</a>
					<?php if(($vo["integral"]) > $rank): ?><a href="#" title="" class="button greyishB">
                          积分不足
                        </a>
                      <?php else: ?>
                        <a href="<?php echo U('buy',array('id'=>$vo['id']));?>" title="" class="button redB layer_iframe">
                          立即购买
                        </a><?php endif; ?>
				</div>
				<span class='title'>
					<?php echo ($vo["title"]); ?>
				</span>
				<br>
				<div class="shopImg fl">
					<img src="/Public/Home/images//shopimg.png">
				</div>
				<div class="info fl">
					<ul>
						<li>
							<p class="red" style="font-weight:700;">
								<?php echo ($vo["people"]); ?>人
							</p>
							<p>
								已兑换此商品
							</p>
						</li>
						<li class="shichangjia">
							<p>
								市场价
							</p>
							<p>
								￥<span style="text-decoration:line-through;color:#333;"><?php echo ($vo["price"]); ?></span>
							</p>
						</li>
						<li>
							<p>
								会员积分
							</p>
							<p class="red">
								<?php echo ($vo["integral"]); ?>
							</p>
						</li>
					</ul>
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
		<div class="cl"></div>
		<div class="page fl">
			<?php echo ($showPage); ?>
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
		$(".item").hover( function()
		{
			var i = $(this).index();
			$(".buyNow").eq(i).show();
		},function()
		{
			var i = $(this).index();
			$(".buyNow").eq(i).hide();
		});
	</script>

</body>
</html>