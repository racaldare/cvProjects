<?php

Class Category{
	
	public static function getCategoriesList(){
		
			$db = DB::getConnection();
			$sql = 'SELECT * FROM category';
			$result = $db->query($sql);
			$categoriesList = array();
			
			$i = 0;
			while($row = $result->fetch()){
				$categoriesList[$i]['id'] = $row['id'];
				$categoriesList[$i]['name'] = $row['name'];
				$categoriesList[$i]['status'] = $row['status'];
				$i++;
			}
			
			return $categoriesList;
	}
	
	public static function getCategoryById($id){
		
		$db = DB::getConnection();
		$sql = 'SELECT * FROM category WHERE id = ' .$id;
		$result = $db->query($sql);
		
		return $result->fetch();
	}
	
	public static function deleteCategoryById($id){
		
		$db = DB::getConnection();
		$sql = 'DELETE FROM category WHERE id = ' .$id;
		
		return $db->query($sql);
	} 
}

?>