<?php
require_once("core/Entity/Post.php");
require_once("core/App/ElementPage.php");

$requette= new Entity\Post();
$requette->constructeur();
$reponses=$requette->afficherTous('dessert');

App\ElementPage::render("index-template",[
    "reponses"=>$reponses
]);;
