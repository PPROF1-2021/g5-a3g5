
function validacion()
{
 
    var nom= document.getElementById("nombre").value;
    var pass= document.getElementById("password").value;
    //console.log(nom)
   if(nom == "" || pass == "")
    {
        alert("Hay campos Vacios");
        return false;
    }
    else if(nom.length <3 || pass.length <3) 
    {
        alert("no se permite caracteres menores a 2");
        return false;
    }
    else{
        alert("Operación Exitosa");
    }
}   

function registro()
{
 
expresion=/\w+@\w+\.+[a/z]/

    var nom2= document.getElementById("nombre2").value;
    var ape= document.getElementById("apellido2").value;
    var dat= document.getElementById("date2").value;
    var ema= document.getElementById("email2").value;
    var pro= document.getElementById("provincia2").value;
    var pai= document.getElementById("pais2").value;
    var pass= document.getElementById("password2").value;

    console.log(nom2)

   if(nom2 == ""/* || apellido2 == ""|| date2 == ""|| email2 == ""|| provincia2 == ""|| pais2 == ""|| password2 == ""*/)
        {
            alert("Hay campos Vacios");
            return false;
        }
  /*  else if(nombre2 < 3 || apellido2 < 3 || date2 < 3 || email2 < 3 || provincia2 < 3 || pais2 < 3 || password2 < 3 )
    {
        alert("no se permite caracteres menores a 2");
        return false;
    }
    else if(!expresion.test(email2)) 
    {
        alert("el correo no es valido");
        return false;
    }
    else{
        alert("Operación Exitosa");
    }*/
} 