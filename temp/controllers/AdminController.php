<?php

Class AdminController extends AdminBase{
	
	public function actionIndex($headerPage=1){
		
		include_once ROOT . '/views/admin/index.php';
		return true;
	}
	
	public function actionLogin(){
		
		$result = false;
		$errors = false;
		
		$login = self::checkAdminLogInData($_POST['login']);
		$password = self::checkAdminLogInData($_POST['pwd']);
		
		
		$errors = self::logInAdmin($login, $password);
		
		if(!$errors){
			$result = true;
		}
		
		if($result == true){
			self::adminAuth($login);
		}

		
		
		if(isset($_SESSION['lvl'])) 
			Header("Location: /admin/index" );
		return true;
	}
}

?>