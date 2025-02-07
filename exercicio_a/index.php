<?php

    $a = readline("Insira o dividendo: ");
    $b = readline("Insira o divisor: ");
    $resultado = intdiv($a, $b);
    $resto = $a % $b;

    echo "O quociente da divisão é: $resultado" .PHP_EOL;;
    echo "O resto é: $resto" .PHP_EOL;