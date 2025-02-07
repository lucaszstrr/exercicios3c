<?php

    $salarioFixo = 2000;
    $carrosVendidos = 5;
    $cadaVenda = 500;
    $valorTotalVendas = $cadaVenda * $carrosVendidos;

    $bonus = ($valorTotalVendas/100) * 5;
    $bonusVendas = $valorTotalVendas + $bonus;

    $salarioFinal = $salarioFixo + $bonusVendas;


    echo "O salário fixo é: R$$salarioFixo";
    echo "<br>";
    echo "O vendedor vendeu $carrosVendidos carros";
    echo "<br>";
    echo "A comissão por venda é de R$$cadaVenda por carro";
    echo "<br>";
    echo "O valor total de comissões de venda com o bônus de 5% é de R$$bonusVendas";
    echo "<br>";
    echo "<br>";
    echo "O salário final é R$$salarioFinal";
    