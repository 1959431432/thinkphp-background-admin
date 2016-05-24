<?php 
namespace Admin\Controller;
/**
 * 用户控制器
 */
class UserController extends CommonController
{
	protected function condition(){
		$where = parent::condition();
		if( '' != $where['username'] ){
			$where['username'] = array( 'like', '%'.$where['username'].'%');
		}
		$groupid = I('get.groupid',null);
		if( ! empty( $groupid ) && $groupid > 0 ){
			$level = getGroupUserCondition( $groupid );
			$where = array_merge( $where, $level );
		}
		return $where;
	}

	public function _before_index(){
		$group = M('group')->where( array('status'=>1 ) )->order('`integral` asc')->select();
		$this->assign( 'groups', $group );
	}
}

 ?>