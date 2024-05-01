<?php
include ('../../../app/config.php');

$nombre_completo = $_POST['nombre_completo'];
$email = $_POST['email'];
$password  = $_POST['password'];
$password_repetido  = $_POST['password_repetido'];

$cargo = "CLIENTE";

$contador = 0;
$sql = "SELECT * FROM tb_usuarios where email = '$email' ";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(pdo::FETCH_ASSOC);
foreach ($usuarios as $usuario) {
    $contador = $contador + 1;
}
if ($contador > 0) {
    //echo "este email ya esta registrado en la base de datos";
    session_start();
    $_SESSION['mensaje'] = "Este email ".$email." ya esta registrado en la base de datos";
    $_SESSION['icono'] = 'error';
    header('location: '.$URL. '/login/registro.php');
}else
    //echo "este email es nuevo";
    if ($password == $password_repetido) {
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
            session_start();
            $_SESSION['mensaje'] = "Se registro correctamente";
            $_SESSION['icono'] = 'success';

            $email = $_POST["email"];
            $password = $_POST["password"];

// Prepara una consulta SQL para seleccionar los usuarios con el correo electrónico proporcionado.
            $sql = "SELECT * FROM `tb_usuarios` WHERE email = '$email' " ;
// Ejecuta la consulta y obtiene todos los usuarios que coinciden.
            $query = $pdo->prepare($sql);
            $query->execute();
            $usuarios = $query->fetchAll(pdo::FETCH_ASSOC);

// Inicializa un contador para contar el número de usuarios encontrados.
            $contador = 0;
            foreach ($usuarios as $usuario) {
                $contador = $contador + 1;
                $password_tabla = $usuario['password'];
            }
            $hash = $password_tabla;
            if( ($contador > 0) && (password_verify($password, $hash))){
                echo "Bienvenido al sistema";
                session_start();
                $_SESSION['sesion_email'] = $email;
                header( 'location: '.$URL.'/');
            }else{
                echo "error al digitar los datos";
                header( 'location: '.$URL.'/login');
            }


        }else{
            session_start();
            $_SESSION['mensaje'] = "Error al registrar usuario";
            $_SESSION['icono'] = 'error';
            header('location: '.$URL. '/login/registro.php');
        }

    }else{
        //echo "las contraseñas no son iguales";
        session_start();
        $_SESSION['mensaje'] = "Las contraseñas no coinciden";
        $_SESSION['icono'] = 'error';
        header('location: '.$URL. '/login/registro.php');
    }