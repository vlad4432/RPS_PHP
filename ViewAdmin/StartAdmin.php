
<!-- Заголовок title -->
<?php ob_start() ?>
<?php $content = ob_get_clean(); ?>
<h2>Админ панель!!</h2>
<a href="./">Выйти!</a>
<?php include "viewAdmin/templates/layout.php";
