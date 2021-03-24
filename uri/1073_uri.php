<?php
    $entrada_um = (int) fgets(STDIN);
    
    for ($i = 1;$i <= $entrada_um;$i++){
        if ($i % 2 == 0){
            $calculo = $i ** 2;
            echo "${i}^2 = ${calculo}\n";
        }
    }

?>