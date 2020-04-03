<?php
ob_start();
?>
<div style=" border:1px solid red; text-align:center; ">
    <h2>Добро пожаловать Админ!</h2>
</div>


<?php
$content_Admin = ob_get_clean(); 
include_once 'View/Templates/layout.php';?>
<?php include "viewAdmin/templates/layout.php";?>
