<?php
    $entrada = (int) fgets(STDIN);
    
    for ($i = 1;$i <= 10000;$i++){
        if ($i % $entrada == 2){
            echo "$i\n";
        }
        
    }
    
?>