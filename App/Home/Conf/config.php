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
		array('title'=>'积分商城','url'=>'Shop/index','class'=>'files','children'=>false),
		array('title'=>'游戏网址','url'=>'Link/index','class'=>'widgets','children'=>false),
		array('title'=>'消息中心','url'=>'Message/index','class'=>'errors','children'=>false),
		array('title'=>'退出','url'=>'Public/logout','class'=>'typo','children'=>false),
	),

	//'配置项'=>'配置值'
    'tmpl_parse_string' => array(
        '__PUBLIC__' => __ROOT__ . '/Public/Home/',
        '__CSS__' => __ROOT__ . '/Public/Home/css/',
        '__JS__'  => __ROOT__ . '/Public/Home/js/',
        '__IMG__' => __ROOT__ . '/Public/Home/images/',

        '__AJS__'  => __ROOT__ . '/Public/Admin/js/',
        '__ACSS__'  => __ROOT__ . '/Public/Admin/css/',
    ),

    'DEFAULT_THEME' => 'bbin',
);
