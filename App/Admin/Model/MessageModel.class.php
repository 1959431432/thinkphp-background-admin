<?php 
namespace Admin\Model;
/**
 * 消息模型
 */
class MessageModel extends CommonModel
{
	protected $_auto = array(
		array( 'addtime',NOW_TIME,self::MODEL_INSERT),
	);	
}

 ?>