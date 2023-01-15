<?php

namespace PdoConn;

class Connection
{
    public static function con():\PDO
    {
        $adresseServeurMySQL = "localhost";
        $nomDeDatabase = "blog";
        $username = "bloggy";
        $password = "]LhDx@cl6[0tZhxT";

        $conn= new \PDO("mysql:host=$adresseServeurMySQL;dbname=$nomDeDatabase",$username,$password,
            [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
            ]);
        return $conn;
    }
}