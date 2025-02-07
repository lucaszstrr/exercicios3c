<?php

    //Valor do Produto
    $valorProduto = readline("Insira o valor do produto: R$");

    //Valor do Reajuste
    $valorReajuste = ($valorProduto/100)*1;

    //Valor depois do reajuste
    $valorDepoisReajuste = $valorProduto + $valorReajuste;

    //Imprimindo o valor do reajuste
    echo "O valor do reajuste é de: R$$valorReajuste" .PHP_EOL;
    //Imprimindo o valor final
    echo "O valor depois do reajuste é de: R$$valorDepoisReajuste" .PHP_EOL;