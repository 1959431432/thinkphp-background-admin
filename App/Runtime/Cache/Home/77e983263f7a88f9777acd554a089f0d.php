<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>购买商品</title>
	<link href="/Public/css//main.css" rel="stylesheet" type="text/css" />
	<link href="/Public/css//style.css" rel="stylesheet" type="text/css" />
</head>
<body style="background:none;">
	<div class="wrapper">
		<div class="widget">
			<div class="title">
				<h6>
					收货地址
				</h6>
			</div>
			<div class="body">
				<form class="form" id="buyForm" method="post" action="<?php echo U('buySave');?>">
					<input type="hidden" name="sid" value="<?php echo I('get.id');?>">
					<fieldset>
						<div class="formRow">
	                        <label>收件姓名:</label>
	                        <div class="formRight">
	                            <input type="text" name="name" id="name" value="<?php echo session('user.name');?>"/>
	                        </div>
	                        <div class="clear"></div>
	                    </div>

	                    <div class="formRow">
	                        <label>收件电话:</label>
	                        <div class="formRight">
	                            <input type="number" name="phone" id="phone" value="<?php echo session('user.phone');?>"/>
	                        </div>
	                        <div class="clear"></div>
	                    </div>

	                    <div class="formRow">
	                        <label>详细地址:</label>
	                        <div class="formRight">
	                        <textarea name="address" id="address" placeholder="请填写详细地址" rows='10'><?php echo session('user.address');?></textarea>
	                        </div>
	                        <div class="clear"></div>
	                    </div>
	                    <div class="formSubmit">
	                    	<input id="close_layer" class='button basic' type="button" value="取消">
	                    	<input type="submit" value="确定购买" class="redB" />
	                    </div>
                    	<div class="clear"></div>
					</fieldset>
				</form>
			</div>
		</div>
    </div>
    <script type="text/javascript" src="/Public/js//jquery.min.js"></script>
	<script type="text/javascript" src="/Public/js//plugins/layer/layer.js"></script>
    <script>
    	jQuery( function( $ )
    	{
    		
    		$("#close_layer").click( function()
    		{
    			parent.layer.closeAll();
    		});

    		$("#buyForm").submit( function()
    		{
    			if( ! confirm('是否购买？') ){
    				return false;
    			}
    			
    			var action = $(this).attr('action'),value = $(this).serialize(),ii = layer.load();

    			$.post( action, value, function( res )
    			{
					if( res.status == 1 ){
						layer.msg( res.info , {icon: 6}, function(){
							parent.layer.closeAll();
						});
					} else {
						layer.msg( res.info , {icon: 5});
					}
			        layer.close(ii);
    			});
    			return false;
    		});
    	});
    </script>
</body>
</html>