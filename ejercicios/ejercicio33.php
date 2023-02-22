<?php

$jsonContenido = '[
    {"nombre":"Ulises", "apellido":"Vallejos"},
    {"nombre":"Mariella", "apellido":"Barbato"},
    {"nombre":"Eliel", "apellido":"Vallejos"}
]';

$resultado = json_decode($jsonContenido);

print_r($resultado);
echo "<br/>";
echo "<br/>";

foreach ($resultado as $persona) {
    echo ("El nombre de la pesona es " .$persona->nombre. " y el apellido es " .$persona->apellido. ". <br/>");
}


?>