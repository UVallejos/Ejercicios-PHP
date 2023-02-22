<?php

//URL de la que vamos a obtener la información
$url = "https://api.dailymotion.com/videos?channel=sport&limit=10";

//Indicamos las opciones para que nos deje ingresar
$opciones = array("ssl"=>array("verify_peer"=>false, "verify_peer_name"=>false));

//Obtenemos la respuesta JSON   
$respuestas = file_get_contents($url, false, stream_context_create($opciones));

//Decdificamos el formato JSON a una array
$objetoRespuesta = json_decode($respuestas);

//print_r($objetoRespuesta);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <!-- Recorremos con un foreach el array y lo incrustamos en una lista 
            hacemos más legible el array con las claves correspondientes -->
        <?php foreach($objetoRespuesta->list as $video){ ?>
        <li><?php echo "El ID del Vídeo es: ". ($video->id) . 
                        ", El título del vídeo es: " . ($video->title) . 
                        ", El canal es " . ($video->channel) ; ?></li>
        <?php } ?>
        <br/>
    </ul>
</body>
</html>