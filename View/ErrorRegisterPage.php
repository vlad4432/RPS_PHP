<?php
ob_start();
?>
<?php
if (isset($errorStrings)){
    $c = $errorStrings;
    if(!$errorStrings=''){
    echo '<div class="error_reg">';
    echo '<h1>Ошибки в регистрации!</h1>';
    echo '<p>'.$c.'</p>';
    echo '<hr>';
    echo '<a href="register_page">Попробовать снова!</a>';
    echo '</div>';   

    }
}
?>


	

<?php 
$content=ob_get_clean();
include_once 'View/Templates/layout.php';
?>