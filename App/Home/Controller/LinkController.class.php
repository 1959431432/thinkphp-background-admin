<?php 
namespace Home\Controller;

/**
 * 打开网站控制器
 */
class LinkController extends CommonController
{
	public function index()
	{
		// 连接打开次数
		web_count('link_number');
		
		$this->display();
	}
}

 ?>