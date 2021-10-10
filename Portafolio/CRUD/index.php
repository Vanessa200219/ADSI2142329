<?php
include 'model/conexion.php';
$db=0;
$sentencia = $request->query("SELECT * FROM productos;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
print_r($productos);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h3>Lista de Productos</h3>
        <table>
            <tr>
                <td>Codigo Productos</td>
                <td>Codigo Categoria</td>
                <td>Nit Proveedor</td>
                <td>Nombre Producto</td>
                <td>Valor Unitario</td>
                <td>Cantidad</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
        </table>
    </center>
</body>
</html>