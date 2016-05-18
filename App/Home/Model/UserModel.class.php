<?php 
namespace Home\Model;

/**
 * 用户模型
 */
class UserModel extends CommonModel
{
	protected $_auto = array(
		array('addtime',NOW_TIME,self::MODEL_INSERT),
		array('birth','strtotime',self::MODEL_BOTH,'function'),
		array('password','_md5',self::MODEL_BOTH,'callback'),
		array('password','',self::MODEL_UPDATE,'ignore'),
	);

	protected function _md5( $pass )
	{
		return empty( $pass ) ? '' : md5( $pass );
	}

	protected $_validate = array(
		array( 'username','require','帐号必须存在',0,'',self::MODEL_INSERT),
		array( 'password','require','密码必须存在',0,'',self::MODEL_INSERT),
		array( 'username','', '该账号已经被注册，请重新更更换', self::MUST_VALIDATE, 'unique', 1 ),
	);

	public function login()
	{
		$username = I('post.username');
		$password = I('post.password',null,'md5');
		
		$user = $this->where( array('username'=>$username,'password'=>$password))->find();

		if( empty( $user ) ){
			$this->error = '帐号或密码错误';
			return false;
		}
		if( $user['status'] != 1 ){
			$this->error = '帐号已经被禁用，请联系客服解冻';
			return false;
		}
		// 修改最后登入时间
		$user['lastlogin'] = NOW_TIME;

		// 修改最后登入ip
		$user['lastip']    = get_client_ip();
		
		// 实例化 IP 地理位置查询类
		$ipObj 			   = new \Org\Net\IpLocation();
		// 获取地址
		$ipLocation 	   = $ipObj->getlocation( $user['lastip'] );

		// 修改最后登入地址 
		$user['lastarea']  = gbk2utf8( $ipLocation['country'] );

		// 保存修改数据
		$this->save( $user );

		// 保存session登入数据;
		session( 'user', $user );

		return true;
	}

	public function register()
	{
		if( ! $this->create() ){
			return false;
		}

		if( ! $this->add() ){
			$this->error = '注册失败，请联系客服';
			return false;
		}

		return $this->login();
	}

	protected function _after_update( $data, $options ){
		$oldUser = session('user');
		$newUser = array_merge( $oldUser, $data );
		session('user',$newUser);
	}
}

 ?>