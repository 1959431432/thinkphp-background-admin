<?php 
namespace Home\Model;

/**
 * 签到模型 
 */
class DaysModel extends CommonModel
{
	public function sign()
	{
		// $data['addtime'] = mktime( 0, 0, 1, date('m',NOW_TIME), date('d',NOW_TIME), date('Y',NOW_TIME ) );
		$data['addtime'] = mktime( 0, 0, 1, date('m',NOW_TIME), date('d',NOW_TIME) , date('Y',NOW_TIME ) );
		$data['uid']	 = UID;
		$vo = $this->where($data)->find();
		if( ! empty( $vo ) ){
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
}

 ?>