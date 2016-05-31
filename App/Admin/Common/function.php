<?php 


// 网站后台首页统计数据
function backend_statistics( $number ){
	if( $number >  0 ){
		return '<span class="positive">+'. round( $number, 2) .'%</span>';
	} else if( $number < 0 ){
		return '<span class="negative">'. round( $number, 2) .'%</span>';
	} else{
		return '<span class="zero">0.0%</span>';
	}
}

// 后台统计数据
function counts_default_number( $today, $yesterday )
{
	$sum = intval($today) - intval($yesterday);
	if( empty( $yesterday ) ){
		$yesterday = 1;
	}
	return ($sum / $yesterday * 100);
}


/*==========================================
 －－－－－－－－－－－分组－－－－－－－－－－－－
 ==========================================*/


// 获取分组下的用户人数
function getGroupUserCount( $groupid )
{
	return D('User')->getGroupUserCount( $groupid );
}


 ?>