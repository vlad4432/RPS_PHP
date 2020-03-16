<link rel="stylesheet" type="text/css" href="Public/style.css">

<h1>Меню</h1>
<div>
    <h2>Меню Админа</h2>
    <a href="Add_Pupil">Добавить пользователья</a>
    <a href="">Список групп</a>
    <a href="">Список предметов</a>
    <a href="">Список оценок</a>
</div>

<div class="Content_Admin">
        <?php 
        if(isset($content_Admin)){
            echo $content_Admin;
        }
        ?>
</div>