<?php 
namespace Admin\Controller;
use Think\Controller;

/**
 * 公共控制器
 */
class PublicController extends Controller
{
	public function login()
	{
		if( ! IS_POST ){ 
			$this->display();
		} else {
			$status = D('User')->admin_login();
			if( $status ) {
				$this->success('欢迎管理员登录',U('Index/index'));
			} else {
				$this->error('帐号或密码错误,请重试');
			}
		}
	}

	public function logout()
	{
		session_destroy();
		tourl('login');
	}
}

 ?>