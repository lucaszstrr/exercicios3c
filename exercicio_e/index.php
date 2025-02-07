<?php

    $base = 50;
    $altura = 10;

    echo "A base é: $base";
    echo "<br>";
    echo "A altura é: $altura";
    echo "<br>";
    echo "<br>";

    //Calculo do perímetro
    $perimetro = ($base * 2) + ($altura * 2);

    echo "O perímetro do quadrilátero é de: $perimetro";
    echo "<br>";

    //Calculo da altura
    $area = $base * $altura;

    echo "A área do quadrilátero é de: $area";
    echo "<br>";

    //Calculo da diagonal
    $calcDiagonal = ($base**2)+($altura**2);
    $diagonal = sqrt($calcDiagonal);

    echo "A diagonal do quadrilátero é de: $diagonal";
    echo "<br>";