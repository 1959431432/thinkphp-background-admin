<?php 

// 跳转
function tourl( $url ){
	return redirect( U( $url ) );
}


// status 返回文字
function statusTitle( $integral, $group = ''){
	switch ( $group ) {
		/*
		case '':
			return 1 == $integral ? '开启' : '禁用';
			break;
		*/
		default:
			return 1 == $integral ? '开启' : '关闭';
			break;
	}
}

// 获取用户等级标题
function getUserGroupTitle( $level ){
	return getUserGroup( $level, 'title' );
}

// 获取用户帐号
function getUsername( $uid )
{
	return M('User')->getFieldById( $uid, 'username' );
}

// 获取用户等级图片
function getUserImg( $uid )
{
	$level = M('user')->getFieldById( $uid, 'level' );
	return getUserGroup( $level,'img');
}


// 获取用户等级
function getUserGroup( $level, $field = null ){
	$group =  M('group')->where('integral<='.$level)->order('integral desc')->find();
	if( $field === null ){
		return $group;
	} else {
		return $group[ $field ];
	}
}

// 获取分组名称
function getGroupTitle( $id )
{
	return M('group')->getFieldById( $id, 'title' );
}

// 获取对应分组下的活动
function getActivityByIntegral( $integral )
{
	return M('activity')->where(array( 'integral'=>$integral ) )->order('`order` desc')->select();
}

// 获取图片
function getImg( $img )
{
	return __ROOT__ . '/' . C('UPLOAD_CONFIG.rootPath') . $img;
}

// 获取分组下的用户人数
function getGroupUserCount( $groupid )
{
	$where = getGroupUserCondition( $groupid );
	return M('User')->where( $where )->count();
}

// 获取分组下的会员条件
function getGroupUserCondition( $groupid )
{
	$group = M('group')->field('integral')->find($groupid);
	$nextGroup = D('group')->where('integral > ' . $group['integral'])->field('integral')->find();
	if( ! empty( $nextGroup ) ){
		$where['level'] = array( 'between', array( $group['integral'], $nextGroup['integral']-1 ) );
	} else {
		$where['level'] = array('gt',$group['integral']);
	}
	return $where;
}

function dd( $prem ) {
	dump( $prem );
	exit();
}

function gbk2utf8($string){
	return iconv('gb2312', 'utf-8', $string );
}

 ?>