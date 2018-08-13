<?php

Class SiteController{
	
	public function actionIndex($headerPage = 1){
		
		$imagesList = Galery::getRecentWorks();
		$servicesList = Service::getServicesList();
		$slidesList = Slide::getSlidesList();	     
		
		include_once ROOT . '/views/site/index.php';
		return true;
	}	
}

?>