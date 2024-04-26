<?php

echo $password = "12345678";

echo password_hash($password, PASSWORD_DEFAULT);

$hash = '$2y$10$wn/t9LKtO0Er6v5b8BPPG.qbC/cbcfCujHe87sH70vTE1wJIbIZSS';

if (password_verify($password, $hash)) {
    echo 'contraseña correcta';
} else {
    echo 'contraseña incorrecta';
}