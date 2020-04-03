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
    <a href="register_result_admin">Список пользователей</a><br>
    <a href="List_Group">Список групп</a><br>
    <a href="List_Subject">Список предметов</a><br>
    <a href="List_Plots">Список сюжетов</a><br>
    <a href="List_Grades">Список оценок</a><br>
</div>

<div class="Content_Admin">
        <?php 
        if(isset($content_Admin)){
            echo $content_Admin;
        }
        ?>
</div>