<?php  
	if (!isset($_POST['oculto'])) {
		exit();
	}

	include 'model/conexion.php';
	$Categoria = $_POST['txtCategoria'];
	$Proveedor = $_POST['txtProveedor'];
	$Producto = $_POST['txtProducto'];
	$Valor = $_POST['txtValor'];
	$Cantidad = $_POST['txtCantidad'];

	$sentencia = $bd->prepare("INSERT INTO productos(Codigo_Categoria,Nit_Proveedor,Nombre_Producto,Valor_Unitario,Cantidad) VALUES (?,?,?,?,?);");
	$resultado = $sentencia->execute([$Categoria,$Proveedor,$Producto,$Valor,$Cantidad]);

	if ($resultado === TRUE) {
		//echo "Insertado correctamente";
		header('Location: index.php');
	}else{
		echo "Error";
	}
?>