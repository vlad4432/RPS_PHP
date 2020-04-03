<?php
ob_start();
?>

<?php 
echo 'Это учитель!';
?>




<?php
$content_Tether=ob_get_clean();

include_once 'ViewTeather/templates/layout.php';
?>
