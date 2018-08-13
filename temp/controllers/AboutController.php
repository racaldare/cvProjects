<?php

Class AboutController{
	
	public function actionIndex($headerPage = 1){
		
		include_once ROOT . '/views/about/index.php';
		return true;
	}
}
?>