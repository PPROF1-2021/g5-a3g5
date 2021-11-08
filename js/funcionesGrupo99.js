function validacion()
{
 
    var nom= document.getElementById("nombre").value;
    var pass= document.getElementById("password").value;


   if(nom == "" || pass == "")
        {
            alert("Hay campos Vacios");
            return false;
        }
    else if(nom.length <2 || pass.length <2) 
    {
        alert("no se permite caracteres menores a 2");
        return false;
    }
    

    

}   
//console.log(nom)

//console.log(pass)