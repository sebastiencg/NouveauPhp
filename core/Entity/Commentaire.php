<?php

namespace Entity;

require_once("core/Entity/AbstractMain.php");

class commentaire extends AbstractMain
{
    protected $tableName="commentaire-recettte";

    public function Addcommentaire($id_recette,$commentaire){

        $sql = "INSERT INTO `commentaire-recettte`(`commentaire`, `id_recette`) VALUES (:commentaire,:id_recette)";
        $requette = $this->con->prepare($sql);
        $requette->execute([
            "commentaire" => $commentaire,
            "id_recette" => $id_recette
        ]);
    }
}