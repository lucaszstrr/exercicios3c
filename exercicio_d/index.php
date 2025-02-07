<?php

    //Variáveis
    $salarioMinimo = readline("Digite o salario: R$");
    $quantidadeQuilowatts = readline("Digite a qtd de Quilowatts gastas: ");
    $valorQuilowatt = readline("Digite o valor do Quilowatt: R$");

    //Calculo do valor real a ser pago
    $valorPagar = $quantidadeQuilowatts * $valorQuilowatt;

    //Calculo do desconto
    $valorDesconto = ($valorPagar/100)*10;

    //Calculo do valor a pagar com o desconto
    $valorDescontado = $valorPagar - $valorDesconto;

    //Imprimindo
    echo "O valor real seria: R$$valorPagar" .PHP_EOL;
    echo "O valor com desconto é de: R$$valorDescontado" .PHP_EOL;