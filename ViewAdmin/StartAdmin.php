
<!-- Заголовок title -->
<?php ob_start() ?>
<?php $content = ob_get_clean(); ?>


<h2>Админ панель!!</h2>
<a href="./">Выйти!</a><br>
<input type="file" name="" value="">
<?php include "viewAdmin/templates/layout.php";?>
<hr>
<table border="1">
    <tr>
        <th>Ид</th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Пол</th>
        <th>Телефон</th>
        <th>Е-майл</th>
        <th>Логин</th>
        <th>Пароль</th>
        <th>Опыт</th>
        <th>Взаимодействие</th>
    </tr>
    
       <?php 
       foreach ($arrayUser as $user){
        echo '<tr>';
            echo '<td>'.$user['idUser'].'</td>';
            echo '<td>'.$user['NameU'].'</td>';
            echo '<td>'.$user['SurnameU'].'</td>';
            echo '<td>'.$user['GenderU'].'</td>';
            echo '<td>(+372)'.$user['TelephoneU'].'</td>';
            echo '<td>'.$user['E-psotU'].'</td>';
            echo '<td>'.$user['login'].'</td>';
            echo '<td>'.$user['password'].'</td>';
            echo '<td>'.$user['RPG_experience'].'</td>';
            echo '<td><a href="Edit_Pupil">Редактировать</a>&brvbar;<a href="">Удалить</a></td>';
       echo '</tr>'; 
       }
        ?>  
    
</table>

