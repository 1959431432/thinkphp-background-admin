<?php 
namespace Admin\Controller;

/**
* 
*/
class AdministratorController extends CommonController
{
	protected function condition(){
		$where = parent::condition();
		if( '' != $where['user'] ){
			$where['user'] = array( 'like', '%'.$where['user'].'%');
		}
		
		return $where;
	}

	public function _before_add()
	{
		$this->groups = M('AuthGroup')->where( array('status'=>1 ) )->select();
	}
}

 ?>