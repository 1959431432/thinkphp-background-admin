<?php 
namespace Admin\Model;

/**
* 
*/
class CategoryModel extends CommonModel
{
	public function getArticleCategory()
	{
		return $this->where( array('status'=>1 ) )->field('id,title')->order('`sort` desc, id desc')->select();
	}
}

 ?>