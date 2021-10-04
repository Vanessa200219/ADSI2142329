<?php 

//require('../Vistas/indexEditarProducto.php');
require('../DAO/DaoProductoimpl.php');

$dao=new DaoProductoImpl();
if (isset($_GET['Modificar'])) {
    $CodigoCategoria=$_GET['Categoria'];
    $NitProveedor=$_GET['Proveedor'];
    $NombreProducto=$_GET['Nombre'];
    $ValorUnitario=$_GET['Valor'];
    $Cantidad=$_GET['Cantidad'];

    $var=new Producto($CodigoCategoria,$NitProveedor,$NombreProducto,$ValorUnitario,$Cantidad);
    $dao->Modificar($var);
    
    echo "REGISTRO INSERTADO CON EXITO";
    
    
}



?>