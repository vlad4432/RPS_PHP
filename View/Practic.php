<?php
ob_start();
?>

<h1>Practic</h1>




<?php
$DiscriptionIteem=ob_get_clean();
include_once 'View/OurItems.php';
?>
