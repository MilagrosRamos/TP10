<?php
include_once('../db.php');
include_once('../Model/producto.php');

class ProductoDAO{
    
    public static function GetAll(){
        $list = array();
        $pdo = DB::Connect();
        $stmt = $pdo->prepare("SELECT * FROM Productos");
        $stmt->execute();
        $arr = $stmt->fetchAll(PDO::FETCH_CLASS, 'Producto');
        return $arr;

    }

    public static function Remove($id){
        $pdo= DB::Connect();
        $query = $pdo -> prepare ("DELETE FROM `productos` WHERE id = " . $id);
        $query -> execute();
        $arr = $query -> fetchAll(PDO:: FETCH_CLASS, 'Producto');
        return $arr;
    }

    public static function Edit($id, $nombre, $descripcion,$imagen, $stock, $precio){
        $pdo= DB::Connect();
        //$query = $pdo -> prepare ("UPDATE productos SET 'id' = " . $id . ", 'nombre' =" . $nombre .", 'descripcion' = " . $descripcion . ", 'imagen' = " . $imagen", 'stock' = ".$stock.", 'precio' = ".$precio);
        $query -> execute();
        $arr = $query -> fetchAll(PDO:: FETCH_CLASS, 'Producto');
        return $arr;
    }
    
    public static function nuevoProducto($nombre, $descripcion,$imagen, $stock, $precio){
        
        try {
            $pdo = DB::Connect();
            $query = "INSERT INTO productos (nombre, descripcion, imagen, stock, precio) VALUES ('$nombre', '$descripcion', '$imagen', '$stock', '$precio')";
            $pdo->exec($query);
            return true;
        }
        catch(PDOException $e) {
            return $e->getMessage();
        }
    }

    public static function getByID($id){
        $pdo= DB::Connect();
        $query = $pdo -> prepare ("SELECT * FROM Productos WHERE id = " . $id);
        $query -> execute();
        $arr = $query -> fetchAll(PDO:: FETCH_CLASS, 'Producto');
        return $arr;
    }
}
?>