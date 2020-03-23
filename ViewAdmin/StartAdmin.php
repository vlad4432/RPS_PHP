
<!-- Заголовок title -->
<?php ob_start() ?>
<?php $content = ob_get_clean(); ?>
<?php include "viewAdmin/templates/layout.php";?>
<hr>
<a href="Add_Pupil">Добавить пользователья</a>
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
            echo '<td>'.$user['Login'].'</td>';
            echo '<td>'.$user['pass'].'</td>';
            echo '<td>'.$user['RPG_experience'].'</td>';
            echo '<td><a href="Edit_Pupil?u_id='.$user['idUser'].'?u_n='.$user['NameU'].'">Редактировать</a>&brvbar;<a href="">Удалить</a></td>';
       echo '</tr>'; 
       }
        ?>  
    
</table>

