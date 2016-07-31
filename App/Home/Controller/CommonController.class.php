<?php
namespace Home\Controller;
use \Common\Controller\BaseController;
/**
 * 前台公共控制器
 */
class CommonController extends BaseController {

	public function _initialize()
	{
		
		$web_status = O('web_status');
		if( 1 != $web_status ){
			tourl('Public/web_close');
		}

		parent::_initialize();

		$user = session('user');

		if( empty( $user ) ){
			tourl('public/login');
		}

		define('UID',$user['id']);
		
		// 用户等级
		$userGroup = getUserGroup( $user['level'] );
		$nextGroup = D('group')->where('integral > ' . $userGroup['integral'])->find();
		$this->assign( '_userGroup', $userGroup );
		$this->assign( '_nextGroup', $nextGroup );
		$this->assign('_user',$user);

		// 会员消息
		$msgModel = D("message");
		$messageCondition = $msgModel->condition();
		$messages = $msgModel->where( $messageCondition )->count();
		$this->assign( '_msgNumber', $messages );
	}

	public function del()
	{
		$this->error('非法操作');
	}
}
