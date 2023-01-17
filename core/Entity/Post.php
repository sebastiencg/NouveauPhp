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
     public function addPost(string $titre,string $typeRecette,string $recette,string $date,string $heure){

         $sql="INSERT INTO `$this->tableName`(`titre`, `typeRecette`, `recette`,`date`,`heure`) VALUES (:titre,:typeRecette,:recette,:date,:heure)";
         $requette=$this->con->prepare($sql);
         $requette->execute([
             "titre"=>$titre,
             "typeRecette"=>$typeRecette,
             "recette"=>$recette,
             "date"=>$date,
             "heure"=>$heure
         ]);
     }

}