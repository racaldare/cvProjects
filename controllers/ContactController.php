<?php

Class ContactController{
	
	public function actionIndex($headerPage = 1){
		
		include_once ROOT . '/views/contact/index.php';
		return true;
	}
}