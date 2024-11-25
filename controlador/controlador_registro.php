<?php

if (!empty($_POST["Registrar"])) { 
    if (
        empty($_POST["Nombre_usuario"]) || 
        empty($_POST["apellido_usuario"]) || 
        empty($_POST["username"]) || 
        empty($_POST["Correo_electronico"]) || 
        empty($_POST["Telefono"]) || 
        empty($_POST["Contrasena"]) || 
        empty($_POST["Rol"]) || 
        empty($_POST["Estado"])
    ) {
        echo '<div class="alerta">Por favor, completa todos los campos.</div>';
    } else {

        $nombre_usuario = $_POST["Nombre"];
        $apellido_usuario = $_POST["apellido"];
        $username = $_POST["username"];
        $correo_electronico = $_POST["Correo"];
        $telefono = $_POST["Telefono"];
        $contrasena = $_POST["Contrasena"];
        $rol = $_POST["Rol"];
        $estado = $_POST["Estado"];

        include "../modelo/conexion.php";

        $stmt = $conexion->prepare("INSERT INTO usuarios (Nombre_usuario, apellido_usuario, username, Correo_electronico, Telefono, Contrasena, Rol, Estado) 
                                    VALUES ("$Nombre", "$apellido", ?, ?, ?, ?, ?, )");

        $stmt->bind_param("ssssssss", $nombre_usuario, $apellido_usuario, $username, $correo_electronico, $telefono, $contrasena, $rol, $estado);

        if ($stmt->execute()) {
            echo '<div class="success">Usuario registrado correctamente</div>';
        } else {
            echo '<div class="alerta">Error en el sistema: ' . $stmt->error . '</div>';
        }

        $stmt->close();
    }
}
?>
