<?php

$sql = "SELECT * FROM tb_usuarios where id_usuario = $id_usuario " ;
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(pdo::FETCH_ASSOC);

foreach ($usuarios as $usuario) {
    $nombre_completo = $usuario['nombre_completo'];
    $email = $usuario['email'];
    $cargo = $usuario['cargo'];
}