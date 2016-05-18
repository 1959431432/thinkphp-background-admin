<?php 
namespace Home\Controller;
use Think\Controller;

/**
* 
*/
class PublicController extends Controller
{
	public function login()
	{
		if( ! IS_POST ){ 
			$this->display();
		} else {
			$userModel = D('user');

			if( $userModel->login() ){
				$this->success('登入成功',U('Index/index'));
			} else {
				$this->error( $userModel->getError() );
			}
		}
	}

	public function logout()
	{
		session_destroy();
		tourl('login');
	}

	public function register()
	{
		if( ! IS_POST ){
			$this->display();
			exit();
		}
		
		$userModel = D('user');

		if( $userModel->register() ) {
			$this->success('注册成功',U('Index/index'));
		} else {
			$this->error( $userModel->getError() );
		}
	}

	public function verify()
	{
		$Verify = new \Think\Verify();
		$Verify->entry();
	}
}

 ?>