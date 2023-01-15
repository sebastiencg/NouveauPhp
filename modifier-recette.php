<?php
require_once("core/App/Redirection.php");
require_once("core/Entity/Post.php");

$id=null;
$titre=null;
$typeRecette=null;
$recette= null;
if(!empty($_POST['titre'])){
    $titre=$_POST['titre'];
}
if(!empty($_POST['recette'])){
    $recette=$_POST['recette'];
}
if(!empty($_POST['typeRecette'])){
    $typeRecette=$_POST['typeRecette'];
}
if (!empty($_POST['id'])){
    if(ctype_digit($_POST['id'])){
        $id=$_POST['id'];
    }
}
if($titre&&$typeRecette&&$recette&&$id){

    $requette = new Entity\Post();
    $requette->constructeur();
    $requette->modifierRecette($id,$titre,$typeRecette,$recette);
}
App\Redirection::redirection("index.php");
