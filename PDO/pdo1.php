<?php

//PDO = PHP Data Obbject

$dsn='mysql:host=localhost;dbname=adsi21';
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

?>