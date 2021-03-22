<?php
    $tempo = (int) fgets(STDIN);
    $velocidade = (int) fgets(STDIN);
    $resultado = number_format((($tempo * $velocidade)/12), 3, '.', '');
    
    echo "${resultado}\n";
?>