<?php
require_once("core/App/ElementPage.php");
require_once("core/Entity/Post.php");

$id = null;

if (ctype_digit($_GET['id'])) {
    $id = $_GET['id'];

    $requette= new Entity\Post();
    $requette->constructeur();
    $reponse=$requette->afficher($id);

    App\ElementPage::render("modifier-recette-template",[
        "reponse"=>$reponse
    ]);
}

