<?php

class Ports extends Controller{
    private $port;
    function __construct() {
        $this->port=$this->model('Port');
    }
    
    public function addport(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            extract($_POST);
            if($this->port->addport($nom,$pays)){
                $_SESSION['notif']="Port a éte ajouté avec succès";
                header('location:../pages/port');
                exit();
            }
        }
    }


    public function deleteport($id_p){
        if($this->port->deleteport($id_p)==true){
            $_SESSION['notif']="Port a éte supprimé avec succès";
            header('location:'.URLROOT.'/pages/port');
            exit();
        }
    }
}
