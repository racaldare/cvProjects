<?php

Class AdminServicesController extends AdminBase{
	
	public function actionIndex($headerPage=3){
		
		self::checkAdmin();
	
		$servicesList = Service::getServicesList();
	
		include_once ROOT . '/views/adminServices/index.php';
		return true;
	}
	
	public function actionEdit($headerPage = 3, $id){
		
		self::checkAdmin();
		
		$service = Service::getServiceById($id);
		$iconsImageList = Service::getImageIconList();
		
		if(isset($_POST['save'])){
			$title = $_POST['title'];
			$description = $_POST['description'];
			$short_description = $_POST['short_description'];
			$image = $_POST['image'];
			
			$db = DB::getConnection();
			$sql = "UPDATE service SET"
				 . " title = '$title', "
				 . " description = '$description', "
				 . " short_description = '$short_description', "
				 . " img = '$image' "
				 . " WHERE id = $id";
				 
			if($db->query($sql))
				header('Location: /admin/services/');
		}
	
		if(isset($_POST['cancel'])){
			header('Location: /admin/services/');
		}
		
		include_once ROOT. '/views/adminServices/edit.php';
		return true;
	}
	
	public function actionAdd($headerPage = 3){
		
		self::checkAdmin();
		
		$iconsImageList = Service::getImageIconList();
		
		if(isset($_POST['save'])){
			$title = $_POST['title'];
			$description = $_POST['description'];
			$short_description = $_POST['short_description'];
			$image = $_POST['image'];
			
			$db = DB::getConnection();
			$sql = "INSERT INTO service (id, title, description, short_description, img) 
					VALUES 
					('', '$title', '$description', '$short_description', '$image') 
					";
				 
			if($db->query($sql))
				header('Location: /admin/services/');
		}
	
		if(isset($_POST['cancel'])){
			header('Location: /admin/services/');
		}
		
		include_once ROOT. '/views/adminServices/add.php';
		return true;
	}
	
	public function actionDelete($headerPage = 3, $id){
		
		self::checkAdmin();
		
		$iconsImageList = Service::getImageIconList();
		
		if(isset($_POST['yes'])){
			
			$db = DB::getConnection();
			$sql = "DELETE FROM service WHERE id = " .$id;
				 
			if($db->query($sql))
				header('Location: /admin/services/');
		}
	
		if(isset($_POST['cancel'])){
			header('Location: /admin/services/');
		}
		
		include_once ROOT. '/views/adminServices/delete.php';
		return true;
	}
	
}

?>