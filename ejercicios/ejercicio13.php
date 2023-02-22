<?php

if ($_POST) {
    $boton = $_POST["btValor"];

    switch ($boton) {
        case 1:
            echo "El usuario presionó el botón 1 <br>";
            break;
        
        case 2:
            echo "El usuario presionó el botón 2 <br>";
            break;
        
        case 3:
            echo "El usuario presionó el botón 3 <br>";
            break;
    }
    
}



?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
</head>
<body>
    <!--Representamos que el botón solo esta representado 1 vez, pero tiene 3 opciones -->
    <form action="ejercicio13.php" method="post">
        <input type="submit" name="btValor" value="1">
        <br>
        <input type="submit" name="btValor" value="2">
        <br>
        <input type="submit" name="btValor" value="3">
    </form>

</body>
</html>