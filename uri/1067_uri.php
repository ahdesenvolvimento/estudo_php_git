<?php
    $entrada_um = (int) fgets(STDIN);
    
    for ($i = 1;$i <= $entrada_um;$i++){
        if ($i % 2 == 1){
            echo "$i\n";
        }
    }

?>