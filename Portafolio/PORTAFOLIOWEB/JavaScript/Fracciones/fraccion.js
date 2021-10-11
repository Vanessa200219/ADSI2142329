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


