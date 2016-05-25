<?php 
namespace Home\Model;

/**
 * 消息模型
 */
class MessageModel extends CommonModel
{
	protected $_auto = array(
		array('addtime',NOW_TIME,self::MODEL_INSERT),
		array('uid',UID,self::MODEL_INSERT),
		array('type',0,self::MODEL_INSERT),
	);

	public function condition( $where = array() )
	{
		$condition['uid'] = 0;
		$condition['touid'] = array( array('eq',0), array('eq', UID), 'or' );
		$readMsg   = D("read")->msg_condition();
		$condition['id'] = array('not in', $readMsg );
		return array_merge( (array)$condition, (array)$where );
	}

	public function indexMsg( )
	{
    	$condition = $this->condition();
    	return $this->where( $condition )->select();
	}
}

 ?>