<?php
    
    //Notas
    $nota1 = 300;
    $nota2 = 100;
    $nota3 = 720;
    $nota4 = 400;

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

    //Imprimindo valores
    echo "A nota 1 é: $nota1";
    echo "<br>";
    echo "A nota 2 é: $nota2";
    echo "<br>";
    echo "A nota 3 é: $nota3";
    echo "<br>";
    echo "A nota 4 é: $nota4";
    echo "<br>";
    echo "<br>";
    echo "A média ponderada é: $media";

    
    
    
    
    
    //Média Ponderada
    //$mediaPonderada = ($nota1 * $peso1) + ($nota2 * $peso2) + ($nota3 * $peso3) + ($nota4 * $peso4) / $peso1 + $peso2 + $peso3 + $peso4;
    //não deu certo^^
    

