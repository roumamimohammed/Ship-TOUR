<?php

class Navire extends database{
    function __construct() { }

    function gatNavires(){
        $sql = "SELECT `id_n`, `nom`, `nbr_ch`, `nbr_place` FROM `navire`";
        $stmt=$this->openConnection()->query($sql);
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function addnavire($nom,$nbr_ch,$nbr_p){
        $sql = "INSERT INTO `navire`(`nom`, `nbr_ch`, `nbr_place`) VALUES (:nom,:nbr_ch,:nbr_p)";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':nom',$nom);
        $stmt->bindParam(':nbr_ch',$nbr_ch);
        $stmt->bindParam(':nbr_p',$nbr_p);
        if($stmt->execute()){
            return true;
        };
    }

    public function deletenavire($id_navire){
        $sql = "DELETE FROM `navire` WHERE id_n=:id_navire";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':id_navire',$id_navire);
        if($stmt->execute()){
            return true;
        };
    }



}
