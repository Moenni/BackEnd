<?php

//-----------------------------
//--Acceso a las constantes
//-----------------------------

/*

Acceder a una constante es diferente que acceder a una propiedad . Usamos el mismo objeto pero en lugar del -> usamos el ::(operador de resolucion de ámbito)
Esto se tratará con mas detalle mas adelante en este módulo pero por ahora sólo hay que saber acceder a una constante dentro de una clase usamos ::
*/

class Persona{
    const PROMEDIO_VIDA=80;
    public $nombre= "Leonardo";
    public $apellido="Di Caprio";
    public $fechaDeNacimiento=1974;
    

}

$nuevaPersona =new Persona();

echo $nuevaPersona::PROMEDIO_VIDA;