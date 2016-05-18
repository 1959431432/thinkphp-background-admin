<?php 
namespace Admin\Controller;
/**
* 
*/
class ActivityController extends CommonController
{
	public function _before_add()
	{
		$this->assign('groups',D('Common/Group')->idAndTitle());
	}

		protected function condition(){
		$where = parent::condition();
		if( '' != $where['title'] ){
			$where['title'] = array( 'like', '%'.$where['title'].'%');
		}
		return $where;
	}
}

 ?>