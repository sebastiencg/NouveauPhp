<?php
require_once("core/App/Redirection.php");
$id=null;
$id_recette=null;
if(!empty($_GET['id_recette'])){
    require_once("core/Entity/Commentaire.php");
    $requette=new Entity\commentaire();
    $id_recette=$_GET['id_recette'];
}
if (empty($_GET['id_recette'])){
    require_once("core/Entity/Post.php");
    $requette=new Entity\Post();
}
if (!empty($_GET['id'])){
    if(ctype_digit($_GET['id'])){
        $id=$_GET['id'];


        $requette->constructeur();
        $requette->delete($id);
    }
}
if($id_recette){

    App\Redirection::redirection("info.php?id=$id_recette");
}
App\Redirection::redirection("info.php?id=$id_recette");