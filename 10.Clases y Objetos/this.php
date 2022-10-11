<?php

//-----------------------------
//-- This
//-----------------------------

/*
A veces necesitamos acceder a las propiedades(variables) o metodos (funciones) de una clase para referenciarse  a si misma utilizamos la pseudo-variable $this.
La pseudo variable $this está disponible dentro de cualquier método de la clase cuando ese método es llamado desde un contexto de objeto.
*/


class Persona{
    const PROMEDIO_VIDA=80;
    private $nombre= "Leonardo";
    private $apellido="Di Caprio";
    private $fechaDeNacimiento=1974;
    
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
}

$nuevaPersona= new Persona();

$Persona1= new Persona();

//echo $Persona1->getNombre();

$nuevoNombre= readline("ingrese el nuevo nombre: ");
$Persona1->setNombre($nuevoNombre);
echo PHP_EOL;
echo "el nuevo nombre es: ". $Persona1->getNombre();