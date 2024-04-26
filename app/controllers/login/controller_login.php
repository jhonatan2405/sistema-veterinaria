<?php

include ('../../config.php');

// Obtiene el correo electrónico y la contraseña enviados desde el formulario.
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
    $_SESSION['sesion email'] = $email;
    header( 'location: '.$URL.'/admin');
}else{
    echo "error al digitar los datos";
    header( 'location: '.$URL.'/login');
}
