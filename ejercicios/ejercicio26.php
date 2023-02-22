<?php

class persona{

    //Propiedades
    public $nombre; 
    private $edad;
    protected $altura;

    function __construct($nombre){
        $this->nombre = $nombre;
    }


    public function setNombre ($nuevoNombre){ //Métodos

        $this->nombre = $nuevoNombre;
    }

    public function getNombre(){
        echo "Hola soy " . $this->nombre . "<br>";
    }

    public function getEdad(){
        $this->edad = 20;
        echo $this->edad . "<br>";
    }

}


//Instaniar objeto
$objetoPersona = new persona("Ulises"); 

//Invocación del método
//$objetoPersona->setNombre("Ulises"); 
$objetoPersona->getNombre(); 



?>