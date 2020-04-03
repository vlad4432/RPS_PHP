<?php 	

$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host,'/');
$uri = explode('/', $host)[$num];


//Главная страница(Форма вохода)
if($uri == '' OR $uri == 'index.php' OR $uri == 'home'){
		$response = Controller::StartSite();
}
//Обработка входа
elseif($uri == 'login'){
	$response = Controller::LoginUser();
}
//Страница регистрации
elseif($uri == 'register_page'){

	$response = Controller::register_page();
}
//Обработка регистрации
elseif($uri == 'register_result'){
	$response = Controller::register_result();
}
//Добовление пользователья
elseif ($uri == 'Add_Pupil') {
    $response = Controller::AddPupil_Admin();
}
//Список пользователей
elseif ($uri == 'List_Pupil') {
    $response = Controller::ListPupil();
}
//Редактирование пользователья
elseif ($uri == 'Edit_Pupil') {
    $response = Controller::EditPupil();
}
//register_result_admin
elseif($uri == 'register_result_admin'){
	$response = Controller::admin_page();
}



/*Список групп*/
elseif ($uri == 'List_Group') {
    $response = Controller::ListGroupAdmin();
}
/*Добовление группы*/
elseif ($uri == 'Add_Group') {
    $response = Controller::AddGroupAdmin();
}




    //УЧЕНИК
//Главная
elseif ($uri == 'Home_Page') {
    $response = Controller::Home_Pupil();
    
}















//Страница о школе
elseif($uri == 'schoolAbout'){
	$response = Controller::SchoolAbout();
}
//Предметы
elseif($uri == 'items'){
	$response = Controller::Items();
}
//Предметы(Role Play Basic)
elseif($uri == 'rpb'){
	$response = Controller::RolePlayBasic();
}
//Предметы(Learning The Rules)
elseif($uri == 'ltr'){
	$response = Controller::LearningTheRules();
}
//Предметы(Role Create Character)
elseif($uri == 'rcc'){
	$response = Controller::RoleCreateCharacter();
}
//Предметы(Creation of the Plot)
elseif($uri == 'coftp'){
	$response = Controller::CreationPlot();
}
//Предметы(Role Play Functions)
elseif($uri == 'prf'){
	$response = Controller::RolePlayFunctions();
}
//Предметы(Role differners before and after)
elseif($uri == 'rdbaa'){
	$response = Controller::RoleDiffernersBeforeAndAfter();
}
//Предметы(Practc)
elseif($uri == 'practic'){
	$response = Controller::Practc();
}

//План работы
elseif($uri == 'plans'){
	$response = Controller::Plan();
}




else{
	$response = Controller::Error404();
	
}






?>