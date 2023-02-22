<?php

session_start();

$_SESSION["usuario"] = "ulises";
$_SESSION["status"] = "logueado";

echo "Sesión iniciada <br>";

echo "Usuario: ". $_SESSION["usuario"] . "<br> Estatus: " . $_SESSION["status"];


?>