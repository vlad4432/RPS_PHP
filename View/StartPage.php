<?php
ob_start();
?>
<head>
<title>Hello!</title>
</head>
<div class="block_slogan">
    <p>&quot;Школа ролевых игр. Ваш успех – наша работа.&quot;</p>	
</div>
<form action='login' method='POST'>
	<h1 class='heading'>Вход!</h1>
        <input type='text' name='login' placeholder='Логин' title="Введите ваш логин"><br>
	<input type='password' name='password' placeholder='Пароль' title="Введите ваш пароль"><br> 
	<input type='submit' name='send' value='Войти' class='ButtonLogin'title="Нажмите что бы войти"><br>
	<a href='register_page' title="Нажмите что бы зарегистрироваться">Регистрация</a><br>
	<a href='schoolAbout' title="Нажмите что бы почиать о нас">О школе</a><br>
</form>
<?php
if (isset($errorLogin)){
    $a = $errorLogin;
    if(!$errorLogin=''){
    echo '<div class="Error_login">';
    echo '<p>'.$a.'</p>';
   // var_dump($errorLogin);
    echo '</div>';   

    }
}


$content=ob_get_clean();
?>
<?php 
include_once 'View/Templates/layout.php';
 ?>	