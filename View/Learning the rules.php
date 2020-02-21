<?php
ob_start();
?>

<h1>Learning the rules</h1>



<?php
$DiscriptionIteem=ob_get_clean();
include_once 'View/OurItems.php';
?>
