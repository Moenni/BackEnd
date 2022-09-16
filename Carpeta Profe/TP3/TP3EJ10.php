
<?php


/*10. Imprimir los 100 primeros números de Fibonacci. Recuerde que un número de Fibonacci se calcula como la suma de los dos anteriores así: 0, 1, 1, 2, 3, 5, 8,13...

*/
$f1=0;
$f2=1;
echo $f1.PHP_EOL;
echo $f2.PHP_EOL;

for($i=0;$i<98;$i++){
    $fn= $f1 + $f2;
    $f1=$f2;
    $f2=$fn;

    echo $fn. PHP_EOL;
}