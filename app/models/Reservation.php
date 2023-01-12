
<?php

class Reservation extends database{
    function __construct() { }

    function getTotal(){
        $sql = "SELECT COUNT(`id_reserv`) as 'count' FROM `reservation`";
        $stmt=$this->openConnection()->query($sql);
        $res=$stmt->fetch(PDO::FETCH_ASSOC);
        return $res['count'];
    }

    function reserver($id_croisiere,$prix,$id_chambre){
        $sql = "INSERT INTO `reservation`(`id_client`, `id_croisiere`, `date_reserv`, `prix_reserv`, `id_chambre`) VALUES (:id_client,:id_croisiere,:date_reservation,:prix,:id_chambre)";
        $stmt=$this->openConnection()->prepare($sql);
        $id_client=$_SESSION['id'];
        $date_reservation=date("Y/m/d");
        $stmt->bindParam(':id_client',$id_client);
        $stmt->bindParam(':id_croisiere',$id_croisiere);
        $stmt->bindParam(':date_reservation',$date_reservation);
        $stmt->bindParam(':prix',$prix);
        $stmt->bindParam(':id_chambre',$id_chambre);
        $stmt->execute();
        return true;
    }

    function getMyreservation($id_client){
        $sql = "SELECT c.id_croisiere, r.id_reserv, c.nom as 'nom_crois', n.nom as 'nom_nav', `image`, `nbr_nuit`, p.nom as 'port_dep', p.pays , `date_depart`,t.type ,ch.prix FROM `croisiere` c inner JOIN navire n on c.id_navire=n.id_n inner join port p on p.id_p=c.port_depart inner join reservation r on r.id_croisiere=c.id_croisiere inner join chambre ch on ch.id_ch=r.id_chambre inner join type_chambre t on t.id_t=ch.id_t and r.id_client=:id_client";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':id_client',$id_client);
        $stmt->execute();
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    function deleteReservation($id_reservation){
        $sql = "DELETE FROM `reservation` WHERE id_reserv=:id_reservation";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':id_reservation',$id_reservation);
        if($stmt->execute()){
            return true;
        }
    }
    
}
    













