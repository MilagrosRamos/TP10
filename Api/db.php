<?php
class DB{
    public static function Connect(){
        $pdo = new PDO("mysql:host=127.0.0.1;dbname=productos","root","");
        return $pdo;
    }
}

?>