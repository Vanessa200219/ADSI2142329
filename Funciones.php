<?php

include ("getyset.php");


if (isset($_GET['enviar'])) {
    $numero=$_GET['number'];
    echo "<br><br><br> El tamaño de los numeros es: $numero <br><br><br>";

    $people=new funcion($numero);




    
    echo "los numeros son: <br> $numero";


    //Funcion Suma de Arreglos
    $numeros=array();
    
    for ($i=0; $i < $numero; $i++) { 
        $numeros[$i]=rand(0,10);
    }   

    for ($i=0; $i <$numero ; $i++) { 
        echo $numeros[$i].'<br>';
    }


    

    function Promedio($nums){
        $suma=0;
        for ($i=0; $i <count($nums) ; $i++) { 
            $suma=0+$nums[$i];
            $resultado=$suma/$_GET['number'];
        }
        return $resultado;
    }

    
    function mayor($nums){
        $mayor=0;

        foreach ($nums as $key){
            if ($mayor < $key){
                $mayor = $key;
            }
            return $mayor;
        }
    }


    function menor($nums){
        $menor=0;

        foreach ($nums as $key){
            if ($menor > $key){
                $mayor = $key;
            }
            return $menor;
        }
    }



    echo "<br><br> la promedio es: " .Promedio($numeros);
    echo "<br><br> la Mayor es: " .mayor($numeros);
    echo "<br><br> la Menor es: " .menor($numeros);
}//Llave de la clase

?>