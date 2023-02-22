<?php

//Asignamos ruta del archivo
$archivo = "contenido.txt";

//Abriendo archivo
$archivoAbierto = fopen($archivo, "r");

//Leemos el contenido del archivo abierto
$contenido = fread($archivoAbierto, filesize($archivo));

//Mostramos el contenido del archivo
echo $contenido;

?>