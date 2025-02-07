<?php
    
    //Notas
    $nota1 = readline("Insira a primeira nota: ");
    $nota2 = readline("Insira a segunda nota: ");
    $nota3 = readline("Insira a terceira nota: ");
    $nota4 = readline("Insira a quarta nota: ");

    //Pesos
    $peso1 = 1;
    $peso2 = 2;
    $peso3 = 3;
    $peso4 = 4;

    //Somas
    $somas = ($nota1 * $peso1) + ($nota2 * $peso2) + ($nota3 * $peso3) + ($nota4 * $peso4);

    //Pesos
    $pesos = $peso1 + $peso2 + $peso3 + $peso4;

    //Calculando a Média
    $media = $somas / $pesos;

    echo "A média ponderada é: $media" .PHP_EOL;

    
    
    
    
    
    //Média Ponderada
    //$mediaPonderada = ($nota1 * $peso1) + ($nota2 * $peso2) + ($nota3 * $peso3) + ($nota4 * $peso4) / $peso1 + $peso2 + $peso3 + $peso4;
    //não deu certo^^
    

