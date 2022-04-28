//-----------------------------------------------------------------------------------
//sweet alert libreria de alertas de javascript
//-----------------------------------------------------------------------------------
//puesta en fecha actual del input data
//-----------------------------------------------------------------------------------
window.onload = function () {
    var fecha = new Date(); //Fecha actual
    var mes = fecha.getMonth() + 1; //obteniendo mes
    var dia = fecha.getDate(); //obteniendo dia
    var ano = fecha.getFullYear(); //obteniendo año
    if (dia < 10)
        dia = '0' + dia; //agrega cero si el menor de 10
    if (mes < 10)
        mes = '0' + mes //agrega cero si el menor de 10
    document.getElementById('fecha_n').value = ano + "-" + mes + "-" + dia;
}
//-----------------------------------------------------------------------------------
//Validacion del formulario registro
//-----------------------------------------------------------------------------------
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("form_registro").addEventListener('submit', validarRegistro);
});

function validarRegistro(evento) {
    evento.preventDefault();

    var name = document.getElementById('nombres').value; //capturo value del input nombre
    var ape = document.getElementById('apellidos').value; //capturo value del input apellido
    var dni = document.getElementById('dni').value; //capturo value del input dni
    var fechaN = document.getElementById('fecha_n').value; //capturo value del input fecha nacimiento
    var correo = document.getElementById('email').value; //capturo value del input correo  
    var clave1 = document.getElementById('clave1').value; //capturo value del input clave1
    var clave2 = document.getElementById('clave2').value; //capturo value del input clave2

    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; //creo una variable para la expresion regular

    if (name.length < 3) { //si el nombre es menor a 3
        if (name.length == 0) { //si el nombre es igual a 0
            swal('No has escrito nada en el nombre', '', 'error'); //muestro un mensaje
            return; //salgo del evento submit y lo interrumpo por completo 
        } else { //  
            swal('El nombre debe tener al menos tres letras', '', 'error'); //muestro un mensaje
            return; //salgo del evento submit y lo interrumpo por completo 
        }
    }
    if (ape.length < 3) {
        if (ape.length == 0) {
            swal('No has escrito nada en el apellido', '', 'error');
            return; //salgo del evento submit y lo interrumpo por completo
        } else {
            swal('El apellido debe tener al menos tres letras', '', 'error');
            return; //salgo del evento submit y lo interrumpo por completo 
        }
    }
    if (dni.length < 7) {
        if (dni.length == 0) {
            swal('No has escrito tu DNI', '', 'error');
            return; //salgo del evento submit y lo interrumpo por completo
        } else {
            swal('El DNI debe tener al menos siete numeros', '', 'error');
            return; //salgo del evento submit y lo interrumpo por completo
        }
    }
    /*------------------------------------------------------------------------------*/
    var hoy = new Date();
    var cumpleanos = new Date(fechaN);
    var edad = hoy.getFullYear() - cumpleanos.getFullYear();
    var m = hoy.getMonth() - cumpleanos.getMonth();
    if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
        edad--;
    }
    if (edad <= 18) {
        swal("Eres menor de edad :( ", '', 'error');
        return;
    }
    /*------------------------------------------------------------------------------*/
    if (!regexEmail.test(email.value)) {
        swal('Formato de correo incorrecto', '', 'error');
        return;
    }

    if (clave1.length < 5) {
        if (clave1.length == 0) {
            swal('No cargo ninguna contraseña', '', 'error');
            return;
        } else {
            swal('La clave debe tener al menos 6 caracteres', '', 'error');
            return;
        }
    }
    if (clave2.length < 6 || clave2 != clave1) {
        swal('Repita las dos contraseñas no estan iguales', '', 'error');
        return;
    }
    this.submit();
}

//-----------------------------------------------------------------------------------
//Validacion del formulario contacto
//-----------------------------------------------------------------------------------
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("form__contacto").addEventListener('submit', validarContacto);
});

function validarContacto(evento) {
    evento.preventDefault();
    var name = document.getElementById('nombres').value; //capturo value del input nombre
    var correo = document.getElementById('email').value; //capturo value del input correo
    var mensaje = document.getElementById('mensaje').value; //capturo value del input mensaje

    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if (name.length < 3) {
        if (name.length == 0) {
            swal('No has escrito nada en el nombre', '', 'error');
            return;
        } else {
            swal('El nombre debe tener al menos tres letras', '', 'error');
            return;
        }
    }

    if (!regexEmail.test(email.value)) {//si el email no cumple la expresion regular
        swal('Formato de correo incorrecto', '', 'error');
        return;
    }

    if (mensaje.length < 5) {
        if (mensaje.length == 0) {//si el mensaje es igual a 0
            swal('No has escrito nada en el mensaje', '', 'error');
            return;//salgo del evento submit y lo interrumpo por completo
        } else {
            swal('El mensaje debe tener al menos cinco letras', '', 'error');
            return;//salgo del evento submit y lo interrumpo por completo
        }
    }
    this.submit();//si todo esta bien envio el formulario
    mi_Envio('contacto1.html', '_blank');//llamo a la funcion mi_Envio
 }

//-----------------------------------------------------------------------------------
//Validacion del formulario login
//-----------------------------------------------------------------------------------
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("form__login").addEventListener('submit', validarLogin);
});

function validarLogin(evento) {
    evento.preventDefault();
    var correo = document.getElementById('email').value;
    var clave1 = document.getElementById('clave').value;

    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if (!regexEmail.test(email.value)) {
        swal('Formato de correo incorrecto', '', 'error');
        return;
    }
    if (clave1.length < 6) {
        if (clave1.length == 0) {
            swal('No cargo ninguna contraseña', '', 'error');
            return;
        } else {
            swal('La contraseña debe tener al menos seis letras', '', 'error');
            return;
        }
    }
    this.submit();
}