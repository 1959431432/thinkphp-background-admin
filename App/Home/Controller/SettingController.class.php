<?php 
namespace Home\Controller;

/**
* 
*/
class SettingController extends CommonController
{
	public function index() {
		$vo = session('user');
		$this->assign('vo',$vo);
		$this->display();
	}

	protected function getModel() {
		return D('User');
	}
}
 ?>