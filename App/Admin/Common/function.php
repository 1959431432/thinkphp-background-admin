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


 ?>