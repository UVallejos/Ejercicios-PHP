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

//Instaniar objeto
$objetoAlumno = new persona(); 
$objetoAlumno2 = new persona();

//Invocación del método
$objetoAlumno->setNombre("Ulises"); 
$objetoAlumno2->setNombre("Mariella");

//Imprimir propiedad
$objetoAlumno->getNombre(); 
$objetoAlumno2->getNombre();
$objetoAlumno->getEdad(); 
$objetoAlumno2->getEdad();


?>