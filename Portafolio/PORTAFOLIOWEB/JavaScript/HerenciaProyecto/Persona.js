class Persona{
    constructor(nombre,apellido,identificacion,numero,correo,estatus){
        this._nombre=nombre;
        this._apellido=apellido;
        this._identificacion=identificacion;
        this._numero=numero;
        this._correo=correo;
        this._estatus=estatus;
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


    get identificacion(){
        return this._identificacion;
    }

    set identificacion(identificacion){
        this._identificacion=identificacion;
    }



    get numero(){
        return this._numero;
    }


    set numero(numero){
        this._numero=numero;
    }



    get correo(){
        return this._correo;
    }


    set correo(correo){
        this._correo=correo;
    }



    get estatus(){
        return this._estatus;
    }

    set estatus(estatus){
        return this._estatus=estatus
    }

}


class Cliente extends Persona {
    constructor(nombre,apellido,identificacion,numero,correo,estatus,ciudad,direccion){
        super(nombre,apellido,identificacion,numero,correo,estatus);
        this._ciudad=ciudad;
        this._direccion=direccion;
    }


    get ciudad(){
        return this._ciudad;
    }

    set ciudad(ciudad){
        this._ciudad=ciudad;
    }


    get direccion(){
        return this._direccion;
    }

    set direccion(direccion){
        this._direccion=direccion;
    }
}


var ob1= new Cliente ('Marta','Garzon','1000002891','32456789','Marta@gmail.com',2,'Soacha','calle 30 sur n 23-32');
console.log(ob1);




