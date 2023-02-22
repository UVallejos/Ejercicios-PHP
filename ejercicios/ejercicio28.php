<?php

$servidor = "localhost";
$usuario = "root";
$contraseña = "";

try{
    $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'jugando con programación', 'foto.jpg')";

    $conexion->exec($sql);

    echo "Conexión Establecida";

}catch(PDOException $error){
    echo "Conexión Erronea".$error;

}

?>