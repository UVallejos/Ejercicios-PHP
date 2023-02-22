<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require("ejercicio37_1.php"); ?>

    <?php echo "Hola no estoy incluido"; ?>
</body>
</html>

<!--
    La diferencia con include y require es que include sigue
    mostrando el contenido independientemente si hay un error
    en el archivo que include , pero si esto ocurre en require
    no puestra el más cotenido, todo el documento muestra error
    al ejecutarse.
-->

<!--
    require_one sirve para solamente incluir un archivo php 
    en caso de que hayan dos iguales, solamente incluye el 
    primero en en html
-->