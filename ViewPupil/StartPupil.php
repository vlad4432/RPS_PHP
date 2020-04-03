<?php
ob_start();
?>
<div class="ContentPupil">
    <h2>Главная</h2>
    <?php
 
    ?>
</div>


<?php
$content_Pupil=ob_get_clean();
include_once 'View/Templates/layout.php';
include_once 'ViewPupil/templates/layout.php';
?>
