<?php


class model{
	//login read form data, query in database, control data
	//$test-true - ok login, false --no login
	public static function getLoginUser(){
                $logIn = FALSE;
		if(isset($_SESSION['sessionId'])){
			
                        //echo $logIn;
		}
		else{
			//$logIn = false;
			if(isset($_POST['send'])){
                            //echo 'Есть!';
//                            echo '<pre>';
//                            print_r($_POST);
//                            echo $_POST['username'];
//                            echo $_POST['password']
//                            echo '</pre>';
				if(isset($_POST['login']) && isset($_POST['password']) && $_POST['login']!="" && $_POST['password']!=""){
                                   // echo 'и тут есть!';
                                        $username = filter_input(INPUT_POST, 'login');
					$email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
					$password = filter_input(INPUT_POST, 'password');
                                       // echo 'Пароль: '.$password;
                                      // echo 'Хеш: '. password_hash($password);
					$sql = 'SELECT * FROM `user` WHERE `login` = "'.$username.'"';
                                        //echo $sql;
					$db = new db();
					$item = $db->getOne($sql);
                                       // echo '<pre>';
                                        //print_r($item);
                                        //echo '</pre>';
					if($item!=null){
                                                
						$loginUsername = strtolower($_POST['login']);
						$password = $_POST['password'];
                                                //echo 'Pass DataBase: '.$item['Pass'];
                                               // echo 'Hash: '. password_hash($password,PASSWORD_DEFAULT);
                                                //if($loginUsername = $item['Login'] && password_verify($password, $item['Pass'])){
						if($loginUsername = $item['Login'] && (base64_encode($password) == $item['Pass'])){
                                                    $logIn = true;
                                                   // echo '<pre>';
                                                    //print_r($item);
                                                    //echo '</pre>';
							$_SESSION['sessionId'] = session_id();
							$_SESSION['userId'] = $item['idUser'];
							$_SESSION['name'] = $item['Login'];
							$_SESSION['status'] = $item['idStatus'];
						}
                                                  else {
                                                     $logIn = FALSE;
                                                 }
					}
                                      
				}
                                //include_once 'View/answerRegister.php';
			}
		}
		//!!!!!
               // echo $logIn;
		return $logIn;
                
	}
//        public static function getPassUser(){
//            if(isset($_SESSION['sessionId'])){
//			$passLogin = true;
//                        echo $passLogin;
//		}
//        }

        

        //register -  read form date, write in databse
		public static function getRegister_result(){
                    //echo 'Тут!';
		$controll=array(0=>false, 1=>'error');
		if(isset($_POST['save'])){//Сохранение
                    
                  //  echo '<pre>';
                    //print_r($_POST);
                   // echo '</pre>';
                    
			$errorString = "";
			$nameuser = $_POST['login'];//поле Логин
			$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
                         //echo 'Работает';
			if(!$email){
				$errorString.="Неправильный email<br />";
			}//Проверка поля почты
			$password = $_POST['password'];//поле пароль
			$confirm = $_POST['confirm'];//повтор паролья
			if(!$password || !$confirm || mb_strlen($password) <6 ){
				$errorString.="Пароль должен быть больше 6 символов<br />";
			}//поле пароль
			if($password!=$confirm){
				$errorString.="Пароли не совпадают!";
			}//поле пароль
                        
                        $name = $_POST['NameP'];//Имя человека
                        $Surename = $_POST['SuernameP'];
                        $Gender = $_POST['GenderU'];
                        $Telephone = $_POST['Telephone'];
                        $Email = $_POST['email'];
                        $XPrp = $_POST['xprp'];
                        $Status = $_POST['idStatus'];
                        //echo '<pre>';
                        //print_r($_POST);
                       // echo '</pre>';
         
                        //echo ' хм.... ';
			if(!mb_strlen($errorString)==0){
				//$passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                                $passwordHash = base64_encode($_POST['password']);
				//$sql="INSERT INTO `user` ('idUser','NameU', 'E-psotU', 'Pass') VALUES (NULL, '$name', '$email','$passwordHash', '$nameuser', '$password')";
                                $sql="INSERT INTO `user` (idUser, NameU, SurnameU, `GenderU`, TelephoneU,`E-psotU`,Pass, Login, RPG_experience, idStatus) VALUES (NULL, '$name', '$Surename', '$Gender', '$Telephone', '$Email','$XPrp', '$passwordHash', '$nameuser', '$Status')";
				echo $sql;
                                $db = new db();
				$item = $db->executeRun($sql);
                               // echo '<br>Ну такое'.$item;
					if($item){
                                            
						$controll = array(0=>true);
					}else{
						$controll = array(0=>false, 1=>'error');
					}
			} else {
                            echo 'Что то не так!';
                        }
			
		}
		else{
			$controll = array(0=>false, 1=>$errorString);
		}
		return $controll;

	}
        public static function getSelectGender(){
            $sql = "SELECT `GenderU` FROM `user`";
            $db = new db();
            $resultGender = $db->getAll($sql);
            return $resultGender;
            
        }

        public static function getSelectStatus(){
            $sql = "SELECT * FROM `status` WHERE `NameStatus`!='Admin'";
            //echo $sql;
            $db = new db();
           // $item = $db->executeRun($sql);
           $result = $db->getAll($sql);
           return $result;
            //print_r($result);
        }
        public static function getUsers(){
            $sql = "SELECT * FROM `user`";
            //echo $sql;
            $db = new db();
           // $item = $db->executeRun($sql);
           $result = $db->getAll($sql);
           return $result;
        }
	
	
	
}

?>