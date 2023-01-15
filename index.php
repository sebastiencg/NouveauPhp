<?php
require_once("core/App/ElementPage.php");
require_once("core/Entity/Post.php");

$requette= new Entity\Post();
$requette->constructeur();
$reponses=$requette->afficherTous();
App\ElementPage::render("index-template",
    [
        "reponses"=>$reponses
    ]);
