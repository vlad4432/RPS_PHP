<link rel="stylesheet" type="text/css" href="Public/style.css">


<div class="PanelAdmin">
    <h2>Админ панель!!</h2>
    <a href="./">Выйти!</a><br>
    <div class="Art_Profile">
        <input type="file" name="" value="">
    </div>
    
</div>

<div class="NavAdmin">
    <h2>Меню Админа</h2>
    <a href="List_Pupil">Список пользователей</a><br>
    <a href="List_Group">Список групп</a><br>
    <a href="">Список предметов</a><br>
    <a href="">Список оценок</a><br>
</div>

<div class="Content_Admin">
        <?php 
        if(isset($content_Admin)){
            echo $content_Admin;
        }
        ?>
</div>