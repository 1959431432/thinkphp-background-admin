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

    	// 导航

    	$_menus = S("_menus");

    	if( empty( $_menus ) || true ){
    		$authModel = D('authRule');
    		$_menus = $authModel->where( array('pid'=>0, 'ismenu'=> 1, 'status'=>1 ) )->field('id,pid,name,title,istop')->order('`sort` desc')->select();
            foreach( $_menus as &$m ){
                if( $m['istop'] == 1){
                    $m['children'] = $authModel->where( array('pid'=>$m['id'], 'ismenu'=>1, 'status'=>1) )->select();
                }
            }
    		S("_menus",$_menus,3600*10);
    	}
    	$this->assign( '_menus', $_menus );
    }
}
