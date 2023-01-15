<?php

namespace App;

class Redirection
{
    public static function redirection($url){
        if($url){
            header("location: $url");
        }
        else{
            header("location: index.php");
        }

    }
}