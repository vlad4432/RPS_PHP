<?php 
ob_start();


if(!isset($result)){
    echo 'Ответ тоже есть!';
	if($result == true){
            echo 'Ответ тоже 1!';
		?>
		<div>
		<strong>Пользователь добавлен!</strong><a href="./">Войти</a>
		</div>
<?php
	}
else if($result[0]==false){
?>	
<div><strong>Ошибка!</strong><?php echo $result[1][1]; ?>Пройдите повторную регистрацию:<a href="register_page">Регистрация</a></div>
<?php
}
				}		
$content = ob_get_clean();?>
<?php
include_once 'View/Templates/layout.php';
?>

