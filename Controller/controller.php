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
        
        
        
       //Добовление пользователья
        public function AddPupil_Admin(){
            include_once 'ViewAdmin/Pupil/AddListPupil.php';
        }
        //Список пользователей
        public function ListPupil(){
            include_once 'ViewAdmin/StartAdmin.php';
        }
        //Редактирование пользователья
        public function EditPupil(){
            if(isset($_GET['u_id'])){
                $UserData = model::getUser($_GET['u_id']);
            }
            include_once 'ViewAdmin/Pupil/EditPupil.php';
        }
        /*Список групп*/
        public function ListGroupAdmin(){
            include_once 'ViewAdmin/Group/ListGroup.php';
        }
        /*Добавление группы*/
        public function AddGroupAdmin(){
            include_once 'ViewAdmin/Group/AddListGroup.php';
        }

        






        public function LoginUser(){
		$logIn = model::getLoginUser(); 
              //  echo $logIn;
//                $pass = model::getPassUser();
//                echo $pass;
               // echo $login.'Работает';
               echo $logIn;
                if($logIn){
                    //echo $_SESSION['name'].'<br>';
                    //echo '<pre>';
                    //print_r($_SESSION);
                    //echo '</pre>';
		//if(!$logIn == '' && !$pass == ''){
                    if($_SESSION['status']==1){
                        //echo 'Это админ!';
                        $arrayUser = model::getUsers();
                        echo '<pre>';
                        print_r($arrayUser);
                        echo '</pre>';
                        include_once 'ViewAdmin/WelcomAdmin.php';
                    } 
                    
                    if($_SESSION['status']==2){
                        $arrayTeather = model::getTeather();
                        include_once 'ViewTeather/WelcomTeather.php';
                    }
                    if($_SESSION['status']==3) {
                        $arrayPupil = model::getPupils();
                        include_once 'ViewPupil/WelcomPupil.php';
                    }
		}else{
			$_SESSION['errorString']= 'Неправильно введен пользователя или пароль!';
                        $content=ob_get_clean();
                        //$errorLogin = $_SESSION['errorString'];
                        $errorLogin = 'ошибка авторизации! проверьте логин!';
                        $errorPassword = 'ошибка авторизации! проверьте пароль!';
                        include_once 'View/StartPage.php';
                        //header("Location: index.php");
                        //exit;
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
        
         public function admin_page(){
		$register_result=model::getupdate_user();
                $arrayUser = model::getUsers();
                //print_r($register_result);
		include_once 'ViewAdmin/StartAdmin.php';//ok register	
	}

        public static function SaveGender(){
            $SaveGender = model::getSelectGender();
        }
        
        public function Home_Pupil(){
            
             include_once 'ViewPupil/StartPupil.php';
        }
        
        
        
        
        public function Error404(){
		include_once 'View/Error.php';
	}
	
	
	
	
}
?>