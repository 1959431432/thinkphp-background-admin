<?php 
namespace Home\Controller;
/**
 * 签到控制器
 */
class DaysController extends CommonController
{
	public function index()
	{
		$signNote = D('days')->where( array('uid'=>UID))->select();
		$this->assign( 'signNote', $signNote );	
		$this->display();
	}

	// 签到
	public function sign()
	{
		if( ! IS_AJAX ) return false;
		$daysModel = D('days');

		if( $daysModel->sign() ){

			// 签到增加用户积分
			reward();

			$this->success('签到成功');
		} else {
			$this->error( $daysModel->getError() );
		}
	}
}
 ?>