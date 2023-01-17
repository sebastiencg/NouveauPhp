<?php
require_once("core/App/Redirection.php");
require_once("core/Entity/Post.php");
$titre=null;
$typeRecette=null;
$recette=null;

if(!empty($_POST['titre'])){
    $titre=$_POST['titre'];
}
if(!empty($_POST['typeRecette'])){
    $typeRecette=$_POST['typeRecette'];
}
if(!empty($_POST['recette'])){
    $recette=$_POST['recette'];
}
if($titre&&$typeRecette&&$recette){

    $date=new DateTime();
    $date=$date->format("d/m/y");
    $heure=new DateTime();
    $heure=$heure->format("H:i");


    $requette= new Entity\Post();
    $requette->constructeur();
    $requette->addPost($titre,$typeRecette,$recette,$date,$heure);

}
App\Redirection::redirection("");