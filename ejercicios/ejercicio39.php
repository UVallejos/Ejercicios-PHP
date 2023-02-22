<?php 

//Asignamos nombre del archivo a crear
$nombreArchivo = "archivo.txt";

//Creamos el contenido para el archivo
$contenidoArchivo = "Hola, saludos caballeros";

//Abrimos el archivo a crear con los parametros de nombre del archivo y permiso de escritura "w"
$archivoACrear = fopen($nombreArchivo, "w");

//Escribimos en el archivo con la función fwrite como parametros el archivo a crear y el contenido al archivo
fwrite($archivoACrear, $contenidoArchivo);

//Cerramos el archivo
fclose($archivoACrear);

//Mostramos que el archivo se ha creado Creamos el archivo
echo($archivoACrear);


?>