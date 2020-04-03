<?php
ob_start();
echo '<pre>';
print_r($UserData);
echo '</pre>';
$result = model::getAllStatuses();

?>
<a href='register_result_admin' class='back'><div class='button_login'>
<p class='back_p'>Назад</p>
</div></a>
<h1>Редактирование пользователья!</h1>
<form action='register_result_admin' method='POST' class='register_form'>
	<fieldset>
		<legend><h1 class='heading'>Изменение!</h1></legend>
                <input type='text' name='NameP' value="<?php echo $UserData['NameU'];?>" placeholder='Введите ваше Имя' title="Тут должно быть строго только Имя" required="" >
			<input type='text' name='SuernameP' value="<?php echo $UserData['SurnameU'];?>" placeholder='Введите вашу Фамилию' title="Тут должно быть строго только Фамилию" required="">
                        <select name="Gender" title="Выбери пол" required="">
                            <option>Выбери пол(Не выбранно)</option>
                            
                            <?php 
                            if ($UserData['GenderU'] = 'М'){
                                echo '<option selected>'.М.'</option>';
                                echo '<option>'.Ж.'</option>';
                            }else {
                                echo '<option>'.М.'</option>';
                                echo '<option selected >'.Ж.'</option>';
                                
                            }
                            
                            ?>
                        </select>
                        <input type="tel" name="Telephone" value="<?php echo $UserData['TelephoneU'];?>" placeholder="Введите ваш телефон" title="">
			<input type='email' name='email' value="<?php echo $UserData['E-psotU'];?>" placeholder='Введите вашу почту' title="Тут должна быть строго только почта">
                        <?php
                        //$result = model::getSelectStatus();
                       // print_r($result);
                        ?>
                        
                       <select name="StatusSelect" title="Выбери статус" required="">
                            <option>Выбери статус(Не выбранно)</option>
                            <?php
                            //print_r($result);
                            
                            foreach ($result as $res){
                                
    
                                
                                $idStatus = $res['idStatus'];
                                if($idStatus == $UserData['idStatus']){
                                    
                                    
                                    echo '<option selected>'.$res['NameStatus']. '</option>';
                                } else {
                                    
                                   echo '<option>' .$res['NameStatus'].'</option>'; 
                                }
    
                            }
                            
                               
                            
                            ?>
                        </select>
                        <input type='text' name='idStatus' value="<?php echo $idStatus; ?>" hidden="">
			<input type='text' name='login' value="<?php echo $UserData['Login'];?>" placeholder='Введите ваш логин' title="Тут должен быть строго только лониг" required="">
			<input type='password' name='password' placeholder='Введите ваш пароль' title="Тут должно быть строго только пароль">
			<input type='password' name='confirm' placeholder='Повторите ваш пароль' title="Тут должно быть строго только пароль"> 
                        <input type='number' name='xprp' value="<?php echo $UserData['RPG_experience'];?>" placeholder='Введите ваш опыт ' title="Тут должно быть строго только пароль" required="">
			<input type='submit' name="edit" value='Изменить!'><br>
	</fieldset>
	
</form>
<?php
$content_Admin=ob_get_clean();
include_once 'ViewAdmin/templates/layout.php';
?>
