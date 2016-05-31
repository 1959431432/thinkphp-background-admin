<?php 
namespace Home\Controller;

/**
 * 活动控制器
 */
class ActivityController extends CommonController
{
	public function index()
	{
		$this->groups = D('Common/Group')->idAndTitle();
		$this->display();
	}

	
}

?>