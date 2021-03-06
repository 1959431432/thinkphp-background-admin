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


	// 管理员登录
	public function admin_login()
	{
		$user = I('post.user');
		$pass = I('post.password');

		$admin_user = O('admin_user');
		$admin_pass = O('admin_pass');
		
		if( empty( $admin_user ) ){
			O('admin_user','admin','网站后台登陆帐号');
			$admin_user = 'admin';
		}
		
		if( empty( $admin_pass) ) {
			O('admin_pass','admin','网站后台登陆密码');
			$admin_pass = 'admin';
		}

		if( $user == $admin_user && $pass == $admin_pass ) {

			// 记录登录信息
			$admin_login_note['lastip']    = get_client_ip();
			$ipObj 			   = new \Org\Net\IpLocation();
			$ipLocation 	   = $ipObj->getlocation( $admin_login_note['lastip'] );
			$admin_login_note['lastarea']  = gbk2utf8( $ipLocation['country'] );
			$admin_login_note['login_time'] = NOW_TIME;

			$login_note = S("admin_login_note");
			$login_note['prev']    = $login_note['current'];
			$login_note['current'] = $admin_login_note;
			S('admin_login_note',$login_note);

			session('admin_user',$login_note);
			// ====================== //
				
			return true;
		} else {
			return false;
		}
	}

	public function getGroupUserCondition( $groupid )
	{
		$groupModel = D('Group');
		$group = $groupModel->find( $groupid );

		if( empty( $group ) ){
			throw new Exception("没有该分组", 1);
		}
		$nextCondition = array(
			'integral' => array( 'gt', $group['integral'] )
		);
		$nextGroup = $groupModel->where( $nextCondition )->find();
		if( empty( $nextGroup ) ){
			$where['level'] = array( 'gt', $group['integral'] );
		} else {
			$where['level'] = array(
				'between', array( $group['integral'], $nextGroup['integral'] - 1 )
			);
		}
		return $where;
	}

	public function getGroupUserCount( $groupid )
	{
		$where = D('User')->getGroupUserCondition( $groupid );
		return M('User')->where( $where )->count();
	}
}

 ?>