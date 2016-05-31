<?php
namespace Common\Controller;
use Think\Controller;
use \Common\Lib\Upload;
class BaseController extends Controller {
    
    protected $limit = 20;

    public function _initialize()
    {
    	$_menu = C('_menu');
    	$this->assign('_menu',$_menu);

        // admin user check
        // $admin_user = session('admin');
        // if( empty( $admin_user ) ){
        //     redirect( U('Public/login' ) );
        // }
    }

    public function index(){
        $where = $this->condition();
    	$this->lists( $where );
		$this->display();
    }

    protected function lists( $where = array() ){
        $model = $this->getModel();
        $count = $model->where($where)->count();
        $page  = new \Think\Page( $count, $this->limit );
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        $page->setConfig('prev','&lt;');
        $page->setConfig('next','&gt;');
        $lists = $model->where( $where )->limit( $page->listRows, $page->firstRow )->order('`id` desc')->select(); 
        $this->assign('lists',$lists);
        $this->assign('showPage',$page->show2());
    }

    protected function condition( $where = array() ){
        $filp =  array_filter( I('get.') );
        return array_merge( $filp, $where );
    }

    public function add( $modelName = null )
    {
        $model = $this->getModel( $modelName );
    	$id = I('get.'.$model->getPk(),'intval');
    	$vo = $model->find( $id );
    	$this->assign('vo',$vo);
    	$this->display();
    }

    public function del()
    {
        $model = $this->getModel();
    	$id = I('get.'.$model->getPk());
    	$model->delete( $id );
    	$this->success('操作成功');
    }


    public function save( $modelName = null)
    {
    	$model = $this->getModel( $modelName );
		if( $model->handle() ) {
    		$this->success('操作成功',U('index'));
    	} else {
    		$this->error( $model->getError() ? :'操作失败');
    	}
    }

    /**
     *获取模型，默认为当前控制器名称
     *@param $name string default null 要实例化的模型名称
     *@return object 实例化的模型
     */
    protected function getModel( $name = null )
    {
    	$modelName = ! is_null($name) ? $name : CONTROLLER_NAME ;
    	return D($modelName);
    }

    // 文件上传
    public function upload()
    {
        // $f = current($_FILES);
        // if( 4 != $f['error']) {
            $info = Upload::upload();
            if( ! $info ){
                $error = Upload::getError();
                echo json_encode( array('status'=>2,'error'=>$error) );
            } else {
                $file = array_pop($info);
                $fileName = $file['savepath'] . $file['savename'];
                echo json_encode( array('status'=>1,'fileName'=>$fileName));
            }
        // }
    }

    public function _empty()
    {
        tourl('index');
    }
}
