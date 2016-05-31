<?php 
namespace Home\Controller;

/**
 * 商城控制器
 */
class ShopController extends CommonController
{
	protected function condition()
	{
		$where = $this->getModel()->condition();
		return $where;
	}

	public function buy( $id )
	{
		$this->display();
	}

	public function buySave()
	{
		$user = session('user');
		$shop = D('Shop')->get( array('id'=>I('post.sid' ) ) );
		if( empty( $shop ) ){
			$this->error('没有该商品');
		}
		if( $user['rank'] < $shop['integral'] ){
			$this->error('抱歉，您的积分不够');
		}
		$_POST['integral'] = $shop['integral'];
		$model = $this->getModel( 'order' );
		if( $model->handle() ) {
			$user['rank'] -= $shop['integral'];
			session('user',$user);
			M('User')->save( $user );
    		$this->success('购买成功');
    	} else {
    		$this->error( $model->getError() ? :'购买失败，请联系客服');
    	}
	}
}

 ?>