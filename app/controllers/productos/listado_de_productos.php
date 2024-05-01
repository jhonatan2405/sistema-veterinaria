<?php

$sql = "SELECT * FROM tb_productos " ;
$query = $pdo->prepare($sql);
$query->execute();
$productos = $query->fetchAll(pdo::FETCH_ASSOC);