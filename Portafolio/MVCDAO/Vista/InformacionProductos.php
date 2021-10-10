<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tablaRegistro.css">
    <title>INFORMACION PRODUCTOS</title>
</head>
<body>

    <!-- header -->
        <div id="header">
            
            <a class="return  header" href="../../PORTAFOLIOWEB/">PORTAFOLIO</a>
            <a class="products header" href="Index.php">REGISTRAR PRODUCTO</a>

        </div>
    <!-- fin header -->


<div class="div">
        <table class="table">
            <caption class="tittle">LISTA DE PRODUCTOS</caption>
             <thead>
                 <tr>
                     <th>Codigo de Producto</th>
                     <th>Codigo Categoria</th>
                     <th>Nit Proveedor</th>
                     <th>Nombre Producto</th>
                     <th>Valor Unitario</th>
                     <th>Cantidad</th>
                     <th>Editar</th>
                     <th>Eliminar</th>
                 </tr>
             </thead>
             <tbody>
                 <?php 
                 require('../Controlador/ProductoListar.php');  
                    foreach ($Productos as $key) {
                        ?>
                        <tr>
                        <td><?php echo $key->getCodigoProducto(); ?></td>
                        <td><?php echo $key->getCodigoCategoria(); ?></td>
                        <td><?php echo $key->getNitProveedor(); ?></td>
                        <td><?php echo $key->getNombreProducto(); ?></td>
                        <td><?php echo $key->getValorUnitario(); ?></td>
                        <td><?php echo $key->getCantidad(); ?></td>
                        <td><a href="indexEditarProducto.php?id=<?php echo $key->getCodigoProducto(); ?>">Editar</a></td>
                        <td><a href="indexEliminarProducto.php">Eliminar</a></td>

                        </tr>
                        <?php
                    }
                        
                 
                 ?>
                        <!--<td>Editar/Eliminar</td>-->
                        
             </tbody>
        </table>


        
    </div>
    
</body>
</html>