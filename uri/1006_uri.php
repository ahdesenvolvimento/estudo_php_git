<?php
    $entrada_um = (double) fgets(STDIN);
    $entrada_dois = (double) fgets(STDIN);
    $entrada_tres = (double) fgets(STDIN);
    $resultado = media($entrada_um, $entrada_dois, $entrada_tres);
    $resultado = number_format($resultado, 1);
    echo "MEDIA = ${resultado}\n";

    function media($valor1, $valor2, $valor3){
            return ($valor1*2 + $valor2*3 + $valor3*5)/10;
    }
?>