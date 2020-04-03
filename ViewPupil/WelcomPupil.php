<?php
ob_start();
?>
<div style=" border:1px solid red; ">
    <h2>Добро пожаловать!</h2>
</div>


<?php
$content_Pupil=ob_get_clean();
include_once 'View/Templates/layout.php';
include_once 'ViewPupil/templates/layout.php';
?>
