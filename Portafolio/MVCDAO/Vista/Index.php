<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>FORMULARIO PRODUCTOS</title>
</head>
<body>
    <div class="f-div">

    <!-- HEADER DE RUTAS Y DESCARGAS -->
        <div id="header">
            
            <a class="return " href="../../PORTAFOLIOWEB/">PORTAFOLIO</a>
            <a class="products " href="InformacionProductos.php">PRODUCTOS</a>
            <a class="products " href="../../CRUD../index.php">CRUD COMPLETO</a>

        </div>

    <!-- FIN DE HEADER RUTAS Y DESCARGAS -->
        
    

    <!-- MENSAJE DE REGISTRO -->
        <section class="message">
            <div class="message__text">
                <?php
                    include("../Controlador/ProductoRegistro.php");
                ?>
            </div>
        </section> 
    <!-- FIN DE MENSAJE REGISTRO -->


    <!-- FORMULARIO -->
    <div class="div__form">

        <form class="form__items" action="" method="GET">

            <h1 class="tittle">REGISTRO PRODUCTO</h1>

            <label>CODIGO DEL PRODUCTO</label>
            <input type="number" name="Producto" placeholder="Ingrese Codigo Producto" required><br><br>


            <label>CODIGO DE CATEGORIA</label>
            <input type="number" name="Categoria" placeholder="Ingrese Codigo ategoria" required><br><br>
            

            <label>NIT PROVEEDOR</label>
            <input type="text" name="Proveedor" placeholder="Ingrese Nit Proveedor" required><br><br>
        

            <label>NOMBRE DEL PRODUCTO</label>
            <input type="text" name="Nombre" placeholder="Ingrese Nombre del Producto" required><br><br>
            

            <label>VALOR UNITARIO</label>
            <input type="text" name="Valor" placeholder="Ingrese Valor Unitario" required><br><br>
            

            <label>CANTIDAD</label>
            <input type="number" name="Cantidad" placeholder="Ingrese la cantidad" required>


            <input type="submit" name="Enviar" value="Insertar Registro">

            
    <a class="download" href="Archivos/mvc.sql" download="basededatos.sql">DESCARGAR MYSQL</a> 

        </form>
        
    </div>      
    
    

    </div>
</body>
</html>