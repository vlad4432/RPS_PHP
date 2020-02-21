<?php
ob_start();
?>
<div>
<?php
echo 'Error Page';
?>
</div>

	

<?php 
$content=ob_get_clean();
include_once 'View/Templates/layout.php';
?>