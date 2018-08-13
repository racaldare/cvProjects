<?php

Class AdminGaleryController extends AdminBase{
	
	public function actionIndex($headerPage=2, $page = 1){
		
		self::checkAdmin();
		
		$imagesList = array();
		$imagesList = Galery::getImagesList(Galery::SHOW_BY_DEFAULT, $page);
		
		$total = Galery::getTotalImages();
		
		$pagination = new Pagination($total, $page, Galery::SHOW_BY_DEFAULT, '');
		
		include ROOT . '/views/adminGalery/index.php';
		return true;
	}
	
	public function actionView($headerPage=2,$id){
		
		self::checkAdmin();
		
		$image = Galery::getImageById($id);
		
		include ROOT . '/views/adminGalery/view.php';
		return true;
	}
	
	public function actionEdit($headerPage=2, $imgBlock, $img){
		
		self::checkAdmin();
		
		
		if(isset($_POST['yes']) ){
			if(is_uploaded_file($_FILES['image']['tmp_name']) ){
				Galery::changeImageByID($imgBlock, $img);
			}
		}
		
		include ROOT . '/views/adminGalery/edit.php';
		return true;
	}
	
	public function actionDelete($headerPage=2, $imgBlock, $img){
		
		self::checkAdmin();
		
		if(isset($_POST['yes'])){
			Galery::deleteImageByID($imgBlock, $img);
			header('Location: /admin/galery/view/' . $imgBlock);
		}
		
		if(isset($_POST['cancel'])){
			header('Location: /admin/galery/view/' . $imgBlock);
		}
		include ROOT . '/views/adminGalery/delete.php';
		return true;
	}
	
	public function actionAdd($headerPage, $imgBlock){
		
		self::checkAdmin();
		
		if(isset($_POST['yes'])){
			Galery::addImageToBlock($imgBlock);
			header('Location: /admin/galery/view/' . $imgBlock);
		}
		
		include_once ROOT . '/views/adminGalery/add.php';
		return true;
	}
}

?>