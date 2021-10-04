<?php 

//require('../Vistas/Index.php');
require('../DAO/DaoProductoimpl.php');

$dao=new DaoProductoImpl();
if (isset($_GET['Enviar'])) {
    $CodigoProducto=$_GET['Producto'];
    $CodigoCategoria=$_GET['Categoria'];
    $NitProveedor=$_GET['Proveedor'];
    $NombreProducto=$_GET['Nombre'];
    $ValorUnitario=$_GET['Valor'];
    $Cantidad=$_GET['Cantidad'];


    $var=new Producto($CodigoProducto,$CodigoCategoria,$NitProveedor,$NombreProducto,$ValorUnitario,$Cantidad);
    $dao->Registrar($var);

    
    
    //echo "REGISTRO INSERTADO CON EXITO";
    
    
}



?>