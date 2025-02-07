<?php

    //Dados
    $salarioFixo = readline("Digite o valor do salário fixo: R$");
    $carrosVendidos = readline("Digite quantos carros foram vendidos: ");
    $cadaVenda = readline("Digite o valor de comissão por venda: R$");
    $valorTotalVendas = $cadaVenda * $carrosVendidos;

    //Calculo do bônus
    $bonus = ($valorTotalVendas/100) * 5;
    $bonusVendas = $valorTotalVendas + $bonus;

    //Calculo salário final
    $salarioFinal = $salarioFixo + $bonusVendas;

    //Impressões
    echo "O salário final é R$$salarioFinal" .PHP_EOL;
    