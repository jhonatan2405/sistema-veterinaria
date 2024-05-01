<?php
/**create by phpstorm */

define ('APP_NAME' , 'SISTEMA DE VETERINARIA - JJBPWEB');
define ('SERVIDOR','localhost');
define ('USUARIO','root');
define ('PASSWORD','');
define ('BD','sistemaveterinario');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

/*conexion a la base de datos*/

try {
    $pdo = new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "conexion exitosa con la base de datos";
}catch (PDOException $e){
    echo "error no se pudo conectar a la base de datos";
}

$URL = "http://localhost/www.sistemadeveterinaria.com";

date_default_timezone_set("America/Bogota");
$fechahora = date('Y-m-d H:i:s');