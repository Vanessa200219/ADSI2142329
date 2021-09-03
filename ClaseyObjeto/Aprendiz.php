<?php

//Definir la clase

class Aprendiz{
    private $documento;
    private $nombre;
    private $ficha;


    //Metodos Setters indicar el valor de la clase

    function setDocumento($documento)
    {
       $this->documento=$documento;
    }

    function setNombre($nombre)
    {
        $this->nombre=$nombre;
    }

    function setFicha($ficha)
    {
        $this->ficha=$ficha;
    }


    //Metodos GETTERS obtener el valor de la clase


    function getDocumento()
    {
        return $this->documento;
    }

    function getNombre()
    {
        return $this->nombre;
    }

    function getFicha()
    {
        return $this->ficha;
    }


}//Llave de clase





?>