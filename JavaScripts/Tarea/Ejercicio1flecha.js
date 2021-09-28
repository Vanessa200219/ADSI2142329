



var llenarvector1=(arreglo,tam)=>{
    for (let i = 0; i < tam; i++) {
    arreglo.push(Math.round(Math.random()*100));
    
}
    return arreglo;
}

let vec=new Array();
console.log(llenarvector1(vec,5));


//SUMA
let suma = (num1, num2) => num1 + num2;
console.log("La Suma es: " +vec.reduce(suma));


//RESTA
let resta = (num1) => num1 - 5;
console.log("La Resta es: " +vec.reduce(resta));

//DIVISION
let division = (num1, x) => num1 / x;
console.log("La Division es: " +vec.reduce(division));

//MULTIPLICACION
let multiplicacion = (num1, num2) => num1 * num2;
console.log("La Multiplicacion es: " +vec.reduce(multiplicacion));