<?php
namespace Home\Controller;
/**
 * 前台首页控制器
 */
class IndexController extends CommonController {
    public function index(){
		$messages = D('message')->indexMsg();
		$this->assign( 'messages', $messages );

		$hasSign = D('days')->hasSign();
    	$this->assign( 'hasSign', $hasSign );
		
		$this->display();
    }
}
