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
console.log("SUMA");
function suma1(num1, num2) {
    num1 + num2;
    
}
console.log("La Suma es: " +vec.reduce(suma));


//RESTA
console.log("RESTA");
function resta1(res) {
   for(let i = 0; i <= vec.length; i++){
    res -= vec[i];
    } 
    return res;
    
}
console.log(resta1());

//DIVISION
console.log("DIVICION");
function division1(div) {
   for(let i = 0; i <= vec.length; i++){
    div /= vec[i];
    } 
    return div;
    
}
console.log(division1());

//MULTIPLICACION

console.log("MULTIPLICACION");
function multiolicacion1(multi) {
   for(let i = 0; i <= vec.length; i++){
    multi *= vec[i];
    } 
    return multi;
    
}
console.log(multiolicacion1());

//MEDIA

console.log("MEDIA");
function media1(medi) {
   for(let i = 0; i <= vec.length; i++){
    medi = vec[i];
    } 
    return medi;
    
}
console.log(media1());

//MODA

console.log("MODA");
function moda1(mod) {
   for(let i = 0; i <= vec.length; i++){
    mod = vec[i];
    } 
    return mod;
    
}
console.log(moda1());
