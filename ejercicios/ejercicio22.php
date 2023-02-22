<?php

//Arreglos
$fruta = array("F"=> "Fresa", "P"=> "Pera", "M"=> "Manzana");

print_r($fruta);

echo "<br>" . $fruta["M"] . "<br>"; 

foreach ($fruta as $key => $value) {
    
    echo $key . " - " . $value . "<br>";
}



?>