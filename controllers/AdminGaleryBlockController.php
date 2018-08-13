<?php

Class AdminGaleryBlockController extends AdminBase{
	
	public function actionEdit($headerPage = 2, $id){
	
		self::checkAdmin();
	
		$image = Galery::getImageById($id);
		$categories = Galery::getImageCategories();
		
		if(isset($_POST['save'])){
			
			$title = $_POST['title'];
			$short_title = $_POST['short_title'];
			$short_description = $_POST['short_description'];
			$description = $_POST['description'];
			$recent = $_POST['recent'];
			$category = $_POST['category'];
			$status = $_POST['status'];
			
			$db = DB::getConnection();
			$sql = "UPDATE image SET"
				 . " title = '$title', "
				 . " short_title = '$short_title', "
				 . " description = '$description', "
				 . " short_description = '$short_description', "
				 . " recent = $recent, "
				 . " category_id = $category, "
				 . " status = $status "
				 . " WHERE id = $id";
			
			if($db->query($sql)) header('Location: /admin/galery/');
			
		}
	
		if(isset($_POST['cancel']))
			header('Location: /admin/galery/view/' . $id);
		include_once ROOT . '/views/adminGaleryBlock/edit.php';
		return true;
	}
	
	public function actionDelete($headerPage = 2, $id){
		
		self::checkAdmin();
		
		if(isset($_POST['yes'])){
			$db = DB::getConnection();
			$sql = 'SELECT count FROM image WHERE id = ' . $id;
			$result = $db->query($sql);
			$row = $result->fetch();
			$count = $row['count'];

			for($i = $count; $i>=1; $i--){
				Galery::deleteImageByID($id, $i);
			}
			
			rmdir('template/img/galery/' .$id);
			$sql = 'DELETE FROM image WHERE id = ' .$id;
			$db->query($sql);
			
			header('Location: /admin/galery/');
		}
		
		if(isset($_POST['cancel']))
			header('Location: /admin/galery/');
		
		include_once ROOT . '/views/adminGaleryBlock/delete.php';
		return true;
	}
	
	public function actionAdd($headerPage=2){
		
		self::checkAdmin();
		
		$categories = Galery::getImageCategories();
		
		if(isset($_POST['save'])){
			$title = $_POST['title'];
			$short_title = $_POST['short_title'];
			$short_description = $_POST['short_description'];
			$description = $_POST['description'];
			$recent = $_POST['recent'];
			$category = $_POST['category'];
			$status = $_POST['status'];
			
			$db = DB::getConnection();
			$sql = "INSERT INTO image (id, title, short_title, description,
					short_description, count, status, recent, category_id) 
					VALUES 
					('', '$title', '$short_title', '$description', '$short_description', 0,
					$status, $recent, $category) 
					";
				 
			$db->query($sql);

			$sql = 'SELECT id FROM image WHERE status = 1 ORDER BY id DESC';
			$result = $db->query($sql);
			$row = $result->fetch();
			$id = $row['id'];
			mkdir(ROOT . '/template/img/galery/' .$id);
			
			if(is_uploaded_file($_FILES['image']['tmp_name']))
			{
				Galery::addImageToBlock($id);
			}
			
			header('Location: /admin/galery/');
		}
		
		include_once ROOT . '/views/adminGaleryBlock/add.php';
		return true;
	}
	
}

?>