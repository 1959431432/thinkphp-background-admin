<?php
namespace Admin\Controller;
/**
 * 后台首页控制器
 */
class IndexController extends CommonController {
    public function index(){
    	//		 今天   昨天    昨天
    	// echo ( 100 - 50 ) / 50 * 100;exit();
    	$users = M('user')->limit(100)->select();
    	$this->assign('users',$users);

    	$statistics = D('counts')->backend();

    	$this->assign('statistics',$statistics);

		$this->display();
    }

}
