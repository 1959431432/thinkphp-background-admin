<?php 
namespace Home\Controller;
/**
* 
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