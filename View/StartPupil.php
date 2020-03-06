<?php
ob_start();
?>

<?php 
echo '<h3>С возвращением'/*имя пользователья*/.'</h3><br>';
echo '<h1>Ваша страница</h1><br>';
echo '<h4>Ваш статус: статус пользователья</h4>';
//if()
?>




<?php
$content=ob_get_clean();

include_once 'View/Templates/layout.php';
?>
