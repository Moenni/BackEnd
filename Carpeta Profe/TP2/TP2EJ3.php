<?php

/*Ordenar de forma creciente tres valores diferentes entre A,B,C*/ 
$A = readline("ingrese el valor de A : ");
$B = readline("ingrese el valor de B : ");
$C = readline("ingrese el valor de C : ");

if($A<$B && $A<$C){ #A es la mas chiquita
     if($B<$C){ # B es la del medio y C  es la mas grande
        echo "El orden es A:$A, B:$B, C:$C";

    }else{ #C es la del medio y B es la mas grande
    echo  "El orden es A:$A, C:$C, B:$B";
}
}elseif($B<$C) { #A no es la mas chiquita 
    if($A<$C){ # A es la del medio y C  es la mas grande
        echo "El orden es B:$B, A:$A, C:$C";
    }else{ #C es la del medio y A es la mas grande
    echo  "El orden es B:$B, C:$C, A:$A";
}    
}else{ #C es la mas chiquita
    if($A<$B){ #A es la del medio y B es la mas grande
        echo "El orden es C:$C, A:$A, B:$B";
    }else{ #B es la del medio y A es la mas grande
        echo "El orden es C:$C, B:$B, A:$A";
    }
}
