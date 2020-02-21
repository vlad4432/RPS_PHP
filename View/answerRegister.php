<?php 
ob_start();


if(isset($register_result)){
	if($register_result == true){
		?>
		<div>
		<strong>Пользователь добавлен!</strong><a href="./">Войти</a>
		</div>
<?php
	}
else if($register_result[0]==false){
?>	
<div><strong>Ошибка!</strong><?php echo $register_result[1][1]; ?>Пройдите повторную регистрацию:<a href="register_page">Регистрация</a></div>
<?php
}
				}		
$content = ob_get_clean();?>
<?php
include_once 'View/Templates/layout.php';
?>

