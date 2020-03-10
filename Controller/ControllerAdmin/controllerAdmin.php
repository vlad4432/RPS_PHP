<?php
class controllerAdmin{

	//error page

	public static function error404(){
		include_once("viewAdmin/error404.php");


	}
	//----------------form
	public static function formLoginSite(){
		include_once "viewAdmin/formAdmin.php";

	}
	//----------------login
	public static function loginAction(){
		$login=false;
		$login=modelAdmin::userAuth();
		if($login==true){
			include_once "viewAdmin/startAdmin.php";
		}else{
			$_SESSION['errorString']= 'Неправельно емаил пользователя или пароль';
			include_once "viewAdmin/formAdmin.php";

		}

	}
	//----------------logout
	public static function logoutAction(){
		modelAdmin::userLogout();
			include_once "viewAdmin/formAdmin.php";
	}
	
}//class
?>