<?php

include ('../../../app/config.php');

$nombre_producto = $_POST['nombre_producto'];
$descripcion = $_POST['descripcion'];
$stock = $_POST['stock'];
$stock_minimo = $_POST['stock_minimo'];
$stock_maximo = $_POST['stock_maximo'];
$precio_compra = $_POST['precio_compra'];
$precio_venta = $_POST['precio_venta'];
$fecha_de_ingreso = $_POST['fecha_de_ingreso'];
$id_producto = $_POST['id_producto'];
$imagen = $_POST['imagen'];

if ($_FILES['file']['name'] != null) {
    //echo "hay imagen nueva";
    $nombredelarchivo = date('y-m-d-h-i-s'). $_FILES['file'] ['name'];
    $location = "../../../public/img/productos/".$nombredelarchivo;
    move_uploaded_file($_FILES['file'] ['tmp_name'], $location);
    $imagen = $nombredelarchivo;
}else{
    //echo "no hay imagen";
    $imagen = $imagen;
}

//actualizar de la tabla producto
$sentencia = $pdo->prepare("UPDATE tb_productos
SET nombre_producto=:nombre_producto,
    descripcion=:descripcion,
    imagen=:imagen,
    stock=:stock,
    stock_minimo=:stock_minimo,
    stock_maximo=:stock_maximo,
    precio_compra=:precio_compra,
    precio_venta=:precio_venta,
    fecha_de_ingreso=:fecha_de_ingreso,
    fyh_actualizacion=:fyh_actualizacion
    WHERE id_producto = :id_producto ");

$sentencia->bindParam('nombre_producto',$nombre_producto);
$sentencia->bindParam('descripcion',$descripcion);
$sentencia->bindParam('imagen',$imagen);
$sentencia->bindParam('stock',$stock);
$sentencia->bindParam('stock_minimo',$stock_minimo);
$sentencia->bindParam('stock_maximo',$stock_maximo);
$sentencia->bindParam('precio_compra',$precio_compra);
$sentencia->bindParam('precio_venta',$precio_venta);
$sentencia->bindParam('fecha_de_ingreso',$fecha_de_ingreso);
$sentencia->bindParam('fyh_actualizacion',$fechahora);
$sentencia->bindParam('id_producto',$id_producto);

if ($sentencia->execute()){
    echo "se actualizo de la manera correcta";
    session_start();
    $_SESSION['mensaje'] = "se actualizo de la manera correcta";
    $_SESSION['icono'] = 'success';
    header('location: '.$URL. '/admin/productos/');
}else{
    session_start();
    $_SESSION['mensaje'] = "no se pudo actualizar el producto";
    $_SESSION['icono'] = 'error';
    header('location: '.$URL. '/admin/productos/update.php?id_producto='.$id_producto);
}