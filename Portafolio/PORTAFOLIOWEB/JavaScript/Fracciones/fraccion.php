<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/java.css">
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
            <table>
                <tbody>
                    <tr>
                        <td>
                            <label for="divisor_1">Ingresa el valor de dividendo 1:</label>
                        </td>
                        <td>
                            <input name="divisor_1" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="divisor_2">Ingresa el valor de dividendo 2:</label>
                        </td>
                        <td>
                            <input name="divisor_2" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="dividendo_1">Ingresa el valor de divisor 1:</label>
                        </td>
                        <td>
                            <input name="dividendo_1" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="dividendo_2">Ingresa el valor de divisor 2:</label>
                        </td>
                        <td>
                            <input name="dividendo_2" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>




                    <tr align="center">
                        <td>
                            <input class="resultado" value="Resultado" type="button" onclick="suma();" />
                        </td>
                    </tr>



                    
                    <tr>
                        <td>
                            <label for="Resultado">Valor de resultado:</label>
                        </td>
                        <td>
                            <input name="resultado" step="0.000001" type="number" />
                        </td>
                    </tr>




                    <tr align="center">
                        <td colspan="2" rowspan="1">
                            <input class="resultado1" type="reset" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>


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