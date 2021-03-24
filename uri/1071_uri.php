<?php
    $entrada_um = (int) fgets(STDIN);
    $entrada_dois = (int) fgets(STDIN);
    $contador = 0;
    if ($entrada_um > $entrada_dois){
        for ($i = $entrada_dois+1;$i < $entrada_um;$i++){
            
            if ($i % 2 != 0){
                
                $contador+=$i;
            }
        }
    }else{
        for ($i = $entrada_um + 1;$i < $entrada_dois;$i++){
            if ($i % 2 != 0){
                $contador+=$i;
            }
        }
    }
    echo "$contador\n";

?>