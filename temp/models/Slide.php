<?php

Class Slide{
	
	public static function getSlidesList(){
		
			$db = DB::getConnection();
			$sql = 'SELECT * FROM slide WHERE status = 1';
			$result = $db->query($sql);
			$slidesList = array();
			
			$i = 0;
			while($row = $result->fetch()){
				$slidesList[$i]['id'] = $row['id'];
				$slidesList[$i]['title'] = $row['title'];
				$slidesList[$i]['description'] = $row['description'];
				$i++;
			}
			
			return $slidesList;
	}
	
	public static function getSlideById($id){
			$db = DB::getConnection();
			$sql = 'SELECT * FROM slide WHERE id = ' .$id;
			$result= $db->query($sql);
			
			return $row = $result->fetch();
	}
	
	public static function deleteSlideById($id){
		
		$db = DB::getConnection();
		$sql = 'DELETE FROM slide WHERE id = ' .$id;
		$result = $db->query($sql);
		
		unlink($_SERVER['DOCUMENT_ROOT']. '/template/img/slides/' .$id. '.jpg');
		
		return $result;
	}
}

?>