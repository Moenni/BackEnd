<?php


    /*Escribir un algoritmo que permita dada la fecha de nacimiento de una persona saber cuál es su signo zodiacal.*/ 

$mes  = readline("ingrese su mes de nacimiento: ");
$dia  = readline("ingrese su dia de nacimiento: ");
if($dia<0 && $dia>32){
switch($mes){
    case 1: if($dia < 20){
        echo "Su signo es Capricornio";
    }else{
        echo "Su signo es de Acuario";
    }break;
    case 2: if($dia < 18){
        echo "Su signo es Acuario";
    }else{
        echo "Su signo es de Piscis";
    }break;
    case 3: if($dia < 20){
        echo "Su signo es Piscis";
    }else{
        echo "Su signo es de Aries";
    }break;
    case 4: if($dia < 19){
        echo "Su signo es Aries";
    }else{
        echo "Su signo es de Tauro";
    }break;
    case 5: if($dia < 20){
        echo "Su signo es Tauro";
    }else{
        echo "Su signo es de Geminis";
    }break;
    case 6: if($dia < 20){
        echo "Su signo es Geminis";
    }else{
        echo "Su signo es de Cancer";
    }break;
    case 7: if($dia < 22){
        echo "Su signo es Cancer";
    }else{
        echo "Su signo es de Leo";
    }
    case 8: if($dia < 22){
        echo "Su signo es Leo";
    }else{
        echo "Su signo es de Virgo";
    }break;
    case 9: if($dia < 22){
        echo "Su signo es Virgo";
    }else{
        echo "Su signo es de Libra";
    }break;
    case 10: if($dia < 22){
        echo "Su signo es Libra";
    }else{
        echo "Su signo es de Escorpio";
    }break;
    case 11: if($dia < 21){
        echo "Su signo es Escorpio";
    }else{
        echo "Su signo es de Sagitario";
    }break;
    case 12: if($dia < 21){
        echo "Su signo es Sagitario";
    }else{
        echo "Su signo es de Capricornio";
    }break;
}
}else{
    echo "dia de nacimiento incorrecto";
}
