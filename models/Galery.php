<?php

class Galery{
	
	const SHOW_BY_DEFAULT = 6;
	
	public static function getImagesList($count = self::SHOW_BY_DEFAULT, $page){
		
		$page = intval($page);
		$offset = ($page-1) * $count;
		
		$db = DB::getConnection();
		$sql = 'SELECT * FROM image WHERE status = 1 ORDER BY id DESC'
			 . ' LIMIT ' .$count
			 . ' OFFSET ' . $offset;
		$imagesList = array();
		$result = $db->query($sql);
		
		$i =0;
		while($row = $result->fetch() ){
			$imagesList[$i]['id'] = $row['id'];
			$imagesList[$i]['title'] = $row['title'];
			$imagesList[$i]['short_title'] = $row['short_title'];
			$imagesList[$i]['description'] = $row['description'];
			$imagesList[$i]['short_description'] = $row['short_description'];
			$imagesList[$i]['count'] = $row['count'];
			$i++;
		}
		
		return $imagesList;
	}
	
	public static function getImageById($id){
		
		$db = DB::getConnection();
		$sql = 'SELECT * FROM image WHERE id =' . $id . ' AND status = 1 ';
		$row = $db->query($sql);
		
		return $row->fetch();
	}
	
	public static function getImageCategories(){
		
		$db = DB::getConnection();
		$sql = 'SELECT * FROM category WHERE status = 1 ';
		$categories = array();
		$result = $db->query($sql);

		$i = 0;
		while($row = $result->fetch()){
			$categories[$i]['id'] = $row['id'];
			$categories[$i]['name'] = $row['name'];
			$i++;	
		}
		return $categories;
	}
	
	public static function getRecentWorks($count = 6){
		
		$db = DB::getConnection();
		$sql = 'SELECT * FROM image WHERE status = 1 AND recent = 1 LIMIT ' . $count;
		$recentWorksList = array();
		$result = $db->query($sql);
		
		$i = 0;
		while($row = $result->fetch()){
			$recentWorksList[$i]['id'] = $row['id'];
			$recentWorksList[$i]['title'] = $row['title'];
			$recentWorksList[$i]['short_title'] = $row['short_title'];
			$recentWorksList[$i]['description'] = $row['description'];
			$recentWorksList[$i]['short_description'] = $row['short_description'];
			$recentWorksList[$i]['count'] = $row['count'];
			$i++;	
		}
		
		return $recentWorksList;
	}
	
	public static function getSimilarWorks($category_id){
		
		$db = DB::getConnection();
		$sql = 'SELECT * FROM image WHERE status = 1 AND category_id = ' . $category_id . ' ORDER BY id DESC '
			 . 'LIMIT 5';
		$similarWorks = array();
		$result = $db->query($sql);
		
		$i = 0;
		while($row = $result->fetch()){
			$similarWorks[$i]['id'] = $row['id'];
			$similarWorks[$i]['title'] = $row['title'];
			$similarWorks[$i]['short_title'] = $row['short_title'];
			$similarWorks[$i]['description'] = $row['description'];
			$similarWorks[$i]['short_description'] = $row['short_description'];
			$similarWorks[$i]['count'] = $row['count'];
			$i++;				
		}
		
		return $similarWorks;
	}
	
		/**
		* Get total images
		**/
		public static function getTotalImages(){
				$db = Db::getConnection();
				
				$result = $db->query('SELECT count(id) AS count FROM image '
								   . 'WHERE status="1"'
				);
				$row = $result->fetch();
				
				return $row['count'];
		}
		
		public static function changeImageById($imgBlock, $img){
			
			move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/template/img/galery/' . $imgBlock . '/' . $img . '.jpg');
		}
		
		public static function deleteImageById($imgBlock, $img){
			
			$db = DB::getConnection();
			$sql = 'SELECT count FROM image WHERE id = ' . $imgBlock;
			$result = $db->query($sql);
			$row = $result->fetch();
			$count = $row['count'];
			
			if($count == 1){
				unlink( $_SERVER['DOCUMENT_ROOT'] . '/template/img/galery/' . $imgBlock . '/' . $img . '.jpg');
				$sql = 'UPDATE image SET count = 0 WHERE id = ' . $imgBlock;
				$db->query($sql);
				
				return true;
			}
			
			unlink( $_SERVER['DOCUMENT_ROOT'] . '/template/img/galery/' . $imgBlock . '/' . $img . '.jpg');
			
			for($i = $img; $i < $count; $i++){
				$next = $i+1;
				rename(ROOT . '/template/img/galery/' . $imgBlock . '/' . $next . '.jpg', ROOT . '/template/img/galery/' . $imgBlock . '/' . $i . '.jpg');
			}
			
			$count--;
			
			$sql = 'UPDATE image SET count = ' . $count . ' WHERE id = ' . $imgBlock;
			$db->query($sql);
			
			return true;
		}
		
		public static function addImageToBlock($id){
			$db = DB::getConnection();
			$sql = 'SELECT count FROM image WHERE id = ' . $id;
			$result = $db->query($sql);
			$row = $result->fetch();
			$count = $row['count']+1;
			
			move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/template/img/galery/' . $id . '/' . $count . '.jpg');
			$sql = 'UPDATE image SET count = ' . $count . ' WHERE id = ' . $id;
			$db->query($sql);
			
			return true;
		}
	
}

?>