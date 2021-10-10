<?php
if (!isset($_GET['id'])) {
    header('Location: InformacionProductos.php');
}


    include '../Dao/DaoProductoimpl.php';
    $id = $_GET['id'];

    $sentencia = $bd->prepare("SELECT * FROM productos WHERE id = ?;");
    $sentencia->execute([$id]);
    $vehiculo = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($vehiculo);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR PRODUCTO</title>
</head>
<body>

    <center>
        <h3>EDITAR PRODUCTO</h3>
        <form action="editarProceso.php" method="post">
            <table>
                <tr>
                    <td>Codigo Categoria</td>
                    <td><input type="text" name="CodigoCate2" id="" value="<?php echo $key->getCodigoCategoria(); ?>"></td>
                </tr>

                <tr>
                    <td>Nit Proveedor</td>
                    <td><input type="text" name="NitProvee2" id="" value="<?php echo $key->getNitProveedor(); ?>"></td>
                </tr>

                <tr>
                    <td>Nombre Producto</td>
                    <td><input type="text" name="NombreProducto2" id="" value="<?php echo $key->getNombreProducto(); ?>"></td>
                </tr>

                <tr>
                    <td>Valor Unitario</td>
                    <td><input type="text" name="ValorUnitario2" id="" value="<?php echo $key->getValorUnitario(); ?>"></td>
                </tr>


                <tr>  
                    <td>Cantidad</td>
                    <td><input type="text" name="Cantidad2" id="" value="<?php echo $key->getCantidad(); ?>"></td>
                </tr>



                <tr>
                    <td colspan="2"><input type="submit" value="EDITAR"></td>
                </tr>
            </table>
        </form>
    </center>
    
</body>
</html>