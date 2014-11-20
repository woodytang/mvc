<?php 
class newsModel {
	
	public $_table = 'news';
	
	function count() {
		$sql = 'SELECT count(*) from '.$this->_table;
		
		return DB::findSpecific($sql,0,0);
	}
	
	public function getnewsinfo($id) {
			if (empty($id)) {
				return array();
			}else {
				$id = intval($id);
				$sql = 'select * from '.$this->_table.' where id = '.$id;
				return DB::findOne($sql);
			}		  
			
	}
	
	public function addnews() {
			$sql = '';
		  
			
	}
}





 ?>