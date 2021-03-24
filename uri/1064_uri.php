<?php
    $entrada_um = (double) fgets(STDIN);
    $entrada_dois = (double) fgets(STDIN);
    $entrada_tres = (double) fgets(STDIN);
    $entrada_quatro = (double) fgets(STDIN);
    $entrada_cinco = (double) fgets(STDIN);
    $entrada_seis = (double) fgets(STDIN);
    
    $contador_positivo = 0;
    $total_positivos = 0;
    if ($entrada_um > 0){
        $contador_positivo++;
        $total_positivos+=$entrada_um;
    }


    if ($entrada_dois > 0){
        $contador_positivo++;
        $total_positivos+=$entrada_dois;
    }


    if ($entrada_tres > 0){
        $contador_positivo++;
        $total_positivos+=$entrada_tres;
    }


    if ($entrada_quatro > 0){
        $contador_positivo++;
        $total_positivos+=$entrada_quatro;
    }

    if ($entrada_cinco > 0){
        $contador_positivo++;
        $total_positivos+=$entrada_cinco;
    }

    if ($entrada_seis > 0){
        $contador_positivo++;
        $total_positivos+=$entrada_seis;
    }
    $media = number_format(($total_positivos / $contador_positivo), 1, '.', '');
    echo "${contador_positivo} valores positivos\n";
    echo "$media\n";
?>