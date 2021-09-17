<?php
include('daoProducto.php');
include('../Conexion/Conexion.php');
include('../Modelo/Producto.php');


class DaoProductoImpl extends Conexion implements daoProducto{
    
    public function Registrar(Producto $var)
    {
        try {
            if($this->getCnx()!=null) {
                $CodigoProducto=$var->getCodigoProducto();
                $CodigoCategoria=$var->getCodigoCategoria();
                $NitProveedor=$var->getNitProveedor();
                $NombreProducto=$var->getNombreProducto();
                $ValorUnitario=$var->getValorUnitario();
                $Cantidad=$var->getCantidad();
                $sql="INSERT INTO productos VALUES(?,?,?,?,?,?)";
                $stmt=$this->getCnx()->prepare($sql);
                $stmt->execute([$CodigoProducto,$CodigoCategoria,$NitProveedor,$NombreProducto,$ValorUnitario,$Cantidad]);
            }else {
                echo $this->getCnx().' *NULO* <br>';
            }
        } catch (PDOException $p) {
            echo $p->getMessage().'*********ERROR**************';
        }
    }


    public function Modificar(Producto $var)
    {
        # code...
    }


    public function Eliminar(Producto $var)
    {
        # code...
    }


    public function Listar()
    {
        # code...
    }
}//Llave Clase


?>