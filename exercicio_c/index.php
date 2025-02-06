<?php

    //Valor do Produto
    $valorProduto = 499.99;

    //Valor do Reajuste
    $valorReajuste = ($valorProduto/100)*1;

    //Valor depois do reajuste
    $valorDepoisReajuste = $valorProduto + $valorReajuste;

    //Imprimindo o valor do produto inicial
    echo "O valor do produto era de: R$$valorProduto";
    echo "<br>";
    //Imprimindo o valor do reajuste
    echo "O valor do reajuste é de: R$$valorReajuste";
    echo "<br>";
    echo "<br>";
    //Imprimindo o valor final
    echo "O valor depois do reajuste é de: R$$valorDepoisReajuste";