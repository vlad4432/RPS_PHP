<?php
class Register{
	
	public function registerUser(){
		$controll=array(0=>false, 1=>'error');
		if(isset($_POST['save'])){
			$errorString = "";
			$name = $_POST['name'];
			$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
			if(!$email){
				$errorString.="Неправильный email<br />";
			}
			$password = $_POST['password'];
			$confirm = $_POST['confirm'];
			if(!$password || !$confirm || mb_strlen($password) <6 ){
				$errorString.="Пароль должен быть больше 6 символов<br />";
			}
			if($password!=$confirm){
				$errorString.="Пароли не совпадают!";
			}
			if(mb_strlen($errorString)==0){
				$passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
			
				$sql="INSERT INTO 'user' ('idUser','NameU', 'E-psotU', 'Pass') VALUES (NULL, '$name', '$email','$passwordHash','user', '$user', '$password')";
				$db = new DataBase();
				$item = $db->executeRun($sql);
					if($item){
						$controll = array(0=>true);
					}else{
						$controll = array(0=>faose, 1=>'error');
					}
			}
			
		}
		else{
			$controll = array(0=>false, 1=>$errorString);
		}
		return $controll;
	}
	
}


?>