<?php
    $entrada_um = (double) fgets(STDIN);
    $entrada_dois = (double) fgets(STDIN);
    $resultado = media($entrada_um, $entrada_dois);
    $resultado = number_format($resultado, 5);
    echo "MEDIA = ${resultado}\n";

    function media($valor1, $valor2){
            return ($valor1*3.5 + $valor2*7.5)/11;
    }
?>