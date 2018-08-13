<?php

class GaleryController{
	
	public function actionIndex($headerPage = 1, $page = 1){
		
		$imagesList = array();
		$imagesList = Galery::getImagesList(6, $page);
		
		$total = Galery::getTotalImages();
		
		$pagination = new Pagination($total, $page, Galery::SHOW_BY_DEFAULT, '');
		
		include_once ROOT . '/views/galery/index.php';
		return true;
	}
	
	public function actionView($id, $headerPage = 1, $idPhoto = 1){
		
		$image = Galery::getImageById($id);
		$similarWorks = Galery::getSimilarWorks($image['category_id']);
		
		include_once ROOT . '/views/galery/view.php';
		return true;
	}
}

?>