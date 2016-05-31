<?php 
namespace Home\Model;

/**
 * 
 */
class CountsModel extends CommonModel
{
	
	public function subjoin( $filed )
	{
		$condition['id'] = mktime( 0, 0, 1, date('m',NOW_TIME), date('d',NOW_TIME) , date('Y',NOW_TIME ) );
		$vo = $this->where( $condition )->find();
		if( empty( $vo ) ){
			$condition[ $filed ] ++;
			$this->add( $condition );
		} else {
			$vo[ $filed ] ++;
			$this->save( $vo ); 
		}
	}				
}

 ?>