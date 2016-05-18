<?php 
namespace Common\Model;
use Think\Model;
/**
* 
*/
class BaseModel extends Model
{
	public function handle()
	{
		$condition = I('post.'.$this->getPk(),null);

		if( ! $this->create() ){
			return false;
		}

		if( ! $condition ) {
			return $this->add() ? true : $this->getError();
		} else {
			$row = $this->save();
			if( $row === 0 || $row ){
				return true;
			} else {
				return false;
			}
		}
	}

	public function clear()
	{
		$tableName = $this->getTableName();
		$clear_sql = "TRUNCATE TABLE " . $tableName;
		M()->query( $clear_sql );
	}
}

 ?>