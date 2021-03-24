<?php
    $testes = (int) fgets(STDIN);
    $in = 0;
    $out = 0;
    for ($i = 0;$i < $testes;$i++){
        $entrada = (int) fgets(STDIN);
        if ($entrada >= 10 and $entrada <= 20){
            $in++;
        }else{
            $out++;
        }
    }
    
    echo "$in in\n";
    echo "$out out\n";

?>