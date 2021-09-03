<?php

//Definir la clase

class Aprendiz{
    private $documento;
    private $nombre;
    private $ficha;


    function __construct($documento,$nombre,$ficha)
    {
        $this->documento=$documento;
        $this->nombre=$nombre;
        $this->ficha=$ficha;
    }


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


//Instaciar Objeto
$ob=new Aprendiz(654321,"Maria Iribarne",2142345);

//Uso de getter x atributo
echo $ob->getDocumento().'<br>';
echo $ob->getNombre().'<br>';
echo $ob->getFicha().'<br>';

//uso de setters x atributo
//Definir Modificaciones

echo "<br><br><br> Modificacion de los Atributos <br><br><br>";
$ob->setDocumento(123456);
$ob->setNombre("Maria Ramirez");
$ob->setFicha(2142329);

//Mostrar Modificaciones
echo $ob->getDocumento().'<br>';
echo $ob->getNombre().'<br>';
echo $ob->getFicha().'<br>';



?>