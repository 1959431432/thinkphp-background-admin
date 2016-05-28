<?php
namespace Admin\Controller;
use \Common\Controller\BaseController;

/**
 * 后台公共控制器
 */
class CommonController extends BaseController {
	
    public function _initialize()
    {
    	$admin_user = session('admin_user');
    	if( ! $admin_user ){
    		tourl('Public/login');
    	}

    	parent::_initialize();
    }
}
