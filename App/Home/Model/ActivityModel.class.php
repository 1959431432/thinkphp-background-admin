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
		$condition['starttime'] = array('lt',NOW_TIME);
		$condition['endtime']   = array('gt',NOW_TIME);
		$condition['status']    = 1;
		return array_merge( $condition, $where );
	}

	public function getIndexList()
	{
		$condition = $this->condition();
		return $this->where( $condition )->select();
	}

	public function userActivity()
	{
		$level     = session('user.level');
    	$integral  = getUserGroup($level,'integral');
    	$where['integral'] = array('lt',$integral);
    	$condition = $this->condition( $where );
    	$list      = $this->where( $condition )->select();
    	return $list;
	}
}

 ?>