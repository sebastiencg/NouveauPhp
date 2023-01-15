<?php

namespace Entity;
require_once("core/Entity/AbstractMain.php");

class Post extends AbstractMain
{
    protected $tableName="recette";

    public function modifierRecette(int $id, string $titre, string $typeRecette,string $recette)
    {
        $sql="UPDATE `$this->tableName` SET `titre`=:titre,`typeRecette`=:typeRecette,`recette`=:recette WHERE id=:id";
        $requette=$this->con->prepare($sql);
        $requette->execute([
            "id"=>$id,
            "titre"=>$titre,
            "typeRecette"=>$typeRecette,
            "recette"=>$recette
        ]);
        return $requette;
    }
    public function deletePoste($id,){
        $sql="DELETE FROM `recette` WHERE id=:id";
        $requette=$this->con->prepare($sql);
        $requette->execute([
            "id"=>$id
        ]);
    }
     public function addPost($titre,$typeRecette,$recette){

         $sql="INSERT INTO `recette`(`titre`, `typeRecette`, `recette`) VALUES (:titre,:typeRecette,:recette)";
         $requette=$this->con->prepare($sql);
         $requette->execute([
             "titre"=>$titre,
             "typeRecette"=>$typeRecette,
             "recette"=>$recette
         ]);
     }

}