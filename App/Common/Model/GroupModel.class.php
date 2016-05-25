<?php 
namespace Common\Model;
use Think\Model;

/**
 * 
 */
class GroupModel extends Model
{
	public function idAndTitle()
	{
		$where['status'] = 1;
		// $where['integral']	 = array('lt',session('user.level')) ;
		return $this->getList( $where, 'integral asc', 'id,title,integral' );
	}

	public function getList( $where = array() , $order = null, $field )
	{
		return $this->where( $where )->order( $order )->field( $field )->select();
	}
}

 ?>