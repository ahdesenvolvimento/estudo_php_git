<?php
    $variavel_true = True;
    $variavel_false = False;

    if ($variavel_true){
        echo "Variavel true\n";
    }
    if (!$variavel_false){
        echo "Variavel false\n";
    }

    var_dump((bool) ""); 

    $a = -1.12312;
    $b = abs($a);
    echo "{$b}\n";

    $isso_eh_string = "string hehehe\n";
    echo "{$isso_eh_string}\n";

    $array = [
        'um' => '1',
        'dois' => '2',
    ];

    $array_sem_chave = array('1', '2', '3', '4');

    foreach($array_sem_chave as $value){
        echo "Valor: {$value}\n";
    }

    var_dump($array);
    var_dump($array_sem_chave);
    $pegar_array = get_array();
    var_dump($pegar_array);
function get_array(){
    return array('1', '2', '3');
}

    $foo = 25;
    $bar = &$foo;
    echo "$foo, $bar";

    $x = True;
    $y = False;

    if ($x || $y){
        echo "true";
    }
    else{
        echo "false";
    }

    $v = 'Ola';
    $z = $v . 'Mundo';
    echo "z = {$z}";
?>