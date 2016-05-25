<?php 
namespace Home\Controller;

/**
 * 消息控制器
 */
class MessageController extends CommonController
{
	public function condition()
	{
		$condition = $this->getModel()->condition();
		return $condition;
	}

	public function _after_add()
	{
		D('Read')->record_status();
	}
}

 ?>