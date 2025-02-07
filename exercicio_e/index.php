<?php

    $base = readline("Digite o valor da base do quadrilátero: ");
    $altura = readline("Digite o valor da altura do quadrilátero: ");

    //Calculo do perímetro
    $perimetro = ($base * 2) + ($altura * 2);

    echo "O perímetro do quadrilátero é de: $perimetro" .PHP_EOL;

    //Calculo da area
    $area = $base * $altura;

    echo "A área do quadrilátero é de: $area".PHP_EOL;


    //Calculo da diagonal
    $calcDiagonal = ($base**2)+($altura**2);
    $diagonal = sqrt($calcDiagonal);

    echo "A diagonal do quadrilátero é de: $diagonal".PHP_EOL;