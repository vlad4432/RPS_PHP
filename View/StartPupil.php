<?php
ob_start();
?>

<?php 
//echo '<pre>';
//print_r($_SESSION);
//echo '</pre>';
echo 'Ваш статус: '.$_SESSION['Status']['NameStatus'];
echo 'Ваша страница';
?>

<?php
$content=ob_get_clean();

include_once 'View/Templates/layout.php';
?>
