<?php

Class AdminCategoryController extends AdminBase{
	
	public function actionIndex($headerPage){
		
		self::checkAdmin();
		
		$categoriesList = Category::getCategoriesList();
		
		include_once ROOT. '/views/adminCategory/index.php';
		return true;
	}
	
	public function actionEdit($headerPage , $id){
		
		self::checkAdmin();
		
		$category = Category::getCategoryById($id);
		
		if(isset($_POST['save'])){
			$name = $_POST['name'];
			$status = $_POST['status'];
			
			$db = DB::getConnection();
			$sql = "UPDATE category SET"
				 . " name = '$name', "
				 . " status = $status "
				 . " WHERE id = $id";
				 
			if($db->query($sql))
				header('Location: /admin/category/');
		}
	
		if(isset($_POST['cancel'])){
			header('Location: /admin/category/');
		}
		
		include_once ROOT. '/views/adminCategory/edit.php';
		return true;
	}
	
	public function actionDelete($headerPage, $id){
		
		self::checkAdmin();
		
		if(isset($_POST['yes'])){
			Category::deleteCategoryById($id);
			header('Location: /admin/category');
		}

		if(isset($_POST['cancel'])){
			header('Location: /admin/category');
		}
		
		include_once ROOT. '/views/adminCategory/delete.php';
		return true;
	}
	
	public function actionAdd($headerPage){
		
		self::checkAdmin();
		
		if(isset($_POST['save'])){
			$name = $_POST['name'];
			$status = $_POST['status'];
			
			$db = DB::getConnection();
			$sql = "INSERT INTO category(id, name, status) 
					VALUES 
					('', '$name', $status)";
			$db->query($sql);
			
			header('Location: /admin/category');
		}

		
		include_once ROOT. '/views/adminCategory/add.php';
		return true;
	}
}

?>