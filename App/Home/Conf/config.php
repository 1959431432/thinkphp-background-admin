<?php
return array(
	// 前台导航列表
	'_menu'=> array(
		array('title'=>'个人中心','url'=>'Index/index','class'=>'dash','children'=>false),
		array('title'=>'我的等级','url'=>'Group/index','class'=>'charts','children'=>false),
		// array('title'=>'消息中心','url'=>'Message/index','class'=>'forms','children'=>false),
		array('title'=>'优惠活动','url'=>'Activity/index','class'=>'forms','children'=>false),
		array('title'=>'个人资料','url'=>'Setting/index','class'=>'ui','children'=>false),
		array('title'=>'每日签到','url'=>'Days/index','class'=>'tables','children'=>false),
		// array('title'=>'积分商城','url'=>'Ip/index','class'=>'files','children'=>false),
		array('title'=>'打开网站','url'=>'Link/index','class'=>'widgets','children'=>false),
		array('title'=>'消息中心','url'=>'Message/index','class'=>'errors','children'=>false),
		array('title'=>'退出','url'=>'Public/logout','class'=>'typo','children'=>false),
	),
);
