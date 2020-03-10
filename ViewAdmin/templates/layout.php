<h1>Меню</h1>
<div class="Nav_Admin">
    <a href="List_Pupil">Список пользовательей!</a> ||
    <a href="Add_Pupil">Добавить пользователья!</a> ||
    <a href="Rename_Pupil">Редактировать пользователья!</a> ||
    <a href="Deleate_Pupil">Удалить(Заблокировать) пользователья!</a> ||
</div>
<div class="Content_Admin">
        <?php 
        if(isset($content_Admin)){
            echo $content_Admin;
        }
        ?>
</div>