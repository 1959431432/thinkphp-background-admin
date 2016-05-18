<?php 
namespace Admin\Model;
/**
* 
*/
class ArticleModel extends CommonModel
{
	protected $_auto = array(
		array('add_time',NOW_TIME, self::MODEL_INSERT),
	);

	protected $validate = array(
		array( 'key', '', '调用键不能重复', self::MUST_VALIDATE, 'unique' ),
	);
}
 ?>