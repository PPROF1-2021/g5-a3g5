function validacion()
{
 
    var nom= document.getElementById("nombre").value
    var pass= document.getElementById("password").value

    //console.log(nom)
   if(nom == "" || pass == "")
    {
        alert("Hay campos vacios");
        return false;
    }
    else if(nom.length <3 || pass.length <3) 
    {
        alert("no se permite menos de 2 caracteres");
        return false;
    }
    else{
        alert("Operación Exitosa");
    }
 
}  


function registro()
{
expresion=/\w+@\w+\.+[a/z]/

    var nom2= document.getElementById("name").value  
    var ape= document.getElementById("apell").value
    const dat= document.getElementById("date2").value
  //  var ema= document.getElementById("email").value
    var pro= document.getElementById("select").value
    var pai= document.getElementById("select2").value
    var pass= document.getElementById("pwd1").value
    var pass1= document.getElementById("pwd2").value

 if(nom2.length < 2)
        {
            alert("Nombre= digitos insuficientes menor a dos");
            return false;
        }
    else if(ape.length < 2){
        alert("Apellido= digitos insuficientes menor a dos");
            return false;
    }
   
   /* else if(!expresion.test(email2)) 
    {
        alert("el correo no es valido");
        return false;
    }*/
    else{
        alert("Operación Exitosa")
        redireccion()
    }

    var hoy = new Date()
    var cumpleanos = new Date(dat)
    var edad = hoy.getFullYear() - cumpleanos.getFullYear();
    var m = hoy.getMonth() - cumpleanos.getMonth();

    if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
        edad--;
    }

    //return edad;

    alert(edad)

//mostrar datos procesados.
//document.getElementById("inputNombre").value=nom2

} 

function redireccion(){

    location.href="../resultado.php"

}
/*
function redireccion(e) {
    e.preventDefault();
    window.location = 'resultado.html';
}*/

function foco(elemento){
    elemento.style.border="3px solid red"

}
function nofoco(elemento){
    elemento.style.border=""

}
// Disable form submissions if there are invalid fields
(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Get the forms we want to add validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();