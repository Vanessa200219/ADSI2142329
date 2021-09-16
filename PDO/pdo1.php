<?php

//PDO = PHP Data Obbject

/*$dsn='mysql:host=localhost;dbname=adsi21';
$username='root';
$password='';
$conexion;

try {
    $conexion=new PDO($dsn,$username,$password);
    $statement=$conexion->prepare('SELECT * FROM aprendiz');
    $statement->execute();
} catch (PDOException $ob) {
    echo $ob->getMessage();
}

var_dump($statement);
echo '<br><br>';
foreach ($statement as $key) {
    echo 'Nombre: '.$key['Nombre'].' -';
    echo 'Documento: '.$key['Documento'].' -';
    echo 'Formacion: '.$key['Formacion'].' -';
    echo 'Genero: '.$key['Genero'].'<br><br>';
}



echo '<br>-----------Documetos----------------------<br>';
$statement->execute();
$resultados=$statement->fetchAll();
//var_dump($resultados);
foreach ($resultados as $key) {
    echo $key['Documento'].'<br>';
}



echo '<br>-----------------------num------------------------------<br>';
$statement->execute();
while ($key=$statement->fetch(PDO::FETCH_NUM)) {
    echo $key[0].'<br>';
}



echo '<br>----------------------asociativo------------------------------<br>';
$statement->execute();
while ($key=$statement->fetch(PDO::FETCH_ASSOC)) {
    echo $key['Nombre'].'<br>';
}


echo '<br>----------------------objetos------------------------------<br>';
$statement->execute();
while ($key=$statement->fetch(PDO::FETCH_OBJ)) {
    echo $key->Documento.'<br>';
    echo $key->Nombre.'<br>';
}


*/
?>