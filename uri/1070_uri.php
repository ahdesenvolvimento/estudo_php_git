<?php
    $entrada_um = (int) fgets(STDIN);
    
    for ($i = $entrada_um;$i <= $entrada_um + 11;$i++){
        if ($i % 2 == 1){
            echo "$i\n";
        }
    }

?>