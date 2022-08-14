<?php

//Dadas A, B, C, D, E y F variables de tipo numérico escribir las expresiones lógicas correspondientes a los siguientes enunciados:

//a. A es positivo y B es negativo.
    ($A >0) &&($B<0);

//b. A, B y C son diferentes.
    ($A!=$B)&&($A!=$C)&&($B!=$C);


//c. E es no nulo y F no es mayor que G.
($E!=0)&&($F<=$G);

//d. B está estrictamente entre A y C.
    ($B>$A)&&($B<$C);

//e. F es negativo o E es no negativo, pero no ambos a la vez.
 ($F<0) xor !($E<0);