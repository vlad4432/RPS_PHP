
<!-- Заголовок title -->
<?php ob_start() ?>
<?php $content = ob_get_clean(); ?>


<h2>Админ панель!!</h2>
<a href="./">Выйти!</a>
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
        <th>Статус</th>
        <th>Группа</th>
        <th>Логин</th>
        <th>Пароль</th>
    </tr>
    <tr>
       <?php 
       foreach ($arrayUser as $user)
        echo '<td>'.$user['idUser'].'</td>';
        echo '<td>'.$user['NameU'].'</td>';
        echo '<td>'.$user['SurnameU'].'</td>';
        ?>  
    </tr>
</table>

