<?php
ob_start();
?>

<h1>Редактирование пользователья!</h1>
<form action='register_result' method='POST' class='register_form'>
	<fieldset>
		<legend><h1 class='heading'>Изменение!</h1></legend>
                <input type='text' name='NameP' placeholder='Введите ваше Имя' title="Тут должно быть строго только Имя" required="">
			<input type='text' name='SuernameP' placeholder='Введите вашу Фамилию' title="Тут должно быть строго только Фамилию" required="">
                        <select name="Gender" title="Выбери пол" required="">
                            <option>Выбери пол(Не выбранно)</option>
                            <option>М</option>
                            <option>Ж</option>
                        </select>
                        <input type="tel" name="Telephone" placeholder="Введите ваш телефон" title="">
			<input type='email' name='email' placeholder='Введите вашу почту' title="Тут должна быть строго только почта">
                        <?php
                        $result = model::getSelectStatus();
                       // print_r($result);
                        ?>
                        <select name="StatusSelect" title="Выбери статус" required="">
                            <option>Выбери статус(Не выбранно)</option>
                            <?php
                            //print_r($result);
                            foreach ($result as $res){
                                echo '<option>'.$res['NameStatus'].'</option>';
                                $idStatus = $res['idStatus'];
                                
                            }
                            ?>
                        </select>
                        <input type='text' name='idStatus' value="<?php echo $idStatus; ?>" hidden="">
			<input type='text' name='login' placeholder='Введите ваш логин' title="Тут должен быть строго только лониг" required="">
			<input type='password' name='password' placeholder='Введите ваш пароль' title="Тут должно быть строго только пароль" required="">
			<input type='password' name='confirm' placeholder='Повторите ваш пароль' title="Тут должно быть строго только пароль" required=""> 
                        <input type='number' name='xprp' placeholder='Введите ваш опыт ' title="Тут должно быть строго только пароль" required="">
			<input type='submit' name="save" value='Добавить!'><br>
	</fieldset>
	
</form>
<?php
$content_Admin=ob_get_clean();
include_once 'ViewAdmin/templates/layout.php';
?>
