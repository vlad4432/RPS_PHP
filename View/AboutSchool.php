<?php
ob_start();
?>
<a href='./' class='back'>
<div class='button_login'>
<p class='back_p'>Назад</p>
</div></a>

<div class='Content_AboutSchool'>

<div class='container_block'><!--главный блок-->
	<div style='border:1px solid red; text-align:center;'>
	<h2>Меню</h2>
		<?php 
		include_once 'View/Templates/navAbout.php';
		?>
	</div>
	<div style=' border:1px solid red; width:95%; margin-left:2.5%; margin-top:2%;'>
	<h2>Контент</h2>
	<?php 
	if(isset($content_About)){
		echo $content_About;
	}
	?>
	</div>

</div><!--главный блок-->
</div>

	

<?php 
$content=ob_get_clean();
include_once 'View/Templates/layout.php';
?>