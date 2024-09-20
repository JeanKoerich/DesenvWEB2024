<?php

    $SALARIO1 = 1000;
    $SALARIO2 = 2000;

    for ($i = 0; $i < 100; $i++){
        $SALARIO1++;
        if ($i == 49){
            break;
        }
    }
    
    if($SALARIO1 > $SALARIO2){
        echo "O Valor da variável 1 é maior que o valor da variável 2";
    }
    else if ($SALARIO1 < $SALARIO2){
        echo "O Valor da variável 1 é menor que o valor da variável 2";
    }
    else{
        echo "Os valores são iguais";
    }

?>