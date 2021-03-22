<?php
    $entrada_um = (int) fgets(STDIN);
    $entrada_dois = (int) fgets(STDIN);
    $entrada_tres = (double) fgets(STDIN);
    
    $salario = $entrada_dois * $entrada_tres;
    $salario = number_format($salario, 2, '.', '');
    echo "NUMBER = ${entrada_um}\n";
    
    echo "SALARY = U$ ${salario}\n";
?>