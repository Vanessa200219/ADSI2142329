//Tamaño de Numeros

function llenarvector(arreglo,tam) {
    for (let i = 0; i < tam; i++) {
        arreglo.push(Math.round(Math.random()*10));
        
    }
    return arreglo;
}

//Vec Remplaza a arreglo
//X Reemplaza a tam
let vec=new Array();
let x=4;
llenarvector(vec,x);
console.log("los numeros son:");
console.log(vec);


//SUMA
function suma(vec) {
    let sumar=0;
    for (let i = 0; i < vec.length; i++) {       
        sumar += vec[i];
    }
    return sumar;
}

console.log("La Suma es: " +suma(vec));


//PROMEDIO
function promedio(vec) {
    let suma=0;
    for (let i = 0; i < vec.length; i++) {       
        suma += vec[i];
    }
    return suma /x;
}
console.log('El Promedio del array es: '+promedio(vec)); 


//MEDIANA
function media(vec) {
    let num1 = Math.floor((vec.length - 1) / 2);
    let num2 = Math.ceil((vec.length - 1) / 2);
    let mediana = (vec[num1] + vec[num2]) / 2;
    return mediana;
}
console.log('La Mediana es: '+media(vec)); 


//MULTIPLICACION
function multiplicacion(vec) {
    let multi=0;
    for (let i = 0; i < vec.length; i++) {       
            multi += vec[i];
    }
    return multi *x;
}
console.log('La multiplicacion del array es: '+multiplicacion(vec)); 