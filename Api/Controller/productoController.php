<?php
include_once('../dao/productoDAO.php');

$action = isset($_POST['action']) ? $_POST['action'] : $_GET['action'];

switch ($action){
    case 'new':
        agregarProducto($_POST['nombre'], $_POST['descripcion'], $_POST['imagen'], $_POST['stock'], $_POST['precio']);
        break;
    case 'edit':
        modificarProducto($_POST['id'],$_POST['nombre'], $_POST['descripcion'], $_POST['imagen'], $_POST['stock'], $_POST['precio']);
        break;
    case 'remove':
        eliminarProducto($_POST['id']);
        break;
    case 'list':
        echo json_encode(productoDAO:: getAll());
        break;
    case 'getById':
            getByID($_POST['id']);
        break;
}

function agregarProducto($nombre, $descripcion, $imagen, $stock, $precio) {
    $result = productoDAO::nuevoProducto($nombre, $descripcion, $imagen, $stock, $precio);
    echo $result;
}

function eliminarProducto($id){
    $result = productoDAO::remove($id);
    echo $result;
}

function modificarProducto($id,$nombre,$stock,$descripcion,$precio,$imagen){
    $result = productoDAO::edit($id,$nombre,$stock,$descripcion,$precio,$imagen);
    echo $result;
}

function getByID($id){
    $result = productoDAO::getById($id);
    echo $result;
}

?>