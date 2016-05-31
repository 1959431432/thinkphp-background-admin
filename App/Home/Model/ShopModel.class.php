<?php 
namespace Home\Model;
/**
 * 商品模型
 */
class ShopModel extends CommonModel
{
	public function condition()
	{
		$where['starttime'] = array( 'lt', NOW_TIME );
		$where['endtime']   = array( 'gt', NOW_TIME );
		$where['status']    = 1;
		return $where;
	}

	public function get( $where = array() )
	{
		$condition = $this->condition();
		$where = array_merge( $condition, $where );
		return $this->where( $where )->find();
	}
}
 ?>