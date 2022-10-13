<?php

//---------------------------
//--Constructores
//---------------------------

/*

Los constructores son llamados cuando se crea un objeto de clase.
Se utilizan para establecer cualquier inicialización que el objeto puede necesitar antes de ser utilizado.
Piensa en ello como una función, pero con un nombre designado.El nombre es _construct()

Normalmente se colocan al principio de todos los metodos dentro de la clase.
*/

class Persona{
    const PROMEDIO_VIDA=80;
    public $nombre= "Leonardo";
    public $apellido="Di Caprio";
    public $fechaDeNacimiento=1974;
    
    public function __construct(){
        echo "Hola soy el constructor de la clase";
        $this->nombre= "Leo";
        $this->apellido= "Di Caprio";
        $this->fechaDeNacimiento= 1974;
    }
    
        
    

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        return $this->nombre;
    }
}
$nuevaPersona = new Persona();
echo PHP_EOL;
echo $nuevaPersona->getNombre();

