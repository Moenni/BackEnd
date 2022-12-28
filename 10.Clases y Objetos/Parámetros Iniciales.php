<?php

//---------------------------
//--Parámetros Iniciales
//---------------------------

/*

Cada objeto que se crea a partir de una clase puede pasar parámetros en la declaración inicial.
Estos parámetros se pasan al _construct que se llama automáticamente.
*/

class Persona{
    const PROMEDIO_VIDA=80;
    public $nombre= "Leonardo";
    public $apellido="Di Caprio";
    public $fechaDeNacimiento=1974;
    
    public function __construct($nombre,$apellido,$fechaDeNacimiento){
        echo "Hola soy el constructor de la clase";
        $this->setNombre($nombre);
        $this->apellido= $apellido;
        $this->fechaDeNacimiento= $fechaDeNacimiento;
    }
    
        
    

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        if($nombre==""){
            echo "No se permiten nombres vacios";
        }else{
            $this->nombre= $nombre;
        }
        echo "Se intento cargar el nombre exitosamente";
    }
     public function setFechaNacimiento($fechaN){
        if($fechaN>2022-18){
           echo "Usted es menor de edad";
        }elseif($fechaN<2022-110){
            echo "Ingreso una fecha muy antigua";
        }else{
            $this->fechaDeNacimiento=$fechaN;
        }
     }
    
        public function setPrecio($precio){
            if($precio>0){
                $this->$precio= $precio;
            
            }else{
                echo "El precio no puede ser negativo  cero";
            }
        }
}


$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$fechaNacimiento= $_POST['fechaNacimiento'];


$Angelina= new Persona("Angelina","Jolie",1972);
echo PHP_EOL;
echo $Angelina->getNombre();
