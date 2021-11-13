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

    var nom2= document.getElementById("nombre2").value  
    var ape= document.getElementById("apellido2").value
    var dat= document.getElementById("date2").value
  //  var ema= document.getElementById("email2").value
    var pro= document.getElementById("provincia2").value
    var pai= document.getElementById("pais2").value
    var pass= document.getElementById("password2").value
    var pass1= document.getElementById("password3").value

   console.log(nom2.length)
// console.log(ape)
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
        alert("Operación Exitosa");
    }
} 