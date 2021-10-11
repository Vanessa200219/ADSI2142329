<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estilo.css">
    <script src="flecha.js"></script>
    <title>JAVASCRIPT</title>
</head>
<body>
    <div class="dropdown">

    <!-- HEADER DE RUTAS Y DESCARGAS -->
    <div id="header">
            
            <a class="return  header" href="../../../PORTAFOLIOWEB/">PORTAFOLIO</a>
            <a class="products header" href="../java.php">JAVASCRIPT</a> 
            <a class="products header" href="../Fracciones/fraccion.php">FRACCIONARIOS</a>

        </div>

    <!-- FIN DE HEADER RUTAS Y DESCARGAS -->


<br>

<h1><center>FUNCION DE FRACCIONARIOS JAVASCRIPT</center></h1>


<pre>

var llenarvector1=(arreglo,tam)=>{
    for (let i = 0; i < tam; i++) {
    arreglo.push(Math.round(Math.random()*5));
    
}
    return arreglo;
}



let vec=new Array();
let x=5;
console.log(llenarvector1(vec,x));



//SUMA
var suma = (num1, num2) => num1 + num2;
console.log("La Suma es: " +vec.reduce(suma));



//ARRAY MAYOR
var mayor =vec=> Math.max(...vec);
console.log('El mayor del Array es: '+ mayor(vec));



//ARRAY MENOR
var menor =vec=> Math.min(...vec);
console.log('El menor del Array es: '+menor(vec));



//PROMEDIO
var promedio=vec=>{
    let suma=0;
    for (let i = 0; i < vec.length; i++) {       
            suma += vec[i];
    }
    return suma /x;
}
console.log('El Promedio del array es: '+promedio(vec)); 


//MEDIANA
var media =vec=>{
    let num1 = Math.floor((vec.length - 1) / 2);
    let num2 = Math.ceil((vec.length - 1) / 2);
    let mediana = (vec[num1] + vec[num2]) / 2;
    return mediana;
}
console.log('La Mediana es: '+media(vec)); 


//MULTIPLICACION
var multiplicacion=vec=>{
    let multi=0;
    for (let i = 0; i < vec.length; i++) {       
            multi += vec[i];
    }
    return multi *x;
}
console.log('La multiplicacion del array es: '+multiplicacion(vec));    






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