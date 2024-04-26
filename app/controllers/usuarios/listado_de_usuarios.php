<?php

$sql = "SELECT * FROM tb_usuarios " ;
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(pdo::FETCH_ASSOC);


