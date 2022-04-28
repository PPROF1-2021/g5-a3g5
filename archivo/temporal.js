function redireccion() {
    var tiempo = 5000;
  
    //mensaje
    document.getElementById('mensaje').innerHTML =
      'Espere, en breve será redirigido a la pagina de inicio.';
  
    setTimeout(function () {
      window.location = 'index.html';
    }, tiempo);
  }
    
     function abrir_popup(url,ubicacion){
        document.getElementById('5').value =
        "°"+//bandera de inicio
        document.getElementById('1').value +
        "°"+//bandera de fin de input
        document.getElementById('2').value +
        "°"+//bandera de fin de input
        document.getElementById('3').value +
        "°"+//bandera de fin de input
        document.getElementById('4').value +
        "°";//bandera de fin de input
            window.open(url+'?payload='+document.getElementById('5').value, ubicacion, 'width=870,height=700');//return false;
            cerrar();
        }
            function cerrar() {
            window.location("https://pprof1-2021.github.io/g5-a3g5/index.html"); 
            }






    var url_string = window.location.href; //
    var url = new URL(url_string);
     var c1 = url.searchParams.get("payload");
    document.getElementById('5').value = c1;
    let dimension=c1.length;
    let ID=0;
//---------------------------------------------------------------------------------------------------------------------------------------
    for (let i = 0; i <=dimension-1; i++) {
      if (c1[i]=="°"){
       ID++;
      }
      if (c1[i]!="°"){
      document.getElementById(ID).value = c1[i]+document.getElementById(ID).value;
      }
     }
//---------------------------------------------------------------------------------------------------------------------------------------  
    function cerrar() {window.close()}
//--------------------------------------------------------------------------------------------------------------------------------------- 




