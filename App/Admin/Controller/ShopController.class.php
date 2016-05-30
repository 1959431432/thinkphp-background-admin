<?php 
namespace Admin\Controller;

/**
 * 
 */
class ShopController extends CommonController
{
	protected function condition(){
		$where = parent::condition();
		if( '' != $where['title'] ){
			$where['title'] = array( 'like', '%'.$where['title'].'%');
		}
		return $where;
	}
}

 ?>