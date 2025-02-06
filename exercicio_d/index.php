<?php

    //Variáveis
    $salarioMinimo = 1518.00;
    $quantidadeQuilowatts = 100;
    $valorQuilowatt = 0.92;

    //Calculo do valor real a ser pago
    $valorPagar = $quantidadeQuilowatts * $valorQuilowatt;

    //Calculo do desconto
    $valorDesconto = ($valorPagar/100)*10;

    //Calculo do valor a pagar com o desconto
    $valorDescontado = $valorPagar - $valorDesconto;

    //Imprimindo
    echo "O valor do Quilowatt por hora é de: R$$valorQuilowatt";
    echo "<br>";
    echo "O valor a ser pago pelo morador é de: R$$valorPagar";
    echo "<br>";
    echo "O valor com desconto é de: R$$valorDescontado";
    echo "<br>";