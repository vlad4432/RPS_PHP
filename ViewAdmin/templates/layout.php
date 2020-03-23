<link rel="stylesheet" type="text/css" href="Public/style.css">

<h2>Админ панель!!</h2>
<a href="./">Выйти!</a><br>
<input type="file" name="" value="">
<h1>Меню</h1>
<div>
    <h2>Меню Админа</h2>
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