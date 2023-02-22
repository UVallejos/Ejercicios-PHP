<?php

if($_POST){

    print_r($_POST);

    print_r($_FILES);

    /**
     * Función para mover imagen que pide el nombre temporal del archio y el nombre original
     * El nombre temporal es desde donde viene elarchivo y el segundo argumento es
     * donde lo enviamos, en este caso a la misma carpeta
     */
    move_uploaded_file($_FILES["archivo"]["tmp_name"], $_FILES["archivo"]["name"]);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Activa la compatibilidad para adjuntar una imagen enctype -->
    <form action="ejercicio32.php" method="post" enctype="multipart/form-data">
        Imagen:
        <input type="file" name="archivo" id=""><br>
        <br>
        <input type="submit" value="Enviar información" name="enviar">

    </form>
    
</body>
</html>