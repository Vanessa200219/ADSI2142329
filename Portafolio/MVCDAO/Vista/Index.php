<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloIndex.css">
    <title>FORMULARIO PRODUCTOS</title>
</head>
<body>
    <div class="f-div">

        <a href="">PRODUCTOS</a>

    <form action="" method="POST">

        <h1><center>REGISTRO PRODUCTO</center></h1><br><br>

        <label>CODIGO DEL PRODUCTO</label><br>
        <input type="text" name="Producto" placeholder="Ingrese Codigo Producto" required>
        <br>

        <label>CODIGO DE CATEGORIA</label><br>
        <input type="text" name="Categoria" placeholder="Ingrese Codigo ategoria" required>
        <br>

        <label>NIT PROVEEDOR</label><br>
        <input type="text" name="Proveedor" placeholder="Ingrese Nit Proveedor" required>
        <br>

        <label>NOMBRE DEL PRODUCTO</label><br>
        <input type="text" name="Nombre" placeholder="Ingrese Nombre del Producto" required>
        <br>

        <label>VALOR UNITARIO</label><br>
        <input type="text" name="Valor" placeholder="Ingrese Valor Unitario" required>
        <br>

        <label>CANTIDAD</label><br>
        <input type="number" name="Cantidad" placeholder="Ingrese la cantidad" required>
        <br><br>

        <input type="submit" name="Enviar" value="Insertar Registro">

    </form>
    <br>
    </div>
</body>
</html>