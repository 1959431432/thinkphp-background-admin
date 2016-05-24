<?php 
namespace Admin\Model;

/**
 * 活动模型
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