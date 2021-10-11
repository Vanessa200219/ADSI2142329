<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estilo.css">
    <script src="algoritmo.js"></script>
    <script src="fraccion.js"></script>
    <title>Fraccionarios</title>
</head>
<body>
    <!-- HEADER DE RUTAS Y DESCARGAS -->
    <div id="header">
            
            <a class="return  header" href="../../../PORTAFOLIOWEB/">PORTAFOLIO</a>
            <a class="products header" href="../java.php">JAVASCRIPT</a> 
            <a class="products header" href="../FuncionesFlecha/flecha.php">FUNCIONES FLECHA</a>

        </div>

    <!-- FIN DE HEADER RUTAS Y DESCARGAS -->


    <div class="contenedor">
          <form name="formulario1" class="formulario1">
        <table style="text-align: left; margin-left: auto; margin-right: auto;">
            <tbody>
                <tr>
                    <td>
                        <label for="dividendo_1">Ingresa el valor de dividendo 1:</label>
                    </td>
                    <td>
                        <input name="dividendo_1" required="required" step="0.000001" type="number" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dividendo_2">Ingresa el valor de dividendo 2:</label>
                    </td>
                    <td>
                        <input name="dividendo_2" required="required" step="0.000001" type="number" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="divisor_1">Ingresa el valor de divisor 1:</label>
                    </td>
                    <td>
                        <input name="divisor_1" required="required" step="0.000001" type="number" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="divisor_2">Ingresa el valor de divisor 2:</label>
                    </td>
                    <td>
                        <input name="divisor_2" required="required" step="0.000001" type="number" />
                    </td>
                </tr>
                <tr align="center">
                    <td colspan="2" rowspan="1">
                        <input value="Procesar" class="resultado" type="button" onclick="algoritmo();" />
                        <input class="resultado1" type="reset" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="resultado">Valor de resultado:</label>
                    </td>
                    <td>
                        <input name="resultado" step="0.000001" type="number" />
                    </td>
                </tr>
            </tbody>
        </table>
        </form>
    </div>


    <h1><center>FUNCION DE FRACCIONARIOS JAVASCRIPT</center></h1>


<pre>
        var frac={
    numerador1:5,
    numerador2:3,
    denominador1:8,
    denominador2:2,
    suma:function(){
        nume1=this.numerador1 * this.denominador2;
        num2=this.numerador2 * this.denominador1;
        num3=nume1 + num2;
        num4=this.denominador1 * this.denominador2;
        return 'La suma de fraccion es: '+ num3 + ' / ' + num4;
    },


    resta:function(){
        num5=this.numerador1 * this.denominador2;
        num6=this.numerador2 * this.denominador1;
        num7=nume1 - num2;
        num8=this.denominador1 * this.denominador2;
        return 'La resta de fraccion es: '+ num7 + ' / ' + num8;
    },


    multi:function(){
        num9=this.numerador1 * this.numerador2;
        num10=this.denominador1 * this.denominador2;
        return 'La multiplicacion de fraccion es: '+ num9 + ' / ' +num10;
    },


    divi:function(){
        num11=this.numerador1 * this.denominador2;
        num12=this.numerador2 * this.denominador1;
        return 'La division de fraccion es: '+ num11 + ' / ' +num12;
    }
}

    console.log(frac.suma());

    console.log(frac.resta());

    console.log(frac.multi());

    console.log(frac.divi());

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