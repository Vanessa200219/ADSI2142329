<?php  

class Producto{
    private $CodigoProducto;
    private $CodigoCategoria;
    private $NitProveedor;
    private $NombreProducto;
    private $ValorUnitario;
    private $Cantidad;



    function __construct($CodigoProducto,$CodigoCategoria,$NitProveedor,$NombreProducto,$ValorUnitario,$Cantidad)
    {
        $this->CodigoProducto=$CodigoProducto;
        $this->CodigoCategoria=$CodigoCategoria;
        $this->NitProveedor=$NitProveedor;
        $this->NombreProducto=$NombreProducto;
        $this->ValorUnitario=$ValorUnitario;
        $this->Cantidad=$Cantidad;
    }


    //Codigo de Producto GET Y SET
    function getCodigoProducto()
    {
        return $this->CodigoProducto;
    }


    function setCodigoProducto($CodigoProducto)
    {
        $this->CodigoProducto=$CodigoProducto;
    }


    //Codigo de Categoria SET Y GET
    function getCodigoCategoria()
    {
        return $this->CodigoCategoria;
    }


    function setCodigoCategoria($CodigoCategoria)
    {
        $this->CodigoCategoria=$CodigoCategoria;
    }


    //Nit Proveedor SET Y GET
    function getNitProveedor()
    {
        return $this->NitProveedor;
    }


    function setNitProveedor($NitProveedor)
    {
        $this->NitProveedor=$NitProveedor;
    }

    //Nombre de Producto SET Y GET 

    function getNombreProducto()
    {
        return $this->NombreProducto;
    }


    function setNombreProducto($NombreProducto)
    {
        $this->NombreProducto=$NombreProducto;
    }


    //Valor Unitario
    function getValorUnitario()
    {
        return $this->ValorUnitario;
    }


    function setValorUnitario($ValorUnitario)
    {
        $this->ValorUnitario=$ValorUnitario;
    }


    //Cantidad SET Y GET
    function getCantidad()
    {
        return $this->Cantidad;
    }


    function setCantidad($Cantidad)
    {
        $this->Cantidad=$Cantidad;
    }
    
}//Llave de Clase




?>