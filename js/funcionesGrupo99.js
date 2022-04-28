//-----------------------------------------------------------------------------------
//funcion DOM del sitio trabaja sobre el NAVBAR colocando fecha y hora actual
//-----------------------------------------------------------------------------------
showTime();

function showTime() {
  fecha = new Date(); //instancio objeto Date con fecha 
  hora = fecha.getHours(); //obtengo hora actual
  minutos = fecha.getMinutes(); //obtengo minutos actual
  segundos = fecha.getSeconds(); //obtengo segundos actual
  dia = fecha.getDate(); //obtengo dia actual
  mes = fecha.getMonth() + 1; //obtengo mes actual
  anio = fecha.getFullYear(); //obtengo año actual

  if (hora < 10) hora = 0 + hora; //si hora es menor a 10 le agrego un 0 al inicio
  if (minutos < 10) minutos = "0" + minutos; //si minutos es menor a 10 le agrego un 0 al inicio
  if (segundos < 10) segundos = "0" + segundos; //si segundos es menor a 10 le agrego un 0 al inicio

  $("#hora").text(hora + ":" + minutos + ":" + segundos); //muestro hora actual en el h1 id hora
  $("#dia").text(dia + "/" + mes + "/" + anio); //muestro dia actual en el h1 id dia
  setTimeout("showTime()", 1000); //llamo a la funcion showTime cada segundo para ser tiempo real
}

//-----------------------------------------------------------------------------------
//funcion DOM del sitio trabaja sobre el NAVBAR expandiendo o colapsando menu
//-----------------------------------------------------------------------------------
function mi_Menu() { //funcion para expandir o colapsar menu
  const navMenu = document.querySelector(".nav-menu"); //obtengo el elemento nav-menu
  navMenu.classList.toggle("nav-menu__visible");
  //si el elemento nav-menu tiene la clase nav-menu__visible la quito y si no la agrego
}

function mi_Menu2() { //funcion para expandir o colapsar menu
  const navMenu2 = document.querySelector(".category_list"); //obtengo el elemento nav-menu
  navMenu2.classList.toggle("category_list__visible");
  //si el elemento nav-menu tiene la clase nav-menu__visible la quito y si no la agrego
}


//-----------------------------------------------------------------------------------
//Envio por metodo get a formulario contacto1 los valores cargados en contacto
//-----------------------------------------------------------------------------------
function mi_Envio(url, ubicacion) { //funcion para enviar los datos del formulario
  document.getElementById("5").value = //cargo en input 5 hidden el valos de los 4 inputs
    "°" + //declaro una bandera para saber a donde empieza input
    document.getElementById("nombres").value + //cargo en input 5 hidden el valor del input 1
    "°" + //declaro una bandera para saber a donde empieza y termina cada input
    document.getElementById("email").value + //cargo en input 5 hidden el valor del input 2
    "°" + //declaro una bandera para saber a donde empieza y termina cada input
    document.getElementById("telefono").value + //cargo en input 5 hidden el valor del input 3
    "°" + //declaro una bandera para saber a donde empieza y termina cada input
    document.getElementById("mensaje").value + //cargo en input 5 hidden el valor del input 4
    "°"; //declaro una bandera para saber a donde termina cada input
  window.open(url + '?payload=' + document.getElementById('5').value, ubicacion, 'width=870,height=660');
  return false;
}

//-----------------------------------------------------------------------------------
//funcion DOM filtra componentes de la lista
//-----------------------------------------------------------------------------------
function borra() { //funcion para borrar los componentes que se muestran
  var x, i;
  x = document.querySelectorAll(".led, .dis, .tra, .ser, .gra"); //obtengo todos los componentes
  for (i = 0; i < x.length; i++) { //recorro todos los componentes
    x[i].style.display = "none"; //oculto los componentes
  }
}

function todo() { //funcion para mostrar todos los componentes
  var x, i;
  x = document.querySelectorAll(".led,.dis, .tra, .ser, .gra"); //obtengo todos los componentes
  for (i = 0; i < x.length; i++) { //recorro todos los componentes
    x[i].style.display = "flex"; //muestro los componentes
  }
  const navMenu2 = document.querySelector(".category_list"); //obtengo el elemento nav-menu
  navMenu2.classList.toggle("category_list__visible");
}

function leds() { //funcion para mostrar los componentes led
  borra(); //borro los componentes
  var x, i;
  x = document.querySelectorAll(".led"); //obtengo los componentes led
  for (i = 0; i < x.length; i++) { //recorro los componentes 
    x[i].style.display = "flex"; //muestro los componentes led
  }
  const navMenu2 = document.querySelector(".category_list"); //obtengo el elemento nav-menu
  navMenu2.classList.toggle("category_list__visible");
}

function disp() { //funcion para mostrar los componentes display
  borra(); //borro los componentes
  var x, i;
  x = document.querySelectorAll(".dis"); //obtengo los componentes display
  for (i = 0; i < x.length; i++) { //recorro los componentes
    x[i].style.display = "flex"; //muestro los componentes display
  }
  const navMenu2 = document.querySelector(".category_list"); //obtengo el elemento nav-menu
  navMenu2.classList.toggle("category_list__visible");
}

function tran() { //funcion para mostrar los componentes transistores
  borra(); //borro los componentes
  var x, i;
  x = document.querySelectorAll(".tra"); //obtengo los componentes transistores
  for (i = 0; i < x.length; i++) { //recorro los componentes
    x[i].style.display = "flex"; //muestro los componentes transistores
  }
  const navMenu2 = document.querySelector(".category_list"); //obtengo el elemento nav-menu
  navMenu2.classList.toggle("category_list__visible");
}

function serv() { //funcion para mostrar los componentes transistores
  borra(); //borro los componentes
  var x, i;
  x = document.querySelectorAll(".ser"); //obtengo los componentes servidores
  for (i = 0; i < x.length; i++) { //recorro los componentes
    x[i].style.display = "flex"; //muestro los componentes servidores
  }
  const navMenu2 = document.querySelector(".category_list"); //obtengo el elemento nav-menu
  navMenu2.classList.toggle("category_list__visible");
}

function gral() { //funcion para mostrar los componentes transistores
  borra(); //borro los componentes
  var x, i;
  x = document.querySelectorAll(".gra"); //obtengo los componentes generales
  for (i = 0; i < x.length; i++) { //recorro los componentes
    x[i].style.display = "flex"; //muestro los componentes generales
  }
  const navMenu2 = document.querySelector(".category_list"); //obtengo el elemento nav-menu
  navMenu2.classList.toggle("category_list__visible");
}
//-----------------------------------------------------------------------------------
//funcion de salida de pagina
//-----------------------------------------------------------------------------------
function sale() {//funcion para salir de la pagina
  window.close()//cierro la pagina
}

function ok_registro() {
  swal('Su registro se cargo con exito !!!!!', '', 'success');
}