<?php 
namespace Admin\Controller;

/**
 * 消息控制器
 */
class MessageController extends CommonController
{
	public function _before_add()
	{
		$users = S('users');
		if( empty( $users ) ){
			$users = D('User')->where( array( 'status'=>1 ) )->field('id,username')->select();
			S('users',$users,3600);
		}
		$this->assign('users',$users);
	}

	protected function condition()
	{
		$where = parent::condition();
		if( '' != $where['title'] ){
			$where['title'] = array( 'like', '%'.$where['title'].'%');
		}
		$where['touid'] = 0;
		return $where;
	}

	public function feedback()
	{
		$where = $this->condition();
		$where['uid']   = array( 'neq', 0 );
		$where['touid'] = 0;
		$this->lists( $where );
        $this->display();
	}

	public function detail()
	{
		$this->add();
	}
}

 ?>