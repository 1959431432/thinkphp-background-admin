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

		$statistics['download']    		= counts_default_number($today['download'],$yesterday['download']); 
		$statistics['link_number']      = counts_default_number($today['link_number'],$yesterday['link_number']); 
		$statistics['login_number']     = counts_default_number($today['login_number'],$yesterday['login_number']); 
		$statistics['link_number']      = counts_default_number($today['link_number'],$yesterday['link_number']); 
		$statistics['register_number']  = counts_default_number($today['register_number'],$yesterday['register_number']); 

		$return['counts'] 	= $statistics;
		$return['today']    = $today;
		return $return;
	}

}
 ?>