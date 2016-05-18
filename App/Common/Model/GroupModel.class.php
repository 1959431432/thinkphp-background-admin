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
		return $this->getList( array('status'=>1), 'integral asc', 'id,title' );
	}

	public function getList( $where = array() , $order = null, $field )
	{
		return $this->where( $where )->order( $order )->field( $field )->select();
	}
}

 ?>