<?php
ob_start();
?>

<h1>Error 404</h1>
<p style='text-align:center;'>Page not found!</p>
<img src='Public/images/error_1.jpg'><br>
<img src='Public/images/error_2.jpg'><br>
<img src='Public/images/error_3.png' width=400px;>



<?php
$content=ob_get_clean();
include_once 'View/AboutSchool.php';
?>
