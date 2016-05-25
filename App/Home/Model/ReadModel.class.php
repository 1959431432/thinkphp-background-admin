<?php 
namespace Home\Model;

/**
 * 记录消息已读状态
 */
class ReadModel extends CommonModel
{
	protected $_auto = array(
		array('addtime',NOW_TIME),
	);	

	// 记录文章状态
	public function record_status()
	{
		$condition = array(
			'uid' => UID,
			'mid' => I('get.id'),
		);
		$before_record = $this->where( $condition )->count();
		if( empty( $before_record ) ){
			$this->create( $condition );
			$this->add();
		}
	}

	public function msg_condition()
	{
		$mids 	   = $this->where( array('uid'=>UID ) )->getField('mid',true);
		return implode(',', (array) $mids );
	}
}

 ?>