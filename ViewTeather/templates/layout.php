<link rel="stylesheet" type="text/css" href="Public/style.css">


<div class="PanelAdmin">
    <h2>Учитель</h2>
    <a href="./">Выйти!</a><br>
    <div class="Art_Profile">
        <input type="file" name="" value="">
    </div>
    
</div>

<div class="NavAdmin">
    <h2>Меню</h2>
    <a href="Home_Page">Главная</a><br>
</div>

<div class="Content_Admin">
        <?php 
        if(isset($content_Tether)){
            echo $content_Tether;
        }
        ?>
</div>