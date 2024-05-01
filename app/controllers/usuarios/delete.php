<?php
include ('../../../app/config.php');

$id_usuario = $_POST['id_usuario'];



$sentencia = $pdo->prepare("DELETE FROM tb_usuarios WHERE id_usuario = '$id_usuario' ");

if ($sentencia->execute()){
    session_start();
    $_SESSION['mensaje'] = "Se elimino al usuario de la manera correcta en la base de datos";
    $_SESSION['icono'] = 'success';
    header('location: '.$URL. '/admin/usuarios');
}else{
    session_start();
    $_SESSION['mensaje'] = "Error no se pudo eliminar al usuario en la base de datos";
    $_SESSION['icono'] = 'error';
    header('location: '.$URL. '/admin/usuarios');
}


