<?php
return array(
	// 后台导航列表
	'_menu'=> array(
		array('title'=>'控制中心','url'=>'Index/index','class'=>'dash','children'=>false),
		array('title'=>'会员管理','url'=>'#','class'=>'ui','children'=>array(
				array('title'=>'会员列表','url'=>'User/index','class'=>''),
				// array('title'=>'未审核会员','url'=>'Users/unreviewed','class'=>''),
				array('title'=>'会员分组','url'=>'Group/index','class'=>''),
			)),
		// array('title'=>'消息中心','url'=>'Message/index','class'=>'forms','children'=>false),
		array('title'=>'文章管理','url'=>'＃','class'=>'widgets','children'=>array(
			array('title'=>'文章列表','url'=>'Article/index','class'=>''),
			array('title'=>'文章栏目','url'=>'Category/index','class'=>''),
		)),
		array('title'=>'优惠活动','url'=>'Activity/index','class'=>'forms','children'=>false),
		// array('title'=>'个人资料','url'=>'Article/odd','class'=>'ui','children'=>false),
		array('title'=>'签到排名','url'=>'Days/index','class'=>'tables','children'=>false),
		array('title'=>'积分商城','url'=>'Ip/index','class'=>'files','children'=>false),
		array('title'=>'系统设置','url'=>'System/index','class'=>'setting','children'=>false),
		array('title'=>'消息中心','url'=>'#','class'=>'errors','children'=>array(
			array('title'=>'发送消息','url'=>'Message/add','class'=>''),
			array('title'=>'消息记录','url'=>'Message/index','class'=>''),
			array('title'=>'用户反馈','url'=>'Message/feedback','class'=>''),
		)),
		array('title'=>'退出','url'=>'Public/logout','class'=>'typo','children'=>false),
	),
);
