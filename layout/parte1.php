<?php
session_start();
$email_sesion = "";
if (isset($_SESSION['sesion_email'])) {
//echo "ha pasado por el login";
    $email_sesion = $_SESSION['sesion_email'];
    $sql = "SELECT * FROM tb_usuarios where email = '$email_sesion'" ;
    $query = $pdo->prepare($sql);
    $query->execute();
    $usuarios = $query->fetchAll(pdo::FETCH_ASSOC);
    foreach ($usuarios as $usuario){
        $id_usuario_sesion = $usuario['id_usuario'];
        $cargo_sesion = $usuario['cargo'];
        $nombre_completo_sesion = $usuario['nombre_completo'];
    }
}else{
// echo "no ha pasado por el login";
   // header( 'location: '.$URL.'/login');
}
?>



<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sistema de veterinario</title>

    <!--libreria de bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--iconos de bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!--JQUERY-->
    <script src="<?php echo $URL;?>/public/js/jquery-3.7.1.min.js"></script>

    <!--styles css-->
    <link rel="stylesheet" href="<?php echo $URL;?>/public/css/style.css">

    <!-- libreria de mensajes sweetalert2-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $URL;?>">
            <img src="https://i.ibb.co/ZN5M5wZ/logo-sin-fondo.png"
                 alt="Logo" width="220" height="80" class="d-inline-block align-text-top">

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link  btn btn-outline-info" aria-current="page" href="<?php echo $URL;?>"><i class="bi bi-house-fill"></i> Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-info" href="<?php echo $URL;?>/reservas.php">Reservar cita</a>
                </li>

            </ul>
            <div class="d-flex" role="search">
                <?php
                if ($email_sesion == ""){
                   // echo "Sin logearse";
                    ?>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle btn btn-outline-info" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Ingresar
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo $URL;?>/login">Iniciar Sesion</a></li>
                                <li><a class="dropdown-item" href="<?php echo $URL;?>/login/registro.php">Registrarme</a></li>
                            </ul>
                        </li>
                    </ul>
                <?php
                }else{
                   // echo "ya paso el login";
                    ?>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle btn btn-outline-info" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $email_sesion;?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo $URL;?>/app/controllers/login/cerrar_sesion.php">Cerrar Sesion</a></li>
                            </ul>
                        </li>
                    </ul>
                <?php
                }
                ?>

                <div>
                </div>
            </div>
</nav>
