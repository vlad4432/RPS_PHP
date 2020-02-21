<?php
ob_start();
?>

<h1>План работы</h1>




<?php
$content_About=ob_get_clean();

include_once 'View/AboutSchool.php';
?>
