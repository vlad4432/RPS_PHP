<!-- Заголовок title -->
<?php ob_start() ?>
<?php $content_AdminGroupt = ob_get_clean(); ?>
<?php include "viewAdmin/templates/layout.php";?>
<hr>

<div class="container_block">
    <div class="nav_table">
        <a href="Add_Group" class="AdminHerf">Добавить предмет</a>
        <a href="deleate" class="AdminHerf">Удалить предмет</a>
    </div>
    
    <div class="Search">
        <h2>Посик</h2>
        <?php
        echo '<form name="" class="SearchFrom">';
        /*Выбор по Группе*/
            echo 'Группа:<select>';
                foreach ($arrayUser as $user){
                    echo '<option>'.$user['NameU'].' '.$user['SurnameU'].'</option>';
                }
            echo '</select>'; 
            
            /*Выбор по Руководителью*/
            echo 'Руководитель:<select>';
                
            echo '</select>'; 
            
            /*Поиск*/
            echo '<input type="button" name="Search" value="Искать!">';
        echo '</form>';
        
        ?>
    </div>
    
    <table border="1">
    <tr>
        <th>Ид</th>
        <th>Группа</th>
        <th>Предметы</th>
        <th>Рк-овод</th>
        <th>Ученики группы</th>
        <th>Описание</th>
        <th>Действие</th>
    </tr>
    
       <?php 
    
        ?>  
    
    
</table>
    
    
</div>


