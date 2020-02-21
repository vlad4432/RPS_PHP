<?php
ob_start();
?>
<div class='container_' style=' width:100%; border:1px solid purple;'><!--Контейнер-->
<h1>Наши предметы</h1>
<nav style='border:1px solid gray; width:15%; margin-left:0.4%; float:left; '>
<a href='rpb'>Role play basic</a><br>
<a href='ltr'>Learning the rules</a><br>
<a href='rcc'>Role create character</a><br>
<a href='coftp'>Creation of the plot</a><br>
<a href='prf'>Role Play Functions</a><br>
<a href='rdbaa'>Role differners before and after</a><br>
<a href='practic'>Practic</a><br>
</nav>
<div style='border:1px solid purple; width:83%; margin-left:16%;'><!--Контент-->
<?php 
if(isset ($DiscriptionIteem)){echo $DiscriptionIteem;}
?>
</div><!--Контент-->

</div><!--Контейнер-->



<?php
$content_About=ob_get_clean();
include_once 'View/AboutSchool.php';
?>
