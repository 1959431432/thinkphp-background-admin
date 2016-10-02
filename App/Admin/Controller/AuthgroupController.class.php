<?php 
namespace Admin\Controller;

/**
* 后台管理员分组
*/
class AuthgroupController extends CommonController
{
	protected $limit = null;
	
	protected function getModel()
	{
		return D('AuthGroup');
	}

	public function authrule()
	{
		$rules = M('authRule')->where( array('name'=>array('exp','is not null')))->order('`name` desc')->select();

		$this->assign( 'rules', $rules );

		$groupRule = $this->getModel()->where(array('id'=>I('get.id')))->getField('rules');

		$this->assign('groupRule',$groupRule);

		$this->display();
	}

	public function authSave()
	{
		$rules = implode( $_POST['rules'], ',');
		$id    = I('post.id');
		$model = $this->getModel();
		if( $model->save( array('id'=>$id,'rules'=>$rules ) ) ){
			$this->success('分配成功',U( 'authrule',array( 'id'=>$id ) ) );
		} else {
			$this->error('分配失败');
		}
	}
}

 ?>