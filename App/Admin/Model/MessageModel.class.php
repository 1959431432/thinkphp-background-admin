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

	public function send( $uid, $title, $content )
	{
		$data = array(
			'uid'  => 0,
			'touid'=> $uid,
			'title'=> $title,
			'content'=>$content,
			'addtime'=>NOW_TIME,
		);
		$this->add( $data );
	}
}

 ?>