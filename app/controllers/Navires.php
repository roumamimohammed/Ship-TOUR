<?php

class Navires extends Controller{
    private $navire;
    function __construct() {
        $this->navire=$this->model('Navire');
    }
    
    public function addnavire(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            extract($_POST);
            if($this->navire->addnavire($nom,$nbr_ch,$nbr_p)==true){
                $_SESSION['notif']="Navire a éte ajouté avec succès";
                header('location:../pages/navire');
                exit();
            }
        }
    }
    public function deletenavire($id_n){
        if($this->navire->deletenavire($id_n)==true){
            $_SESSION['notif']="Navire a éte supprimé avec succès";
            header('location:'.URLROOT.'/pages/navire');
            exit();
        }
    }
}
