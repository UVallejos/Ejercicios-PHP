<?php

class persona{

    //Propiedades
    public $nombre; 
    private $edad;
    protected $altura;

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

//Herencia
class trabajador extends persona{
    public $puesto;

    public function presentarseTrabajador(){
        echo "Hola soy ". $this->nombre . " y soy un ". $this->puesto;
    }


}

//Instaniar objeto
$objetoTrabajador = new trabajador(); 

//Invocación del método
$objetoTrabajador->setNombre("Ulises T"); 
$objetoTrabajador->puesto = "Profesor";
$objetoTrabajador->presentarseTrabajador();




?>