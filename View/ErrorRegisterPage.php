<?php
ob_start();
?>
<?php
echo 'Ошибки в регистрации!';
?>


	

<?php 
$content=ob_get_clean();
include_once 'View/Templates/layout.php';
?>