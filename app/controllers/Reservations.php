<?php

class Reservations extends Controller{
    private $croisiere;
    private $chambre;
    private $reservation;

    function __construct() {
        $this->croisiere=$this->model('Croisiere');
        $this->chambre=$this->model('Chambre');
        $this->reservation=$this->model('Reservation');
    }
    
    function show($id_croi){
        if(isset($_SESSION['id']) && $_SESSION['role']==1){
            $data=[
                'croisiere'=>$this->croisiere->getctroisierebyId($id_croi),
                'trajet'=>$this->croisiere->gettrajet($id_croi),
                'chambre'=>$this->chambre->getchambrebyIdCrois($id_croi),
            ];
            $this->view('client/show',$data);
        }
        else{
            header('location:../../pages/login');
            exit();
        }
    }
    function reserver(){
        $id_croisiere=$_POST['id_croisiere'];
        $prix=$_POST['prix'];
        $chambre=$_POST['chambre'];
        if($this->reservation->reserver($id_croisiere,$prix,$chambre)){
            echo 'added';
        }
    }
    

    function getMyreservation(){
        $id_client=$_SESSION['id'];
        $data=$this->reservation->getMyreservation($id_client);
        echo json_encode($data);
    }

    function deleteReservation($id_croisiere){
        if($this->reservation->deleteReservation($id_croisiere))
        {
            $_SESSION['notif']="Reservation a éte supprimé avec succès";
            header('location:../../pages/reservation_client');
            exit();
        }   
    }


    
}