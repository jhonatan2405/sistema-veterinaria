<?php
include ('../../../app/config.php');

$nombre_completo = $_POST['nombre_completo'];
$email = $_POST['email'];
$password  = $_POST['password'];
$password_verify  = $_POST['password_verify'];
$cargo = $_POST['cargo'];

$contador = 0;
$sql = "SELECT * FROM tb_usuarios where email = '$email' ";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(pdo::FETCH_ASSOC);
foreach ($usuarios as $usuario) {
    $contador = $contador + 1;
}
if ($contador > 0) {
    echo "este email ya esta registrado en la base de datos";
}else
    //echo "este email es nuevo";
if ($password == $password_verify) {
    //echo "si son iguales";

    $password = password_hash($password, PASSWORD_DEFAULT);

    $sentencia = $pdo->prepare("INSERT INTO tb_usuarios
                        (nombre_completo, email, password, cargo, fyh_creacion)
                        values (:nombre_completo, :email, :password, :cargo, :fyh_creacion)");

    $sentencia->bindparam('nombre_completo', $nombre_completo);
    $sentencia->bindparam('email', $email);
    $sentencia->bindparam('password', $password);
    $sentencia->bindparam('cargo', $cargo);
    $sentencia->bindparam('fyh_creacion', $fechahora);

    if ($sentencia->execute()){
        echo "Usuario registrado";
        header('location: '.$URL. '/admin/usuarios');
    }else{
        echo "Error al registrar usuario";
    }

}else{
    echo "las contraseñas no son iguales";
}


