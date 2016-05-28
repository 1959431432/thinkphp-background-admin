<?php 


// 用户经验奖励
function reward( $int = 2 )
{
	D("User")->reward( $int, UID );
}

// 统计
function web_count( $filed )
{
	D('counts')->subjoin( $filed );
}




 ?>