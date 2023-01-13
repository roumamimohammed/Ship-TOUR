<?php

class Pages extends Controller{
    private $port;
    private $navire;
    private $chambre;
    private $croisiere;
    private $reservation;
    private $user;
    function __construct() {
        $this->port=$this->model('Port');
        $this->navire=$this->model('Navire');
        $this->chambre=$this->model('Chambre');
        $this->croisiere=$this->model('Croisiere');
        $this->reservation=$this->model('Reservation');
        $this->user=$this->model('User');
    }

    /*guest  ----------------------------------------*/
    public function index(){  
        $this->view('index');
    }
    
    public function login(){
        $this->view('login');
    }
    public function inscrire(){
        $this->view('inscrire');
    }
    public function reservation(){
        //get ports
        $data=$this->port->getPorts();
        // //get navires
        $data2=$this->navire->gatNavires();
        $this->view('reservation',$data,$data2);
    }


    /* admin ---------------------------------------- */

    public function admin(){  
        if(isset($_SESSION['id']) && $_SESSION['role']==2){
            $data=[
                'totalUser'=>$this->user->getTotal(),
                'totalCroisiere'=>$this->croisiere->getTotal(),
                'totalReservation'=>$this->reservation->getTotal()
            ];
            $this->view('admin/index',$data);
        }
        else{
            header('location:../pages/login');
            exit();
        }
    }
    public function croisiere(){  
        if(isset($_SESSION['id']) && $_SESSION['role']==2){
            //get ports
            $data1=$this->port->getPorts();
            //get navires
            $data2=$this->navire->gatNavires();
            $data3=$this->croisiere->getcroisiere();
          
            $this->view('admin/croisiere',$data1,$data2,$data3);
           
        }
        else{
            header('location:../pages/login');
            exit();
        }
    }
    
    
    public function port(){  
        if(isset($_SESSION['id']) && $_SESSION['role']==2){
            $data=$this->port->getPorts();
            $this->view('admin/port',$data);
        }
        else{
            header('location:../pages/login');
            exit();
        }
    }
    public function navire(){  
        if(isset($_SESSION['id']) && $_SESSION['role']==2){
            $data=$this->navire->gatNavires();
            $this->view('admin/navire',$data);
        }
        else{
            header('location:../pages/login');
            exit();
        }
    }

    public function chambre(){  
        if(isset($_SESSION['id']) && $_SESSION['role']==2){
            // $data=$this->chambre->getchambrez();
            $data=$this->chambre->getchambre();
            // $this->view('admin/chambre',$data);
            $this->view('admin/chambre',$data);
        }
        else{
            header('location:../pages/');
            exit();
        }
    }

    /* client ---------------------------------------- */
    public function croisiere_client(){  
        if(isset($_SESSION['id']) && $_SESSION['role']==1){
            //get ports
            $data1=$this->port->getPorts();
            //get navires
            $data2=$this->navire->gatNavires();
            $data3=$this->croisiere->getcroisiere();
            $this->view('client/croisiere',$data1,$data2,$data3);
        }
        else{
            header('location:../pages/login');
        }
    }
    
    public function reservation_client(){  
        if(isset($_SESSION['id']) && $_SESSION['role']==1){
            $id_client=$_SESSION['id'];
            $data=$this->reservation->getMyreservation($id_client);
            $this->view('client/reservation',$data);
        }
        else{
            header('location:../pages/login');
        }
    }

    public function logout(){  
        session_destroy();
        header('location:../pages/');
        // exit();
    }
}
