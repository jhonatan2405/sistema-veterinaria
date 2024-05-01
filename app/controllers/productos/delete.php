<?php

include ('../../../app/config.php');

$id_producto = $_POST['id_producto'];



$sentencia = $pdo->prepare("DELETE FROM tb_productos WHERE id_producto = '$id_producto' ");

if ($sentencia->execute()){
    session_start();
    $_SESSION['mensaje'] = "Se elimino el producto de la manera correcta en la base de datos";
    $_SESSION['icono'] = 'success';
    header('location: '.$URL. '/admin/productos');
}else{
    session_start();
    $_SESSION['mensaje'] = "Error no se pudo eliminar el producto en la base de datos";
    $_SESSION['icono'] = 'error';
    header('location: '.$URL. '/admin/productos');
}