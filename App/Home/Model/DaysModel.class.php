<?php 
namespace Home\Model;

/**
 * 签到模型 
 */
class DaysModel extends CommonModel
{
	public function sign()
	{
		$data = $this->condition();
		$hasSign = $this->hasSign();
		if( $hasSign ){
			$this->error = '今日已签到，请勿重复签到';
			return false;
		} else {
			if( $this->create( $data ) && $this->add() ){
				return true;
			} else {
				$this->error = '签到失败，请联系客服';
				return false;
			}
		}
	}

	public function condition( $where = array() )
	{
		$data['addtime'] = mktime( 0, 0, 1, date('m',NOW_TIME), date('d',NOW_TIME) , date('Y',NOW_TIME ) );
		$data['uid']	 = UID;
		return array_merge( $where, $data );
	}

	public function hasSign()
	{
		$data = $this->condition();
		$vo   = $this->where($data)->count();
		return ! empty( $vo ) ? true : false;
	}
}

 ?>