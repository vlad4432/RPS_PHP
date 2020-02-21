<?php
ob_start();
?>

<a href='./' class='back'><div class='button_login'>
<p class='back_p'>Назад</p>
</div></a>
<form action='register_result' method='POST' class='register_form'>
	<fieldset>
		<legend><h1 class='heading'>Регистрация!</h1></legend>
			<input type='text' name='NameP' placeholder='Введите ваше Имя' title="Тут должно быть строго только Имя">
			<input type='text' name='SuernameP' placeholder='Введите вашу Фамилию' title="Тут должно быть строго только Фамилию">
                        <select name="" title="Выбери пол">
                            <option>Не выбранно</option>
                            <option>М</option>
                            <option>Ж</option>
                        </select>
                        <input type="text" name="Telephone" placeholder="Введите ваш телефон" title="">
			<input type='email' name='email' placeholder='Введите вашу почту' title="Тут должна быть строго только почта">
                        <select name="StatusSelect" title="Выбери статус">
                            <option>Не выбранно</option>
                            <?php 
                            $result = model::getSelectStatus();
                            foreach ($result as $res){
                                echo '<option>'.$res['NameStatus'].'</option>';
                            }
                            ?>
                           
                        </select>
			<input type='text' name='login' placeholder='Введите ваш логин' title="Тут должен быть строго только лониг">
			<input type='password' name='password' placeholder='Введите ваш пароль' title="Тут должно быть строго только пароль">
			<input type='password' name='confirm' placeholder='Повторите ваш пароль' title="Тут должно быть строго только пароль">
                        <input type='number' name='xprp' placeholder='Введите ваш опыт ' title="Тут должно быть строго только пароль">
			<input type='submit' name="save" value='GO'><br>
	</fieldset>
	
</form>

<?php 
$content=ob_get_clean();
include_once 'View/Templates/layout.php';
?>