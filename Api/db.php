<?php
class DB{
    public static function Connect(){
        $pdo = new PDO("mysql:host=localhost;dbname=productos","root","");
        return $pdo;
    }
}

?>