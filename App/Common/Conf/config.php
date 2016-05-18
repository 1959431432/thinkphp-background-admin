<?php
return array(

	//数据库配置信息
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'exe', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'root', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => 'e_', // 数据库表前缀 


    //'配置项'=>'配置值'
    'tmpl_parse_string' => array(
        '__PUBLIC__' => __ROOT__ . '/Public/',
        '__CSS__' => __ROOT__ . '/Public/css/',
        '__JS__'  => __ROOT__ . '/Public/js/',
        '__IMG__' => __ROOT__ . '/Public/images/',
    ),

    // 文件上传
    'UPLOAD_CONFIG' => array(
	    'maxSize'    =>    3145728,
	    'rootPath'   =>    './Public/uploads/images/',
	    'savePath'   =>    '',
	    'saveName'   =>    array('uniqid',''),
	    'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
	    'autoSub'    =>    true,
	    'subName'    =>    array('date','Ymd'),
    ),
);