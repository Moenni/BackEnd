<?php

//---------------------------
//--Propiedades y metodos privados
//---------------------------


/*

Con una propiedad /metodo privado , solo puedes acceder a ese metodo dentro de la clase que lo inició.
No puedes acceder a ellos de una clase a otra ni puedes acceder a ellos desde la variable objeto.
*/

use Persona as GlobalPersona;

class Persona{
    const PROMEDIO_VIDA=80;
    private $nombre;
    private $apellido;
    private $fechaDeNacimiento;
    
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
        
    private $seudonimo;

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