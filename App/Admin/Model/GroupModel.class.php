<?php 
namespace Admin\Model;

/**
 * 用户分组模型
 */
class GroupModel extends CommonModel
{
	protected $_auto = array(
		array( 'default', '_default', self::MODEL_BOTH, 'callback')
	);	

	protected function _default( $default ){
		if( $default == 1 ){
			$this->where( array('`default`'=> 1 ) )->save( array('default'=> 2 ) );
		}
		return $default;
	}
}
 ?>