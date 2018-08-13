<?php

	Class Service{
		
		public static function getServicesList(){
			
			$db = DB::getConnection();
			$sql = 'SELECT * FROM service';
			$result = $db->query($sql);
			$servicesList = array();
			
			$i = 0;
			while($row = $result->fetch()){
				$servicesList[$i]['id'] = $row['id'];
				$servicesList[$i]['title'] = $row['title'];
				$servicesList[$i]['short_description'] = $row['short_description'];
				$servicesList[$i]['description'] = $row['description'];
				$servicesList[$i]['img'] = $row['img'];
				$i++;
			}
			
			return $servicesList;
		}
		
		public static function getServiceById($id){
			
			$db = DB::getConnection();
			$sql = 'SELECT * FROM service WHERE id = ' .$id;
			$result= $db->query($sql);
			
			return $row = $result->fetch();
		}
		
		public static function getImageIconList(){
			
			$db = DB::getConnection();
			$sql = 'SELECT * FROM icon_image';
			$result = $db->query($sql);
			$iconImageList = array();
			
			$i = 0;
			while($row = $result->fetch()){
				$iconImageList[$i]['id'] = $row['id'];
				$iconImageList[$i]['name'] = $row['name'];
				$i++;
			}
			
			return $iconImageList;
			
		}
		
	}

?>