<?php

//---------------------------
//--Visibilidad Protegida
//---------------------------


/*

La herencia permite que una clase herede los métodos y propiedades de otra clase.
Lo que significa que tiene acceso a ellos a través de la variable del objeto  de la clase hija.
*/

use Persona as GlobalPersona;

class Persona{
    const PROMEDIO_VIDA=80;
    protected $nombre;
    protected $apellido;
    protected $fechaDeNacimiento;
    
    public function __construct($tempNombre,$tempApellido,$tempFechaNacim){
   
        $this->nombre= $tempNombre;
        $this->apellido= $tempApellido;
        $this->fechaDeNacimiento= $tempFechaNacim;
    }
    
        
    

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nuevoNombre){
         $this->nombre=$nuevoNombre;
    }
}

class Actor extends Persona{
        
    protected $seudonimo;

    public function getSeudonimo(){
        return $this->seudonimo;
    }
    public function getNombreCompleto(){
        echo $this->getNombre()." ".$this->seudonimo." ".$this->apellido. " ,nacido en: ".$this->fechaDeNacimiento;
    }
}

$nuevoActor= new Actor("Leonardo", "Di Caprio",1974);
echo $nuevoActor->getNombre();
echo PHP_EOL;
$nuevoActor2= new Actor("Elmer","Figueroa Arce",1968);
$nuevoActor2->seudonimo="Chayanne";
echo $nuevoActor2->getNombreCompleto();
echo PHP_EOL;
$nuevoActor3= new Actor("Chris","Hemsworth",1983);
$nuevoActor3->seudonimo= "Odinson";
echo $nuevoActor3->getNombreCompleto();