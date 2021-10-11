function algoritmo()
{
    let dividendo_1, dividendo_2, divisor_1, divisor_2, resultado;
    dividendo_1 = parseFloat (document.formulario1.dividendo_1.value);
    dividendo_2 = parseFloat (document.formulario1.dividendo_2.value);
    divisor_1 = parseFloat (document.formulario1.divisor_1.value);
    divisor_2 = parseFloat (document.formulario1.divisor_2.value);
    resultado=(divisor_1*dividendo_2+divisor_2*dividendo_1)/(divisor_1+divisor_2);
    document.formulario1.resultado.value = resultado;
}