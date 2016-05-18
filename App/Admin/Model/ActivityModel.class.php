<?php 
namespace Admin\Model;

/**
* 
*/
class ActivityModel extends CommonModel
{
	protected $_auto = array(
		array('addtime',NOW_TIME,self::MODEL_INSERT),
		array('starttime','strtotime',self::MODEL_BOTH,'function'),
		array('endtime','strtotime',self::MODEL_BOTH,'function'),
	);
}

 ?>