<?php

$conexion = new mysqli('localhost', 'root', '', 'cancha_master');
$conexion ->set_charset('utf8');

if(!$conexion) {
    echo "Hubo un error al conectarse a la base de datos";
    exit;
}

?>