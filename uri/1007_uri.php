<?php
    $entrada_um = (int) fgets(STDIN);
    $entrada_dois = (int) fgets(STDIN);
    $entrada_tres = (int) fgets(STDIN);
    $entrada_quatro = (int) fgets(STDIN);
    $diferenca = function($valor1, $valor2, $valor3, $valor4){
        return ($valor1*$valor2-$valor3*$valor4);
    };
    $x = $diferenca($entrada_um, $entrada_dois, $entrada_tres, $entrada_quatro);
    echo "DIFERENCA = {$x}\n";
?>