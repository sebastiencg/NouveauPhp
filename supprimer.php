<?php
require_once("core/Entity/Post.php");
require_once("core/App/Redirection.php");
$id=null;
if (!empty($_GET['id'])){
    if(ctype_digit($_GET['id'])){
        $id=$_GET['id'];

        $requette=new Entity\Post();
        $requette->constructeur();
        $requette->deletePoste($id);
    }
}
App\Redirection::redirection("");
