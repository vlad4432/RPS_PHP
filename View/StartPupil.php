<?php
ob_start();
?>

<?php 
echo 'Ваша страница';
?>




<?php
$content=ob_get_clean();

include_once 'View/Templates/layout.php';
?>
