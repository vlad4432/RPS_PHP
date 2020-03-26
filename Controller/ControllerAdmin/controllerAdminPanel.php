<?php
Class controllerAdminPanel{
                public static function ListPupil(){
                    $arr = modelAdminPanel::getListPupil();
                    include_once 'viewAdmin/ListPupil.php';
                }
                public static function AddPupil(){
                    $arr = modelAdminPanel::getAddPupil();
                    include_once 'viewAdmin/AddPupil.php';
                }
               /*Попытка сделать удаление*/
                public static function DeletePupil(){
                    $arr = modelAdminpanel::getDeleteUser();
                    include_once 'viewAdmin/ListPupil.php';
                }
}	
?>