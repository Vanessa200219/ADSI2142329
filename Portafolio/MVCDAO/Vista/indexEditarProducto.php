<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICAR PRODUCTO</title>
</head>
<body>
    <form action="'../Controlador/EditarProducto.php'" method="">

        <h1><center>MODIFICACION PRODUCTO</center></h1><br><br>

        <label>CODIGO DE CATEGORIA</label><br>
        <input type="number" name="Categoria" value="<?php echo $consulta['Codigo_Categoria']?>">
        <br>

        <label>NIT PROVEEDOR</label><br>
        <input type="text" name="Proveedor" value="<?php echo $consulta['Nit_Proveedor']?>">
        <br>

        <label>NOMBRE DEL PRODUCTO</label><br>
        <input type="text" name="Nombre" value="<?php echo $consulta['Nombre_Producto']?>">
        <br>

        <label>VALOR UNITARIO</label><br>
        <input type="text" name="Valor" value="<?php echo $consulta['Valor_Unitario']?>">
        <br>

        <label>CANTIDAD</label><br>
        <input type="number" name="Cantidad" value="<?php echo $consulta['Cantidad']?>">
        <br><br>

        <input type="submit" name="Modificar" value="Modificar Producto">

    </form>
    
</body>
</html>