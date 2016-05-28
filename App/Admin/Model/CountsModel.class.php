<?php 
namespace Admin\Model;

/**
 * 统计信息
 */
class CountsModel extends CommonModel
{
	// 后台首页统计信息
	public function backend()
	{
		$condition = mktime( 0, 0, 1, date('m',NOW_TIME), date('d',NOW_TIME) , date('Y',NOW_TIME ) );
		$today     = $this->find( $condition );
		$yesterday = $this->find( $condition - ( 3600 * 24 ) );
		// 转换类型
		$today['download']        		+= 0;
		$today['link_number']     		+= 0;
		$today['login_number']     		+= 0;
		$today['register_number	']      += 0;
		$yesterday['download']    		+= 0;
		$yesterday['link_number'] 		+= 0;
		$yesterday['login_number'] 		+= 0;
		$yesterday['register_number	']  += 0;

		$statistics['download']    = ( $today['download'] - $yesterday['download'] ) / $yesterday['download'] * 100; 
		$statistics['link_number'] = ( $today['link_number'] - $yesterday['link_number'] ) / $yesterday['link_number'] * 100; 
		$statistics['login_number'] = ( $today['login_number'] - $yesterday['login_number'] ) / $yesterday['login_number'] * 100; 
		$statistics['register_number'] = ( $today['register_number'] - $yesterday['register_number'] ) / $yesterday['register_number'] * 100; 

		$return['counts'] = $statistics;
		$return['today']	  = $today;

		return $return;
	}
}
 ?>