<?php 
namespace Home\Controller;

/**
 * 用户设置控制器
 */
class SettingController extends CommonController
{
	public function index() {
		$vo = session('user');
		$model = D('days');
		$sumDay = $model->where( array('uid'=>UID) )->count();
		$this->assign('sumDay',$sumDay);
		$this->assign('vo',$vo);
		$this->display();
	}

	protected function getModel() {
		return D('User');
	}
}
 ?>