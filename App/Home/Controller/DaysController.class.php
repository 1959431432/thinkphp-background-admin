<?php 
namespace Home\Controller;
/**
 * 签到控制器
 */
class DaysController extends CommonController
{
	public function index()
	{
		$signNote = D('days')->where( array('uid'=>UID))->count();
		$this->assign( 'signNote', $signNote );	
		$data['addtime'] = mktime( 0, 0, 1, date('m',NOW_TIME), date('d',NOW_TIME) , date('Y',NOW_TIME ) );
		$this->todays = $this->getModel()->where( $data )->order('addtime desc')->limit(10)->select();
		$this->sumNumbers = $this->getModel()->field("COUNT(`id`) num,`uid`")->order('num desc')->group('`uid`')->limit(10)->select();
		$this->zonggong = $this->getModel()->count();
		$this->hasSign = $this->getModel()->hasSign();
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