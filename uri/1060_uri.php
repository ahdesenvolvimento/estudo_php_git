<?php
    $entrada_um = (double) fgets(STDIN);
    $entrada_dois = (double) fgets(STDIN);
    $entrada_tres = (double) fgets(STDIN);
    $entrada_quatro = (double) fgets(STDIN);
    $entrada_cinco = (double) fgets(STDIN);
    $entrada_seis = (double) fgets(STDIN);
    
    $contador_positivo = 0;
    if ($entrada_um > 0){
        $contador_positivo++;
    }


    if ($entrada_dois > 0){
        $contador_positivo++;
    }


    if ($entrada_tres > 0){
        $contador_positivo++;
    }


    if ($entrada_quatro > 0){
        $contador_positivo++;
    }

    if ($entrada_cinco > 0){
        $contador_positivo++;
    }

    if ($entrada_seis > 0){
        $contador_positivo++;
    }
    
    echo "${contador_positivo} valores positivos\n";
?>