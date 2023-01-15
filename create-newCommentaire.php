<?php
require_once("core/Entity/Commentaire.php");
require_once("core/App/Redirection.php");

$commentaire = null;
$id_recette = null;

if (!empty($_POST['commentaire'])) {
    $commentaire = $_POST['commentaire'];
}
if (!empty($_POST['id_recette'])) {
    if (ctype_digit($_POST['id_recette'])){
        $id_recette = $_POST['id_recette'];
    }
}
if ($id_recette && $commentaire) {

    $requette=new Entity\commentaire();
    $requette->constructeur();
    $requette->Addcommentaire($id_recette,$commentaire);

}
App\Redirection::redirection("info.php?id=$id_recette");
