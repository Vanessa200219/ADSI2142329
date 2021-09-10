<?php 
include('pdo1.php');


echo '<br><br><br>------------------------------- Objetos--------------<br><br>';
$statement->execute();
while ($key=$statement->fetch(PDO::FETCH_ASSOC)) {
    echo $key['Nombre'].'<br>';
}

$statement=$conexion->prepare("insert into aprendiz values ('Simon Bolivar','556655','adsi','M')");
$statement->execute();
 
?>