<?php
ob_start();
?>

<h1>Добавить группу!</h1>
<form action='add_group' method='POST' class='register_form'>
	<fieldset>
		<legend><h1 class='heading'>Создать группу!</h1></legend>
                <input type="text" name="namegroup" placeholder="Название группы">
                <input type="number" name="numberofstudents" placeholder="Количество ученикое"><br>
                <!--Список учетелей-->
               
                <!--Список предметов-->
                
                <!--Список учеников-->
                
                <textarea name="description" placeholder="Введите описание группы" style="width:70%; height:100px;"></textarea><br>
                
			<input type='submit' name="savegroup" value='Добавить!'><br>
	</fieldset>
	
</form>
<?php
$content_Admin=ob_get_clean();
include_once 'ViewAdmin/templates/layout.php';
?>
