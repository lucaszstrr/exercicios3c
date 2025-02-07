<?php 

    $base = readline("Digite o valor da base do triângulo: ");
    $altura = readline("Digite o valor da altura do triângulo: ");

    //Calculando e imprimindo valores
    $area = ($base * $altura)/ 2;
    echo "A área do triângulo é: $area" .PHP_EOL;