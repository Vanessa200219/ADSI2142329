<?php

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

    //reemplazar los 3 setters por uno

    function setter($atributo,$valor){
        $this->$atributo=$valor;
    }


    //Metodos GETTERS obtener el valor de la clase
    //reemplazar tres getter por uno 
    //Este parámetro necesita solo el string del nombre
    //ejemplo "documento"

    function getter($nombreAtributo){
        return $this->$nombreAtributo;
    }


}//Llave de clase


//Instaciar Objeto
$ob=new Aprendiz(654321,"Maria Iribarne",2142345);

//uso de getter abreviado
echo $ob->getter("nombre").'<br>';
echo $ob->getter("ficha").'<br>';
echo $ob->getter("documento").'<br>';

//uso de setters abreviados
//Definir Modificaciones
$ob->setter("documento",99999);
$ob->setter("nombre","Paola Turbay");
$ob->setter("ficha",2142329);

//Mostrar Modificaciones

echo $ob->getter("nombre").'<br>';
echo $ob->getter("ficha").'<br>';
echo $ob->getter("documento").'<br>';
?>