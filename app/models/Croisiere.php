<?php

class Croisiere extends database{
    function __construct() { }

    function getcroisiere(){
        $sql = "SELECT `id_croisiere`, c.nom as 'nom_crois', n.nom as 'nom_nav', (select min(prix) from chambre WHERE id_navire = n.id_n) as 'prix', `image`, `nbr_nuit`, p.nom as 'port_dep', p.pays , `date_depart` FROM `croisiere` c inner JOIN navire n on c.id_navire=n.id_n inner join port p on p.id_p=c.port_depart";
        $stmt=$this->openConnection()->query($sql);
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    
    
    function addcroisiere($nom,$id_navire,$image,$nbr_nuit,$port_depart,$date_depart,array $trajet){
        $sql = "INSERT INTO `croisiere`(`nom`,`id_navire`, `image`, `nbr_nuit`, `port_depart`, `date_depart`) VALUES (:nom,:id_navire,:image,:nbr_nuit,:port_depart,:date_depart)";
        $conn=$this->openConnection();
        $stmt=$conn->prepare($sql);
        $stmt->bindParam(':nom',$nom);
        $stmt->bindParam(':id_navire',$id_navire);
        $stmt->bindParam(':image',$image);
        $stmt->bindParam(':nbr_nuit',$nbr_nuit);
        $stmt->bindParam(':port_depart',$port_depart);
        $stmt->bindParam(':date_depart',$date_depart);
        if($stmt->execute()){
            $sql = "SELECT `id_croisiere` FROM `croisiere` order by id_croisiere DESC LIMIT 1";
            $stmt=$conn->query($sql);
            $data=$stmt->fetch(PDO::FETCH_ASSOC);
            for($i=0;$i<count($trajet);$i++){ 
                $this->addtrajet($data['id_croisiere'],$trajet[$i]);
            }
            return true;
        };
    }

    function addtrajet($id_croi,$id_port){
        $sql = "INSERT INTO `trajet`(`id_croisiere`, `id_port`) VALUES (:id_croi,:id_port)";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':id_croi',$id_croi);
        $stmt->bindParam(':id_port',$id_port);
        $stmt->execute();
    }
    
    function gettrajet($id_croi){
        $sql = "select p.nom ,p.pays from port p inner join trajet t on t.id_port=p.id_p and t.id_croisiere=".$id_croi."";
        $stmt=$this->openConnection()->query($sql);
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    

    function filterbymonth($month){
        $sql = "SELECT `id_croisiere`, c.nom as 'nom_crois', n.nom as 'nom_nav', (select min(prix) from chambre WHERE id_navire = n.id_n) as 'prix', `image`, `nbr_nuit`, p.nom as 'port_dep', p.pays , `date_depart` FROM `croisiere` c inner JOIN navire n on c.id_navire=n.id_n inner join port p on p.id_p=c.port_depart where CONCAT(year(c.date_depart),'-',month(c.date_depart))=:month";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':month',$month);
        $stmt->execute();
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    function filterbyport($port){
        $sql = "SELECT `id_croisiere`, c.nom as 'nom_crois', n.nom as 'nom_nav', (select min(prix) from chambre WHERE id_navire = n.id_n) as 'prix', `image`, `nbr_nuit`, p.nom as 'port_dep', p.pays , `date_depart` FROM `croisiere` c inner JOIN navire n on c.id_navire=n.id_n inner join port p on p.id_p=c.port_depart and c.port_depart=:port";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':port',$port);
        $stmt->execute();
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    function filterbynavire($navire){
        $sql = "SELECT `id_croisiere`, c.nom as 'nom_crois', n.nom as 'nom_nav', (select min(prix) from chambre WHERE id_navire = n.id_n) as 'prix', `image`, `nbr_nuit`, p.nom as 'port_dep', p.pays , `date_depart` FROM `croisiere` c inner JOIN navire n on c.id_navire=n.id_n inner join port p on p.id_p=c.port_depart and c.id_navire=:navire";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':navire',$navire);
        $stmt->execute();
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    

    function deletecroisiere($id_croi){
        $sql ="DELETE FROM `croisiere` WHERE id_croisiere=:id_croi";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':id_croi',$id_croi);
        if($stmt->execute()){
            return true;
        }
    }

    function getTotal(){
        $sql = "SELECT COUNT(`id_croisiere`) as 'count' FROM `croisiere`";
        $stmt=$this->openConnection()->query($sql);
        $res=$stmt->fetch(PDO::FETCH_ASSOC);
        return $res['count'];
    }


    function getctroisierebyId($id_croi){
        $sql = "SELECT `id_croisiere`, c.nom as 'nom_crois', n.nom as 'nom_nav', (select min(prix) from chambre WHERE id_navire = n.id_n) as 'prix', `image`, `nbr_nuit`, p.nom as 'port_dep', p.pays , `date_depart` FROM `croisiere` c inner JOIN navire n on c.id_navire=n.id_n inner join port p on p.id_p=c.port_depart WHERE c.id_croisiere=:id_croi";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':id_croi',$id_croi);
        $stmt->execute();
        $data=$stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
}


