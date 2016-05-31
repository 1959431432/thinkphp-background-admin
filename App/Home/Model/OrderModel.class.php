<?php 
namespace Home\Model;

/**
 * 订单表
 */
class OrderModel extends CommonModel
{
	protected $_auto = array(
		array('uid',UID,self::MODEL_INSERT),
		array('addtime',NOW_TIME,self::MODEL_INSERT),
	);
}
 ?>