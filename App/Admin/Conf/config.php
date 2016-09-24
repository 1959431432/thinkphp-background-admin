<?php
return array(
	// 后台导航列表
	'_menu'=> array(
		array('title'=>'控制中心','url'=>'Index/index','class'=>'dash','children'=>false),
	
		array('title'=>'线路检测','url'=>'Link/index','class'=>'widgets','children'=>false),
		array('title'=>'系统设置','url'=>'Options/index','class'=>'setting','children'=>false),
		array('title'=>'网站统计','url'=>'Counts/index','class'=>'clock','children'=>false),
		array('title'=>'后台账号','url'=>'#','class'=>'tags','children'=>array(
			array('title'=>'管理员列表','url'=>'Administrator/index','class'=>''),
			array('title'=>'管理员分组','url'=>'Authgroup/index','class'=>''),
			array('title'=>'节点管理','url'=>'Authrule/index','class'=>''),
		)),
		array('title'=>'消息中心','url'=>'#','class'=>'errors','children'=>array(
			array('title'=>'发送消息','url'=>'Message/add','class'=>''),
			array('title'=>'消息记录','url'=>'Message/index','class'=>''),
			array('title'=>'用户反馈','url'=>'Message/feedback','class'=>''),
		)),
		array('title'=>'退出','url'=>'Public/logout','class'=>'typo','children'=>false),
	),

	//'配置项'=>'配置值'
    'tmpl_parse_string' => array(
        '__PUBLIC__' => __ROOT__ . '/Public/Admin/',
        '__CSS__' => __ROOT__ . '/Public/Admin/css/',
        '__JS__'  => __ROOT__ . '/Public/Admin/js/',
        '__IMG__' => __ROOT__ . '/Public/Admin/images/',
    ),
);
