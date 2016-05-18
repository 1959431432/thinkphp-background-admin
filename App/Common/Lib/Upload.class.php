<?php 
namespace Common\Lib;
/**
 * 
 */
class Upload
{
	protected static $error;

	public static function upload( $config = array() )
	{
		//加载文件上传配置
		$upload_config = C('UPLOAD_CONFIG');
		// 查看是否有自定义配置
		$newConfig     = array_merge($upload_config,$config);
		// 实例化thinkphp上传类
		$think_upload  = new \Think\Upload( $newConfig ); 
		$info   	   = $think_upload->upload();
		if( ! $info ) {
			self::$error = $think_upload->getError();
		}
	    return $info;
	}

	public static function getError(){
		return self::$error;
	}
}

 ?>