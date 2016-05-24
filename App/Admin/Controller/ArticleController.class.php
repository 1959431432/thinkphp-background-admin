<?php 
namespace Admin\Controller;

/**
 * 文章控制器
 */
class ArticleController extends CommonController
{
	public function _before_add()
	{
		$categorys = D('Category')->getArticleCategory();
		$this->assign('categorys',$categorys);
	}	

	protected function condition(){
		$where = parent::condition();
		if( '' != $where['title'] ){
			$where['title'] = array( 'like', '%'.$where['title'].'%');
		}
		return $where;
	}
}

 ?>