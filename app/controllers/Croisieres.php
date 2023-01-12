<?php

class Croisieres extends Controller{
    private $croisiere;
    function __construct() {
        $this->croisiere=$this->model('Croisiere');
    }

    function addcroisiere(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            extract($_POST);
            $image=$_FILES['image']['name'];
            $trajet=$_POST['check_navire'];
            if($this->croisiere->addcroisiere($nom,$id_navire,$image,$nbr_nuit,$port_depart,$date_depart,$trajet)){
                $_SESSION['notif']="Croisière a éte ajouté avec succès";
                header('location:../pages/croisiere');
                exit();
            };
        }
    }

    function getcroisiere(){
        $data=$this->croisiere->getcroisiere();
        echo json_encode($data);
    }

    function gettrajet(){
        $id_croi=$_POST['id_croi'];
        $data=$this->croisiere->gettrajet($id_croi);
        echo json_encode($data);
    }

    //filter by month 
    function filterbymonth(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $month=$_POST['month'];
            $data=$this->croisiere->filterbymonth($month);
            echo json_encode($data);
        }
    }

    //filter by port 
    function filterbyport(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $port=$_POST['port'];
            $data=$this->croisiere->filterbyport($port);
            echo json_encode($data);
        }
    }

    //filter by navire 
    function filterbynavire(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $navire=$_POST['navire'];
            $data=$this->croisiere->filterbynavire($navire);
            echo json_encode($data);
        }
    }

     //delete croisiere 
    function deletecroisiere($id_croi){
        if($this->croisiere->deletecroisiere($id_croi)){
            header('location:../../pages/croisiere');
            exit();

        }
    }

    
}
