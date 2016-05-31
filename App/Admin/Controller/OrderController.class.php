<?php 
namespace Admin\Controller;

/**
 * 订单管理
 */
class OrderController extends CommonController
{
	public function _before_save()
	{
		$status = I('post.status');
		if( $status == 1 )
			return ;
		$title  = '订单详情';
		$content= "尊敬的会员您好，您的订单:" . statusTitle( $status, 'shop' );
		$uid    = I('post.uid');
		D('Message')->send( $uid, $title, $content );
		if( $status == 0 ){
			D('User')->where( array('id'=>$uid))->setInc('rank',I('post.integral'));
		}
	}	
}

 ?>