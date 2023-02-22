<?php

class UnaClase{

    public static function unMetodo(){
        echo "Hola soy un método estático <br>"; 
    }
}

//Invoación normal de un método
$obj = new UnaClase();
$obj->unMetodo();

//Invocar a método estático
UnaClase::unMetodo();

?>