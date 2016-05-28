<?php 
namespace Home\Controller;
use Think\Controller;

/**
 * 公共处理控制器
 */
class PublicController extends Controller
{
	public function _initialize()
	{
		$web_status = O("web_status");
		if( 1 != $web_status ){
			$this->display('web_close');
			return ;
		}
	}

	public function login()
	{
		if( ! IS_POST ){ 
			$this->display();
		} else {
			$userModel = D('user');

			if( $userModel->login() ){
				
				// 会员登录次数
				web_count('login_number');

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

	public function web_close()
	{
		$web_status = O("web_status");
		if( 1 == $web_status ){
			tourl('Index/index');
			return ;
		}
		$this->display();
	}

	public function download() {
		// 下载次数
		web_count('download');
	}
}

 ?>