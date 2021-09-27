function llenarvector(arreglo,tam) {
    for (let i = 0; i < tam; i++) {
        arreglo.push(Math.round(Math.random()*100));
        
    }
    return arreglo;
}

//Vec Remplaza a arreglo
//X Reemplaza a tam
let vec=new Array();
let x=10;
llenarvector(vec,x);
console.log(vec);

vec.pop();
console.log(vec);

    
vec.shift();
console.log(vec);

vec.unshift(30);
console.log(vec);
