class Persona{
    constructor(nombre,apellido){
        this._nombre=nombre;
        this._apellido=apellido;
    }

    get nombre(){
        return this._nombre;
    }

    set nombre(nombre){
        this._nombre=nombre;
    }


    get apellido(){
        return this._apellido;
    }

    set apellido(apellido){
        this._apellido=apellido;
    }

    NombreCompleto(){
        return this._nombre+' '+this._apellido;
    }
}


class Aprendiz extends Persona{
    constructor(nombre,apellido,programa,ficha){
        super(nombre,apellido);
        this._programa=programa;
        this._ficha=ficha;
    }

    get programa (){
        return this._programa;
    }

    set programa(programa){
        this._programa=programa;
    }

    get ficha (){
        return this._ficha;
    }

    set ficha(ficha){
        this._ficha=ficha;
    }

}

var ob1 = new Aprendiz ('Pedro','Rojas','ADSI','2132429');
console.log(ob1);






var ob = new Persona ('Maria','Rojas');
console.log(ob.nombre);
ob.nombre='Marcela';
console.log(ob.nombre);
console.log(ob.NombreCompleto());