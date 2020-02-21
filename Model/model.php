<?php


class model{
	//login read form data, query in database, control data
	//$test-true - ok login, false --no login
	public static function getLoginUser(){
		if(isset($_SESSION['sessionId'])){
			$logIn = true;
		}
		else{
			$logIn = false;
			if(isset($_POST['send'])){
				if(isset($_POST['email']) && isset($_POST['password']) && $_POST['email']!="" && $_POST['password']!=""){
					$email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
					$password = filter_input(INPUT_POST, 'password');
					$sql = 'SELECT * FROM `user` WHERE `email` = "'.$email.'"';
					$db = new database();
					$item = $db->getOne($sql);
					if($item!=null){
						$loginEmail = strtolower($_POST['email']);
						$password = $_POST['password'];
						if($loginEmail = $item['email'] && password_verify($password, $item['password'])){
							$_SESSION['sessionId'] = session_id();
							$_SESSION['userId'] = $item['id'];
							$_SESSION['name'] = $item['username'];
							$_SESSION['status'] = $item['status'];
						}
					}
				}
                                include_once 'View/answerRegister.php';
			}
		}
		//!!!!!
		return $logIn;
	}
	
	
	//register -  read form date, write in databse
		public static function getRegister_result(){
                    //echo 'Тут!';
		$controll=array(0=>false, 1=>'error');
		if(isset($_POST['save'])){//Сохранение
                   
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
                        //echo ' хм.... ';
			if(!mb_strlen($errorString)==0){
				$passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
				//$sql="INSERT INTO `user` ('idUser','NameU', 'E-psotU', 'Pass') VALUES (NULL, '$name', '$email','$passwordHash', '$nameuser', '$password')";
                                $sql="INSERT INTO `user` (idUser,NameU,`E-psotU`,Pass, Login, idStatus) VALUES (NULL, '$name', '$email','$passwordHash', '$nameuser', '1')";
				//echo $sql;
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
        public static function getSelectStatus(){
            $sql = "SELECT * FROM `status`";
            $db = new db();
           // $item = $db->executeRun($sql);
           $result = $db->getAll($sql);
           return $result;
            //print_r($result);
        }
	
	
	
}

?>