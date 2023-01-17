<?php

namespace Entity;

use PdoConn\Connection;

require_once("core/PdoConn/Connection.php");
class AbstractMain extends Connection
{
    protected \PDO $con;
    protected $tableName;

    public function constructeur(){
        $this->con= \PdoConn\Connection::con();
    }
    public function afficherTous(string $precision=null){
        if($precision){
            $sql="SELECT * FROM `$this->tableName`where typeRecette='$precision'";
        }
        else{
            $sql="SELECT * FROM `$this->tableName`";
        }
        $requette=$this->con->query($sql);
        $reponses=$requette->fetchAll();
        return $reponses;
    }

    public function afficher(int $id){
        $sql = "SELECT * FROM `recette` WHERE id=:id";
        $requette = $this->con->prepare($sql);
        $requette->execute([
            "id" => $id
        ]);
        $reponse=$requette->fetch();
        return $reponse;
    }
     public function afficherCommentaire(int $id){
         $sql="SELECT * FROM `$this->tableName` WHERE id_recette=:id";
         $requette=$this->con->prepare($sql);
         $requette->execute([
             "id"=>$id
         ]);
         $reponses=$requette->fetchAll();
         return $reponses;
     }
    public function delete($id){
        $sql="DELETE FROM `$this->tableName` WHERE id=:id";
        $requette=$this->con->prepare($sql);
        $requette->execute([
            "id"=>$id
        ]);
    }


}