<?php

$servidor = "localhost";
$usuario = "root";
$contraseña = "";

try{
    $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM `fotos`";

    $sentencia = $conexion->prepare($sql);
    $sentencia->execute();

    $resultado = $sentencia->fetchAll();

    foreach ($resultado as $foto) {
        echo $foto["nombre"] . "<br>";
    }

    //print_r($resultado);

}catch(PDOException $error){
    echo "Conexión Erronea".$error;

}

?>