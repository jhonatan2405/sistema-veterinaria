<?php

$sql = "SELECT *, usu.nombre_completo as nombre_completo, usu.email as email FROM tb_reservas as res inner join tb_usuarios as usu on usu.id_usuario = res.id_usuario"; ;
$query = $pdo->prepare($sql);
$query->execute();
$reservas = $query->fetchAll(pdo::FETCH_ASSOC);