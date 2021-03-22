<?php
    $inteiro = 123;
    $unidade = (string) $inteiro;
    
    $dezena = $unidade[1];
    $centena = $unidade[0];
    $total = (int) $centena + (int) $dezena + (int) $unidade[2];
    echo $total;
?>