<?php

if ($_POST) {
    
    if ($_POST) {

        $valorA = $_POST["valorA"];
        $valorB = $_POST["valorB"];
    
        if ($valorA != $valorB) {
            
            echo "El valor de A diferente al valor de B";
    
        }else{
            echo "Es valor de A es igual al de B";
        }
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
    <form action="ejercicio12.php" method="post">
        Valor A: 
        <input type="text" name="valorA" id="">
        <br>
        Valor B: 
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" value="Calcular">
    </form>

</body>
</html>