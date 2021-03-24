<?php
    $valor = (double) fgets(STDIN);
    if ($valor >=0 && $valor <= 400){
        $reajuste = number_format(($valor * 0.15), 2, '.', '');
        $salario = number_format(($valor + $reajuste), 2, '.', '');
        echo "Novo salario: ${salario}\n";
        echo "Reajuste ganho: ${reajuste}\n";
        echo "Em percentual: 15 %\n";
    }elseif ($valor > 400 && $valor <= 800){
        $reajuste = number_format(($valor * 0.12), 2, '.', '');
        $salario = number_format(($valor + $reajuste), 2, '.', '');
        echo "Novo salario: ${salario}\n";
        echo "Reajuste ganho: ${reajuste}\n";
        echo "Em percentual: 12 %\n";
    }elseif ($valor > 800 && $valor <= 1200){
        $reajuste = number_format(($valor * 0.1), 2, '.', '');
        $salario = number_format(($valor + $reajuste), 2, '.', '');
        echo "Novo salario: ${salario}\n";
        echo "Reajuste ganho: ${reajuste}\n";
        echo "Em percentual: 10 %\n";
    }elseif ($valor > 1200 && $valor <= 2000){
        $reajuste = number_format(($valor * 0.07), 2, '.', '');
        $salario = number_format(($valor + $reajuste), 2, '.', '');
        echo "Novo salario: ${salario}\n";
        echo "Reajuste ganho: ${reajuste}\n";
        echo "Em percentual: 7 %\n";
    }elseif ($valor > 2000){
        $reajuste = number_format(($valor * 0.04), 2, '.', '');
        $salario = number_format(($valor + $reajuste), 2, '.', '');
        echo "Novo salario: ${salario}\n";
        echo "Reajuste ganho: ${reajuste}\n";
        echo "Em percentual: 4 %\n";
    }
?>