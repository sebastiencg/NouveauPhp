<?php
require_once("core/App/Redirection.php");
require_once("core/App/ElementPage.php");
require_once("core/Entity/Post.php");
require_once("core/Entity/Commentaire.php");
$id = null;

if (ctype_digit($_GET['id'])) {
    $id = $_GET['id'];
    $requette=new Entity\Post();
    $requette->constructeur();
    $reponse=$requette->afficher($id);

//-----for commmentaire-----------

    $requette=new Entity\commentaire();
    $requette->constructeur();
    $reponses=$requette->afficherCommentaire($id);

    App\ElementPage::render("info-template",[
        "reponse"=>$reponse,
        "reponses"=>$reponses
    ]);
}
else {
    App\Redirection::redirection("index.php");
}
