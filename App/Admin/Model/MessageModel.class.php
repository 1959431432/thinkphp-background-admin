<?php 
namespace Admin\Model;
/**
* 
*/
class MessageModel extends CommonModel
{
	protected $_auto = array(
		array( 'addtime',NOW_TIME,self::MODEL_INSERT),
	);	
}

 ?>