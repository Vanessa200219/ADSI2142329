<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estilo.css">
    <script src="Persona.js"></script>
    <title>HERENCIA JAVASCRIPT</title>
</head>
<body>


    <!-- HEADER DE RUTAS Y DESCARGAS -->
    <div id="header">
            
            <a class="return  header" href="../../../PORTAFOLIOWEB/">PORTAFOLIO</a>

        </div>

    <!-- FIN DE HEADER RUTAS Y DESCARGAS -->
    
    <br>
    <h1><center>HERENCIA CON JAVASCRIPT</center></h1>
<pre>
class Persona{
    constructor(nombre,apellido,identificacion,numero,correo,estatus){
        this._nombre=nombre;
        this._apellido=apellido;
        this._identificacion=identificacion;
        this._numero=numero;
        this._correo=correo;
        this._estatus=estatus;
    }


    get nombre(){
        return this._nombre;
    }

    set nombre(nombre){
        this._nombre=nombre;
    }
  


    get apellido(){
        return this._apellido;
    }

    set apellido(apellido){
        this._apellido=apellido;
    }


    get identificacion(){
        return this._identificacion;
    }

    set identificacion(identificacion){
        this._identificacion=identificacion;
    }



    get numero(){
        return this._numero;
    }


    set numero(numero){
        this._numero=numero;
    }



    get correo(){
        return this._correo;
    }


    set correo(correo){
        this._correo=correo;
    }



    get estatus(){
        return this._estatus;
    }

    set estatus(estatus){
        return this._estatus=estatus
    }

}


class Cliente extends Persona {
    constructor(nombre,apellido,identificacion,numero,correo,estatus,ciudad,direccion){
        super(nombre,apellido,identificacion,numero,correo,estatus);
        this._ciudad=ciudad;
        this._direccion=direccion;
    }


    get ciudad(){
        return this._ciudad;
    }

    set ciudad(ciudad){
        this._ciudad=ciudad;
    }


    get direccion(){
        return this._direccion;
    }

    set direccion(direccion){
        this._direccion=direccion;
    }
}


var ob1= new Cliente ('Marta','Garzon','1000002891','32456789','Marta@gmail.com',2,'Soacha','calle 30 sur n 23-32');
console.log(ob1);

<br>
</pre>


  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1>2021</h1>
      </div>
    </div>
        
      
  </section>
  <!-- End Footer -->
</body>
</html>