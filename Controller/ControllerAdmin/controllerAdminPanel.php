<?php
Class controllerAdminPanel{
                public static function ListPupil(){
                    $arr = modelAdminPanel::getListPupil();
                    include_once 'viewAdmin/ListPupil.php';
                }
                public static function AddPupil(){
                    $arr = modelAdminpanel::getAddPupil();
                    include_once 'viewAdmin/AddPupil.php';
                }
}	
?>