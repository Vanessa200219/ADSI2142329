<?php
interface DaoProducto{

    public function Registrar(Producto $var);
    public function Modificar(Producto $var);
    public function Eliminar(Producto $var);
    public function Listar();
}

?>






