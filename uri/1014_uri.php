<?php
    $distancia = (int) fgets(STDIN);
    $combustivel = (double) fgets(STDIN);
    
    $km_litro = $distancia / $combustivel;
    $km_litro = number_format($km_litro, 3, '.', '');
    echo "${km_litro} km/l\n";
?>