<?php

class Port extends database{
    function __construct() { }


    function getPorts(){
        $sql = "SELECT `id_p`, `nom`, `pays` FROM `port`";
        $stmt=$this->openConnection()->query($sql);
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    function addport($nom,$pays){
        $sql = "INSERT INTO `port`(`nom`, `pays`) VALUES (:nom,:pays)";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':nom',$nom);
        $stmt->bindParam(':pays',$pays);
        if($stmt->execute()){
            return true;
        };
    }

    function deleteport($id_p){
        $sql = "DELETE FROM `port` WHERE id_p=:id_p";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':id_p',$id_p);
        if($stmt->execute()){
            return true;
        };
    }

}