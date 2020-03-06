<?php

class Controller{
	
	//login form
	public function StartSite(){
		include_once 'View/StartPage.php';
	}
	//StartPageSchool
	public function Schools(){
		include_once 'View/AboutSchool.php';
	}
	public function SchoolAbout(){
		include_once 'View/AboutSchools.php';
	}
	public function Items(){
		include_once 'View/Ouritems.php';
	}
	public function RolePlayBasic(){
		include_once 'View/RolePlayBasic.php';
	}
	public function LearningTheRules(){
		include_once 'View/LearningTheRules.php';
	}
	public function RoleCreateCharacter(){
		include_once 'View/RoleCreateCharacter.php';
	}
	public function CreationPlot(){
		include_once 'View/CreationPlot.php';
	}
	public function RolePlayFunctions(){
		include_once 'View/RolePlayFunctions.php';
	}
	public function RoleDiffernersBeforeAndAfter(){
		include_once 'View/RoleDiffernersBeforeAndAfter.php';
	}
	public function Practc(){
		include_once 'View/Practic.php';
	}
	public function Plan(){
		include_once 'View/Plan.php';
	}
	
	public function LoginUser(){
		$logIn = model::getLoginUser(); 
               // echo $login.'Работает';
               echo 'nenekf'.$logIn;
		if($logIn == 'Admin'){
			include_once 'View/StartPupil.php';
		}else{
			$_SESSION['errorString']= 'Неправельно введен пользователя или пароль!';
                        echo $_SESSION['errorString'];
                        header("Location: index.php");
                        exit;
		}
	}
	
	
	//register form
	public function register_page(){
		include_once 'View/RegisterPage.php';
		
	}
	
	
	
	public function register_result(){
            echo 'Маршрут есть!';
		$register_result=model::getRegister_result();
                //print_r($register_result);
		if($register_result[0]== 1){
                    //echo $register_result[0];
		include_once 'View/answerRegister.php';//ok register
		}else{
			include_once 'View/ErrorRegisterPage.php';//false register
		}
	}
	public function Error404(){
		include_once 'View/Error.php';
	}
	
	
	
	
}
?>