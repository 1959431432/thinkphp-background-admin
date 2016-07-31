<?php 
namespace Home\Controller;

/**
 * 打开网站控制器
 */
class LinkController extends CommonController
{
	public function index()
	{
		$result = D('Link')->limit(12)->where( array('status'=>1) )->order('`order` desc')->select();
		$this->assign('result',$result);
		$this->display();
	}

	public function tiaozhuan( $url )
	{
		
		// 连接打开次数
		web_count('link_number');
		
		header("Location://".ltirm( $url, 'http://') );
	}
}

 ?>