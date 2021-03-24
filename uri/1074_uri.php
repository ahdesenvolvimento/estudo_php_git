<?php
    $entrada = (int) fgets(STDIN);
    
    for ($i = 0;$i < $entrada;$i++){
        $entrada2 = (int) fgets(STDIN);
        if ($entrada2 == 0){
            echo "NULL\n";
        }else{
            if ($entrada2 % 2 == 0){
                if ($entrada2 > 0){
                    echo "EVEN POSITIVE\n";
                }else{
                    echo "EVEN NEGATIVE\n";
                }
            }elseif  ($entrada2 % 2 != 0){
                if ($entrada2 > 0){
                    echo "ODD POSITIVE\n";
                }else{
                    echo "ODD NEGATIVE\n";
                }
            }
        }
    }
    
?>