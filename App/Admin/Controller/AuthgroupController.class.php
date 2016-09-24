<?php 
namespace Admin\Controller;

/**
* 
*/
class AuthgroupController extends CommonController
{
	protected $limit = null;
	
	protected function getModel()
	{
		return D('AuthGroup');
	}

	public function authrule()
	{
		$rules = M('authRule')->where( array('name'=>array('exp','is not null')))->order('`name` desc')->select();

		$this->assign( compact('rules') );
		$this->display();
	}
}

 ?>