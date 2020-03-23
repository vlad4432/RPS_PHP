<?php
ob_start();
?>

<?php 
echo '<h3>С возвращением</h3><br>';
echo '<a href="./">Выйти!</a>';
echo '<h1>Ваша страница</h1><br>';
    echo '<h4>Ваше Имя:'.$arrayUser.['NameP'].'</h4>';


echo '<h4>Ваш Телефон: телефон пользователья</h4>';
echo '<h4>Ваш Е-майл: почта пользователья</h4>';
//if()
?>

<div class="NavPupil">
    <h2>Меню</h2>
    <?php 

    ?>   
</div>
<hr>
<div class="ContentPupil">
    <h2>Контент</h2>
    <?php
    
    ?>
</div>


<?php
$content=ob_get_clean();

include_once 'View/Templates/layout.php';
?>
