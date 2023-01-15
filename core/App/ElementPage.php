<?php

namespace App;

class ElementPage
{
    public static function render($templateName,$data){
        extract($data);

        ob_start();
        require_once("template/$templateName.html.php");
        $template=ob_get_clean();
        require_once("template/main-template.html.php");
        echo ob_get_clean();
    }
}