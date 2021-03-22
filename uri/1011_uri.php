<?php
    $raio = (double) fgets(STDIN);
    
    $area = (4.0/3) * 3.14159 * ($raio**3);
    $area = number_format($area, 3, '.', '');
    echo "VOLUME = ${area}\n";
?>