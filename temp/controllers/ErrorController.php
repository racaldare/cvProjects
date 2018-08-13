<?php

Class ErrorController{
	
	public function actionNotfound(){
		
		include_once ROOT . '/views/error/notfound.php';
		return true;
	}
}

?>