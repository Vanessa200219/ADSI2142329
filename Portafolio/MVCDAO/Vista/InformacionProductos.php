<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloInformacionProductos.css">
    <title>INFORMACION PRODUCTOS</title>
</head>
<body>

    <div class="div">


    <a href="Index.php">Registrar Producto</a>

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
                     <th>Accion</th>
                 </tr>
             </thead>
             <tbody>
                 <?php 
                 require('../Controlador/ProductoListar.php');  
                    foreach ($Productos as $key) {
                        echo "<tr><td>".$key->getCodigoProducto(). "</td>";
                        echo "<td>".$key->getCodigoCategoria(). "</td>";
                        echo "<td>".$key->getNitProveedor(). "</td>";
                        echo "<td>".$key->getNombreProducto(). "</td>";
                        echo "<td>".$key->getValorUnitario(). "</td>";
                        echo "<td>".$key->getCantidad(). "</td>";
                        echo "<td> <a href='indexEditarProducto.php?Codigo=".$key->getCodigoProducto()."'><button>Modificar</button></a> 
                                    <input type='submit' value='Eliminar' name='Eliminar'>";
                        echo "</tr>";
                    }
                 
                 ?>
                        <!--<td>Editar/Eliminar</td>-->
                        
             </tbody>
        </table>

        
    </div>
    
</body>
</html>