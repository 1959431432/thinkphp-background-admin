<?php 
namespace Admin\Controller;

/**
* 
*/
class DaysController extends CommonController
{
	public function index()
	{
		$model = D('days');
		$sumDay = $model->field(array('count("uid")'=>'total','uid'))->order('total desc')->group('uid')->limit(10)->select();
		$this->assign('sumDay',$sumDay);

		$condition['addtime'] = mktime( 0, 0, 1, date('m',NOW_TIME), date('d',NOW_TIME) , date('Y',NOW_TIME ) );
		$today = $model->where( $condition)->order('id desc')->limit(10)->select();
		$this->assign('today',$today);
		$this->display();
	}

	public function detail( $uid )
	{
		$userSigns = D('days')->where(array('uid'=>$uid))->select();
		$this->assign('userSigns',$userSigns);
		$this->display();
	}
}


 ?>