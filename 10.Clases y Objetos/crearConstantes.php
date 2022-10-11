<?php

//-----------------------------
//--Creación de una Constante
//-----------------------------

/*
Las constantes normales de php pueden ser usadas dentro de una clase, pero una clase puede tener sus propias constantes que solo estan disponibles cuando se usa esa clase en particular.
*/

class Persona{
    const PROMEDIO_VIDA=80;
    public $nombre= "Leonardo";
    public $apellido="Di Caprio";
    public $fechaDeNacimiento=1974;


}