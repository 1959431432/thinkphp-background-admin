<?php 
namespace Admin\Controller;

/**
* 
*/
class AuthruleController extends CommonController
{
	protected $limit = null;
	
	protected function getModel()
	{
		return D('AuthRule');
	}

	protected function condition()
	{
		$where = parent::condition();
		$where['pid'] = 0;
		if( ! empty( $_GET['pid'] ) ){
			$where['pid'] = I('get.pid');
		}
		return $where;
	}

	public function _before_add()
	{
		$rules = $this->getModel()->where(array('pid'=>0) )->order('`name` desc')->select();
		$this->assign('rules',$rules);
	}
}

 ?>