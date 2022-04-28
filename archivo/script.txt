
//funcion para validar el formulario de registro
document.getElementById("btn__iniciar-sesion").addEventListener("click",iniciarSesion);

//funcion para validar el formulario de registro
document.getElementById("btn__registrarse").addEventListener("click",registrarse_1);

//funcion para validar el formulario de registro
window.addEventListener("resize",anchoPagina);

var contenedor_login_registro=document.querySelector(".contenedor__login-registro");
var formulario_login=document.querySelector(".formulario__login");
var formulario_registro=document.querySelector(".formulario__registro");
var caja_trasera_login=document.querySelector(".caja__trasera_login"); 
var caja_trasera_registro=document.querySelector(".caja__trasera_registro");

//----------------------------------------------------------------------------------------------------------------------
function anchoPagina(){//funcion para modificar el codigo html 
    if (window.innerWidth>850){//Si el ancho de la pantalla es mayor a 850px
        caja_trasera_registro.style.display="block";//muestra la caja trasera del formulario de registro
        caja_trasera_login.style.display="block";//oculta la caja trasera del formulario de login
    }else{
        caja_trasera_registro.style.display="block";//muestra la caja trasera del formulario de registro
        caja_trasera_registro.style.opacity="1";//oculta la caja trasera del formulario de login
        caja_trasera_login.style.display="none";//oculta la caja trasera del formulario de login
        formulario_login.style.display="block";//oculta el formulario de login
        formulario_registro.style.display="none";//muestra el formulario de registro
        contenedor_login_registro.style.left="0px";//mueve el contenedor a la izquierda
    }
}
//----------------------------------------------------------------------------------------------------------------------
anchoPagina();//funcion para ajustar el formulario de registro
//----------------------------------------------------------------------------------------------------------------------
function iniciarSesion(){//funcion para validar el formulario de registro
if (window.innerWidth>850){
    formulario_registro.style.display="none";//oculta el formulario de registro
    contenedor_login_registro.style.left="10px";//mueve el contenedor a la izquierda
    formulario_login.style.display="block";//muestra el formulario de login
    caja_trasera_registro.style.opacity="1";//muestra la caja trasera del formulario de registro
    caja_trasera_login.style.opacity="0";//oculta la caja trasera del formulario de login
}else{//
    formulario_registro.style.display="none";//oculta el formulario de registro
    contenedor_login_registro.style.left="0px";//mueve el contenedor a la izquierda
    formulario_login.style.display="block";//muestra el formulario de login
    caja_trasera_registro.style.display="block";//muestra la caja trasera del formulario de registro
    caja_trasera_login.style.display="none";//oculta la caja trasera del formulario de login
    }
}
//----------------------------------------------------------------------------------------------------------------------
function registrarse_1(){//funcion para validar el formulario de registro
if (window.innerWidth>850){//
    formulario_registro.style.display="block";//muestra el formulario de registro
    contenedor_login_registro.style.left="410px";//mueve el contenedor a la derecha
    formulario_login.style.display="none";//oculta el formulario de login
    caja_trasera_registro.style.opacity="0";//oculta la caja trasera del formulario de registro
    caja_trasera_login.style.opacity="1";//muestra la caja trasera del formulario de login
}else{
    formulario_registro.style.display="block";//muestra el formulario de registro
    contenedor_login_registro.style.left="0px";//mueve el contenedor a la derecha
    formulario_login.style.display="none";//oculta el formulario de login
    caja_trasera_registro.style.display="none";//oculta la caja trasera del formulario de registro
    caja_trasera_login.style.display="block";//muestra la caja trasera del formulario de login
    caja_trasera_login.style.opacity="1";//muestra la caja trasera del formulario de login
    }
}
//----------------------------------------------------------------------------------------------------------------------