<?php 

$num=20;

try {
    for ($i=0; $i <$num; $i++) { 
        if ($num%$i==0) {
            echo $i.' es divisor';
        }
    }
} catch (Error $a) {
    echo $a->getMessage().' <br> Salida Error...';
}


echo '<br><br><br> Despues del Ciclo for...';



?>