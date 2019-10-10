<?php
include_once('../dao/productoDAO.php');

$action = isset($_POST['action']) ? $_POST['action'] : $_GET['action'];

switch ($action){
    case 'new':
        $id             = $_POST['id'];
        $nombre         = $_POST['nombre'];
        $stock          = $_POST['stock'];
        $descripcion    = $_POST['descripcion'];
        $precio         = $_POST['precio'];
        $imagen         = $_POST['imagen'];
        echo json_encode(productoDAO::nuevoProducto($id,$nombre,$stock,$descripcion,$precio,$imagen));
        break;
    case 'edit':
        $id             = $_POST['id'];
        $nombre         = $_POST['nombre'];
        $stock          = $_POST['stock'];
        $descripcion    = $_POST['descripcion'];
        $precio         = $_POST['precio'];
        $imagen         = $_POST['imagen'];
        echo json_encode(productoDAO::edit($id,$nombre,$stock,$descripcion,$precio,$imagen));
        break;
    case 'remove':
        $id             = $_POST['id'];
        echo json_encode(productoDAO::remove($id));
        break;
    case 'list':
        echo json_encode(productoDAO:: getAll());
        break;
    case 'getById':
            $id             = $_POST['id'];
            echo json_encode(productoDAO::getByID($id));
        break;

}
?>