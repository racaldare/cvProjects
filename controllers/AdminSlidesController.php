<?php

Class AdminSlidesController extends AdminBase{
	
	public function actionIndex($headerPage){
		
		self::checkAdmin();
		
		$slidesList = Slide::getSlidesList();
	
		include_once ROOT. '/views/adminSlides/index.php';
		return true;
	}
	
	public function actionEdit($headerPage, $id){
		
		self::checkAdmin();
		
		$slide = Slide::getSlideById($id);
		
		if(isset($_POST['save'])){
			
			$title = $_POST['title'];
			$description = $_POST['description'];
			$status = $_POST['status'];
			
			$db = DB::getConnection();
			$sql = "UPDATE slide SET"
				 . " title = '$title', "
				 . " description = '$description', "
				 . " status = $status "
				 . " WHERE id = $id";
				 
			if(is_uploaded_file($_FILES['image']['tmp_name'])){
				move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT']. '/template/img/slides/' .$id. '.jpg');
			}
			
			if($db->query($sql)) header('Location: /admin/slides/');
			
		}
		
		include_once ROOT. '/views/adminSlides/edit.php';
		return true;
	}
	
	
	
	
}

?>