<?php
ob_start();
?>

<?php 
//echo '<pre>';
//print_r($_SESSION);
//echo '</pre>';
echo 'Ваш статус: '.$_SESSION['Status']['NameStatus'].'<br>';
echo '<a href="./">Выход</a>';
echo '<div>';
echo '<h2>Ваше имя: '.$_SESSION['NameP'].'</h2>';
echo '<input type="file" name="">';
echo '</div>';

//Меню
echo '<div>';

echo '</div>';
?>

<?php
$content=ob_get_clean();

include_once 'View/Templates/layout.php';
?>
