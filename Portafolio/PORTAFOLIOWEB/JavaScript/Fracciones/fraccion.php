<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/inicio.css">
    <script src="fraccion.js"></script>
    <title>Fraccionarios</title>
</head>
<body>
    <div class="dropdown">

        <div class="contenedor">
            <nav class="navegacion">
                <ul class="menu">
                    <li><a href="https://localhost/ADSI2142329/Portafolio/PORTAFOLIOWEB/JavaScript/java.php"><p id="estructura"><strong>INICIO</strong></p></a></li>
                    <li><a href="../FuncionesFlecha/flecha.php"><p id="estructura"><strong>FUNCIONES FLECHAS</strong></p></a></li>
                    <li><a href="../HerenciaProyecto/herencia.php"><p id="estructura"><strong>HERENCIA</strong></p></a></li>
                    <li><a href="fraccion.php"><p id="estructura"><strong>FRACCIONARIOS</strong></p></a></li>
                </ul>
            </nav>
        </div>
    </div>


    <div>
        <form name="formulario1">
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

    
</body>
</html>