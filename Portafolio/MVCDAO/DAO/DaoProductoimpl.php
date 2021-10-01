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
        $CodigoProducto=$var->getCodigoProducto();
        $CodigoCategoria=$var->getCodigoCategoria();
        $NitProveedor=$var->getNitProveedor();
        $NombreProducto=$var->getNombreProducto();
        $ValorUnitario=$var->getValorUnitario();
        $Cantidad=$var->getCantidad();
        $stmt=$this->getCnx()->prepare("UPDATE productos " +
        "SET Codigo_Categoria =$CodigoCategoria," +
        "Nit_Proveedor =$NitProveedor," +
       "Nombre_Producto = $NombreProducto" +
       "Valor_Unitario = $ValorUnitario" +
       "Cantidad = $Cantidad" +
        "where Codigo_Producto =$CodigoProducto");
        $stmt->execute();
    }


    public function Eliminar(Producto $var)
    {
        # code...
    }


    public function Listar()
    {
        $lista = null;
        try {
            $stmt = $this->getCnx()->prepare("SELECT * FROM productos");
            $lista = array();
            $stmt->execute();

            foreach ($stmt as $key) {
                $a = new Producto(null,null,null,null,null,null);
                $a->setCodigoProducto($key['Codigo_Producto']);
                $a->setCodigoCategoria($key['Codigo_Categoria']);
                $a->setNitProveedor($key['Nit_Proveedor']);
                $a->setNombreProducto($key['Nombre_Producto']);
                $a->setValorUnitario($key['Valor_Unitario']);
                $a->setCantidad($key['Cantidad']);
                array_push($lista,$a); 
            }
        } catch (PDOException $e) {
            $e->getMessage().'error en listar de DaoAprendizImpl';
        }

        return $lista;
    }

}//Llave Clase


?>