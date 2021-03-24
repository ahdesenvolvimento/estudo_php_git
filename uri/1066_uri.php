<?php
    $entrada_um = (int) fgets(STDIN);
    $entrada_dois = (int) fgets(STDIN);
    $entrada_tres = (int) fgets(STDIN);
    $entrada_quatro = (int) fgets(STDIN);
    $entrada_cinco = (int) fgets(STDIN);

    
    $contador_pares = 0;
    $contador_impares = 0;
    $contador_positivos = 0;
    $contador_negativos = 0;

    if ($entrada_um % 2 == 0){
        $contador_pares++;
    }


    if ($entrada_dois % 2 == 0){
        $contador_pares++;
      
    }


    if ($entrada_tres % 2 == 0){
        $contador_pares++;
      
    }


    if ($entrada_quatro % 2 == 0){
        $contador_pares++;
    
    }

    if ($entrada_cinco % 2 == 0){
        $contador_pares++;
    
    }

    echo "${contador_pares} valores pares\n";
?>