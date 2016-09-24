<?php 
namespace Admin\Model;

/**
 * 权限模型
 */
class AuthRuleModel extends CommonModel
{
	
	protected function _before_write(&$data) {
		S("_menus",null);
	}

	protected function _after_delete($data,$options){
		S("_menus",null);
	}
}


 ?>