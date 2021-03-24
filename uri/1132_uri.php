<?php
    $entrada_um = (int) fgets(STDIN);
    $entrada_dois = (int) fgets(STDIN);
    $total = 0;
    $valor = menor($entrada_um, $entrada_dois);
    $valor_maior = maior($entrada_um, $entrada_dois);
    for ($i = $valor; $i <= $valor_maior;$i++){
        if (!($i % 13 == 0)){
            $total+=$i;
        }
    }
    echo "{$total}\n";
   

    function menor($valor, $prox_valor){
        if ($valor > $prox_valor){
            return $prox_valor;
        }else{
            return $valor;
        }
    }

    function maior($valor, $prox_valor){
        if ($valor > $prox_valor){
            return $valor;
        }else{
            return $prox_valor;
        }
    }
   
?>
