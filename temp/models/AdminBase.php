<?php

abstract class AdminBase{
	public static function checkAdmin($lvl = 1){
		
		if($_SESSION['lvl'] >= $lvl){
			return true;
		}
		
		die('Acces denied');
	}
	
	public static function checkAdminLogInData($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data, ENT_QUOTES);
		
		return $data;
	}
	
	public static function logInAdmin($login, $password){
		
		$db = DB::getConnection();
		$sql= "SELECT * FROM admin WHERE login = '$login'";
		
		$result = $db->query($sql);
		$row = $result->fetch();
		
		if(is_array($row) ){
			if($row['password'] == $password)
			{
				return false;
			} else{
				return 'Не верный пароль';
			}
		}else{
			return 'Не верный логин!';
		}
		
	}
	
	public static function adminAuth($login){
		
		$db = DB::getConnection();
		$sql= "SELECT * FROM admin WHERE login = '$login'";
		
		$result = $db->query($sql);
		$row = $result->fetch();
		
		$_SESSION['id'] = $row['id'];
		$_SESSION['login'] = $row['login'];
		$_SESSION['lvl'] = $row['lvl'];
	}
	
	
}

?>