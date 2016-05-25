<?php 
namespace Home\Model;

/**
 * 活动模型 
 */
class ActivityModel extends CommonModel
{
	public function getActivityByIntegral( $integral )
	{
		$where = $this->condition( array( 'integral'=>$integral ) );
		return $this->where( $where )->limit($limit)->order('`order` desc')->select();
	}

	// 活动基本条件
	private function condition( $where = array() )
	{
		$condition['startime'] = array('gt',NOW_TIME);
		$condition['endtime']  = array('lt',NOW_TIME);
		$condition['status']   = 1;
		return array_merge( $condition, $where );
	}
}

 ?>