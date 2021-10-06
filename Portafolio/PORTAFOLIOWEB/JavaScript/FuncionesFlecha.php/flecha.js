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




