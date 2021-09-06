<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>HERENCIA CON METODOS</title>
</head>
<body>

    <section>
    <?php

class Bibloteca
{
    //es yna coleccion de materiales
    protected $coleccion; //llenar libros y revistas

    function __construct(){
        $this->coleccion=array();
    }


    function Adicionar($material)
    {
        array_push($this->coleccion,$material);
    }


    function verMaterial()
    {
        for ($i=0; $i <count($this->coleccion); $i++) { 

            if ($this->coleccion[$i]=="Revista") {
                echo $this->coleccion[$i]->getter("tipoMaterial");
            }else
                echo $this->coleccion[$i]->getter("tipoMaterial");
        }
    }

    
    
}

class Material extends Bibloteca {

    protected $tipoMaterial;
    protected $codigo;
    protected $autor;
    protected $titulo;
    protected $año;

    function __construct($tipoMaterial,$codigo,$autor,$titulo,$año)
    {
        $this->tipoMaterial=$tipoMaterial;
        $this->codigo=$codigo;
        $this->autor=$autor;
        $this->titulo=$titulo;
        $this->año=$año;

    }

    function AltaMaterial()
    {
        print "Alta Material";
    }

    function BajaMaterial()
    {
        print "Baja Material";
    }

    function CambiarMaterial()
    {
        print "Cambiar Material";
    }

    

    function setTipoMaterial($tipoMaterial){
        $this->tipoMaterial = $tipoMaterial;
    }

    function getTipoMaterial(){
        return $this->tipoMaterial;
    }


    function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    function getCodigo(){
        return $this->codigo;
    }


    function setAutor($autor){
        $this->autor = $autor;
    }

    function getAutor(){
        return $this->autor;
    }


    function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    function getTitulo(){
        return $this->titulo;
    }


    function setAño($año){
        $this->año = $año;
    }

    function getAño(){
        return $this->año;
    }


    


    
    }   

    
    
    
    class Libro extends Material{

        protected $editorial;

        function __construct($tipoMaterial,$codigo,$autor,$titulo,$año,$editorial)
        {
            parent::__construct($tipoMaterial,$codigo,$autor,$titulo,$año);
            $this->editorial=$editorial;

        }

        function setter($atributo,$valor){
            $this->$atributo=$valor;
        }


        function getter($nombreAtributo){
            return $this->$nombreAtributo;
        }



        
    }



    class Revista extends Material{

        protected $volumen;

        function __construct($tipoMaterial,$codigo,$autor,$titulo,$año,$volumen)
        {
            parent::__construct($tipoMaterial,$codigo,$autor,$titulo,$año);
            $this->volumen=$volumen;

        }

        function setter($atributo,$valor){
            $this->$atributo=$valor;
        }


        function getter($nombreAtributo){
            return $this->$nombreAtributo;
        }



        
    }
    
    

    echo '<br><br>';
    $obj= new Bibloteca ("Libro");
    $obj->verMaterial("");
    $obj= new Libro("Libro",143385,"Gabriel Garcia marquez","Cien años de Soledad",1967,"Mondadori Debolsillo");
    echo $obj->getter("tipoMaterial").'<br><br>';
    echo "<br> Material: <br><br>";
    $obj->AltaMaterial();
    echo "<br><br>";
    $obj->BajaMaterial();
    echo "<br><br>";
    $obj->CambiarMaterial();
    echo "<br><br><br> Caracteristicas: <br><br>";

    //uso de getter abreviado
    echo "Tipo de Material: ";
    echo $obj->getter("tipoMaterial").'<br><br>';
    echo "Codigo: ";
    echo $obj->getter("codigo").'<br><br>';
    echo "Autor: ";
    echo $obj->getter("autor").'<br><br>';
    echo "Titulo : ";
    echo $obj->getter("titulo").'<br><br>';
    echo "Año: ";
    echo $obj->getter("año").'<br><br>';
    echo "Editorial: ";
    echo $obj->getter("editorial").'<br><br>';


    //Nuevo Instaciamineto 
    echo '<br><br>';
    $obj= new Bibloteca ("Libro");
    $obj= new Libro("Libro",143385,"Fiódor Dostoyevski","Crimen y castigo",1866,"Alma");
    echo $obj->getter("tipoMaterial").'<br><br>';
    echo "<br> Material: <br><br>";
    $obj->AltaMaterial();
    echo "<br><br>";
    $obj->BajaMaterial();
    echo "<br><br>";
    $obj->CambiarMaterial();
    echo "<br><br><br> Caracteristicas: <br><br>";

    //uso de getter abreviado
    echo "Tipo de Material: ";
    echo $obj->getter("tipoMaterial").'<br><br>';
    echo "Codigo: ";
    echo $obj->getter("codigo").'<br><br>';
    echo "Autor: ";
    echo $obj->getter("autor").'<br><br>';
    echo "Titulo : ";
    echo $obj->getter("titulo").'<br><br>';
    echo "Año: ";
    echo $obj->getter("año").'<br><br>';
    echo "Editorial: ";
    echo $obj->getter("editorial").'<br><br>';



    //Nuevo Instaciamineto para Revista
    echo '<br><br>';
    $obj= new Bibloteca ("Revista");
    //$tipoMaterial,$autor,$titulo,$año,$volumen
    $obj= new Revista("Revista","123123","Publicaciones Semana","Revista Semana",1999,"0124-5473");
    echo $obj->getter("tipoMaterial").'<br><br>';
    echo "<br> Material: <br><br>";
    $obj->AltaMaterial();
    echo "<br><br>";
    $obj->BajaMaterial();
    echo "<br><br>";
    $obj->CambiarMaterial();
    echo "<br><br><br> Caracteristicas: <br><br>";

    //uso de getter abreviado
    echo "Tipo de Material: ";
    echo $obj->getter("tipoMaterial").'<br><br>';
    echo "Autor: ";
    echo $obj->getter("autor").'<br><br>';
    echo "Codigo: ";
    echo $obj->getter("codigo").'<br><br>';
    echo "Titulo : ";
    echo $obj->getter("titulo").'<br><br>';
    echo "Año: ";
    echo $obj->getter("año").'<br><br>';
    echo "Volumen: ";
    echo $obj->getter("volumen").'<br><br>';



    /*echo "<br>Modificacion: <br><br> ";

    //uso de setters abreviados
    //Definir Modificaciones
    $obj->setter("tipoMaterial","Revista");
    $obj->setter("codigo",2142329);
    $obj->setter("autor","Anonimo");
    $obj->setter("titulo","Revista Tu");
    $obj->setter("año",2004);
    $obj->setter("editorial","anonimo");


    echo "Tipo de Material: ";
    echo $obj->getter("tipoMaterial").'<br><br>';
    echo "Codigo: ";
    echo $obj->getter("codigo").'<br><br>';
    echo "Autor: ";
    echo $obj->getter("autor").'<br><br>';
    echo "Titulo : ";
    echo $obj->getter("titulo").'<br><br>';
    echo "Año: ";
    echo $obj->getter("año").'<br><br>';
    echo "Editorial: ";
    echo $obj->getter("editorial").'<br><br>';*/

   

    

 ?>
    </section>
</body>
</html>