<?php


include ('../../../app/config.php');

$codigo = $_POST['codigo'];
$nombre_producto = $_POST['nombre_producto'];
$descripcion = $_POST['descripcion'];
$stock = $_POST['stock'];
$stock_minimo = $_POST['stock_minimo'];
$stock_maximo = $_POST['stock_maximo'];
$precio_compra = $_POST['precio_compra'];
$precio_venta = $_POST['precio_venta'];
$fecha_de_ingreso = $_POST['fecha_de_ingreso'];

$id_usuario = $_POST['id_usuario'];

$nombredelarchivo = date('y-m-d-h-i-s'). $_FILES['file'] ['name'];
$location = "../../../public/img/productos/".$nombredelarchivo;
move_uploaded_file($_FILES['file'] ['tmp_name'], $location);

$sentencia = $pdo->prepare('INSERT INTO tb_productos
(codigo,nombre_producto,descripcion,stock,stock_minimo,stock_maximo,precio_compra,precio_venta,fecha_de_ingreso,imagen,id_usuario, fyh_creacion)
VALUES ( :codigo,:nombre_producto,:descripcion,:stock,:stock_minimo,:stock_maximo,:precio_compra,:precio_venta,:fecha_de_ingreso,:imagen,:id_usuario,:fyh_creacion)');

$sentencia->bindParam(':codigo',$codigo);
$sentencia->bindParam(':nombre_producto',$nombre_producto);
$sentencia->bindParam(':descripcion',$descripcion);
$sentencia->bindParam(':stock',$stock);
$sentencia->bindParam(':stock_minimo',$stock_minimo);
$sentencia->bindParam(':stock_maximo',$stock_maximo);
$sentencia->bindParam(':precio_compra',$precio_compra);
$sentencia->bindParam(':precio_venta',$precio_venta);
$sentencia->bindParam(':fecha_de_ingreso',$fecha_de_ingreso);
$sentencia->bindParam(':imagen',$nombredelarchivo);
$sentencia->bindParam(':id_usuario',$id_usuario);
$sentencia->bindParam(':fyh_creacion',$fechahora);


if ($sentencia->execute()){
    session_start();
    $_SESSION['mensaje'] = "Se registro el producto de la manera correcta en la base de datos";
    $_SESSION['icono'] = 'success';
    header('location: '.$URL. '/admin/productos');
}else{
    session_start();
    $_SESSION['mensaje'] = "Error al registrar en la base de datos";
    $_SESSION['icono'] = 'error';
    header('location: '.$URL. '/admin/productos/create.php');
}