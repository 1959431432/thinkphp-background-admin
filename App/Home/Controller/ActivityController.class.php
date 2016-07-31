<?php 
namespace Home\Controller;

/**
 * 活动控制器
 */
class ActivityController extends CommonController
{
	public function index()
	{
		// $this->groups = D('Common/Group')->idAndTitle();
		$this->activitys = $this->getModel()->getIndexList();
		$this->display();
	}

	public function detail( $id )
	{
		$activity = $this->getModel()->field('content')->find( $id );
		echo htmlspecialchars_decode( $activity['content'] );
	}
}

?>