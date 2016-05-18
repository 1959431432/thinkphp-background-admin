<?php 
namespace Admin\Controller;

/**
* 
*/
class ArticleController extends CommonController
{
	public function _before_add()
	{
		$categorys = D('Category')->getArticleCategory();
		$this->assign('categorys',$categorys);
	}	
}

 ?>