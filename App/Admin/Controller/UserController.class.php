<?php 
namespace Admin\Controller;
/**
* 
*/
class UserController extends CommonController
{
	protected function condition(){
		$where = parent::condition();
		if( '' != $where['username'] ){
			$where['username'] = array( 'like', '%'.$where['username'].'%');
		}
		return $where;
	}
}

 ?>