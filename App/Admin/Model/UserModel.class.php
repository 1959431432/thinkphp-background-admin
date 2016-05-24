<?php 
namespace Admin\Model;

/**
 * 用户模型
 */
class UserModel extends CommonModel
{
	protected $_auto = array(
		array('birth','strtotime',self::MODEL_BOTH,'function'),
		array('addtime',NOW_TIME,self::MODEL_INSERT),
		array('lastlogin',NOW_TIME,self::MODEL_INSERT),
		array('password','_md5',self::MODEL_BOTH, 'callback'),
		array('password','',self::MODEL_UPDATE, 'ignore'),
	);

	protected $_validate = array(
		 array('username','require','用户名必须存在'), 			  //默认情况下用正则进行验证
		 array('password','require','用户密码必须存在',0, '', self::MODEL_INSERT),
		 array('username','','帐号名称已经存在！',0,'unique' ), // 在新增的时候验证name字段是否唯一
	);

	protected function _md5( $pass )
	{
		return empty( $pass ) ? '' : md5( $pass );
	}

}

 ?>