<?php

/*Hacer los algoritmos que calculen  el promedio de una serie de notas hasta que se ingrese  una nota negativa , utilizar las tres estructuras repetitivas ¿Cual no se puede utilizar?*/
/*
7,8,9
suma = 7+8+9;
promedio= suma/cantidad


*/
/*
$suma=0;
$cantidad=0;
$nota= readline("ingrese una nota o una nota negativa para salir: ");
while($nota>=0){
    $suma+= $nota;
    $cantidad++;
    $nota= readline("ingrese una nota o una nota negativa para salir: ");
}
$promedio= $suma/$cantidad;
echo "el promedio de los numeros ingresados es : $promedio";
*/
/*
$suma=0;
$cantidad=0;
$nota= readline("ingrese una nota o una nota negativa para salir: ");
if($nota>=0){
do{

    $suma+= $nota;
    $cantidad++;
    $nota= readline("ingrese una nota o una nota negativa para salir: ");
}while($nota>=0){
$promedio= $suma/$cantidad;
echo "el promedio de los numeros ingresados es : $promedio";
*/

$suma=0;
$cantidad=0;
for ($nota=readline("ingrese una nota: ");$nota>=0;$nota=readline("ingrese una nota: ") ) {
    $cantidad++; //$cantidad= $cantidad +1
    
    $suma+=$nota;
}
/*
if($cantidad!=0){
    $promedio=$suma/$cantidad; 
}
*/
//usamos operador ternario
$promedio= ($cantidad!=0) ? $suma/$cantidad: 0;
echo "El promedio de los numeros ingresados es : $promedio";