<?php

class ServicesController{
	
	public function actionIndex($headerPage = 1){
		
		$servicesList = Service::getServicesList();
		
		include_once ROOT . '/views/services/index.php';
		return true;
	}
}
?>