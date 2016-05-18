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
}

 ?>