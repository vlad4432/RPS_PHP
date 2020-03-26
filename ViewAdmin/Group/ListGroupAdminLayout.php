<?php ob_start() ?>
<?php $content = ob_get_clean(); ?>
<?php include "viewAdmin/templates/layout.php";?>
<hr>

<div class="container_block">
    <div class="nav_table">
        <a href="" class="AdminHerf">Добавить группу</a>
        <a href="" class="AdminHerf">Изменить группу</a>
        <a href="" class="AdminHerf">Удалить группу</a>
    </div>
    
    <div>
        <?php 
        if(isset($content_AdminGroup)){
            echo $content_AdminGroup;
        }
        ?>
    </div>
    
    
</div>


