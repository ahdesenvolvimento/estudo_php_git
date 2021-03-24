<?php
    $entrada = (int) fgets(STDIN);
    if ($entrada == 61){
        echo "Brasilia\n";
    }elseif ($entrada == 71){
        echo "Salvador\n";
    }elseif ($entrada == 11){
        echo "Sao Paulo\n";
    }elseif ($entrada == 21){
        echo "Rio de Janeiro\n";
    }elseif ($entrada == 32){
        echo "Juiz de Fora\n";
    }elseif ($entrada == 19){
        echo "Campinas\n";
    }elseif ($entrada == 27){
        echo "Vitoria\n";
    }elseif ($entrada == 31){
        echo "Belo Horizonte\n";
    }else{
        echo "DDD nao cadastrado\n";
    }


?>