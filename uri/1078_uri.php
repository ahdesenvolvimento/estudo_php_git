<?php
    $entrada = (int) fgets(STDIN);
    
    for ($i = 1;$i <= 10;$i++){
        $calculo = $entrada * $i;
        echo "$i x $entrada = $calculo\n";
        
    }
    
?>