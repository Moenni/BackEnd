<?php

//a. A es positivo y B es negativo.
($A > 0) and ($B < 0);

//b. A, B y C son diferentes.
($A != $B) && ($A != $C) && ($B != $C);

//c. E es no nulo y F no es mayor que G.
($E != 0) and !($F > $G)

//d. B está estrictamente entre A y C.
($B > $A) && ($B < $C);

//e. F es negativo o E es no negativo, pero no ambos a la vez.
($F < 0) xor !($E < 0);
