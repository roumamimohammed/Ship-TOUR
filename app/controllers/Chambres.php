<?php

class Chambres extends Controller{
    private $chambre;
    function __construct() {
        $this->chambre=$this->model('Chambre');
    }

    function filtreChambre(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $id_nav=$_POST['id_nav'];
            $data=$this->chambre->filtreChambre($id_nav);
            
            echo json_encode($data);
        }
    }
    
    function deletechambre($id_ch){
        if($this->chambre->deletechambre($id_ch)==true){
            $_SESSION['notif']="Chambre a éte supprimé avec success";
            header('location:'.URLROOT.'/pages/chambre');
            exit();
        }
    }
    function addchambre(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            extract($_POST);
            if($this->chambre->addchambre($prix_ch,$type,$id_navire)==true){
                $_SESSION['notif']="Chambre a éte ajouté avec success";
                header('location:'.URLROOT.'/pages/chambre');
                exit();
            }
        }

    }
    

    
}
