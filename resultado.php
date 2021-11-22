<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Factura-Online</title>
    <meta name="author" content="Grupo Aula 3">
    <meta http-equiv="Refresh" content="4;url=login.html">
    <meta name="description" content="sistema de facturacion vinculada a tu sitio web">
    <meta name="keywords" content="facturas,deposito,control,remito,almacen,presupuesto">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src="https://kit.fontawesome.com/438f346520.js" crossorigin="anonymous"></script>
    <script src='main.js'></script>
    <link rel="stylesheet" href="./css/styles.css">   
    <link href="https://fonts.googleapis.com/css2?family=Asap:wght@400;500;600;700&display=swap" rel="stylesheet"> 
    <link rel="shorcut icon" href="./img/logo.jpg">
</head>
<body>
    <header class="encabezado">
        <nav class="menu">
            <div>
            <a href="index.html">
            <img class="logo" src="./img/logo.png" width="124" height="105" alt="logo sin imagen">
            </a>
            </div>      
            <ul>
            <li><a  href="index.html">Inicio</a></li>
            <li><a  href="http://hfdistribuidora.com/" target="blank">Tienda</a></li>
            <li><a  href="contacto.html">Contacto</a></li> 
            <li><a  href="login.html">Login</a>
            <ul>
            <li><a  href="registro.html">Registrar</a>
            </ul>
            </li>
            </ul>
        </nav>
    </header>
           
     <!-- Formulario  -->
<?php 

$nombre= $_POST["username"];
$apellido= $_POST["fullname"];
$direccion= $_POST["email"];
$passwordid= $_POST["passwordid"];
//$password_hash= password_hash($passwordid, PASSWORD_BCRYPT);FechaNacim
$fecha_alta= date("Y-m-d");
$cuil= $_POST["cuil"];
$telefono= $_POST["idtelefono"];
$Estado= 3;


print "<p>Su Nombre es: <strong>$nombre</strong>.</p>\n";
print "\n";
print "<p>Su Apellido es: <strong>$apellido</strong>.</p>\n";
print "\n";
print "<p>Su email es: <strong>$direccion</strong>.</p>\n";
print "\n";
print "<p>Su Password es: <strong>$passwordid</strong>.</p>\n";
print "\n";
print "<p>Fecha: <strong>$fecha_alta</strong>.</p>\n";
print "\n";

include("datosDB.php");
$con=mysqli_connect($host,$usuario,$clave,$basededatos) or die ("<br><br><br><h1>no se puede conectar con el Servidor</h1>");

if(!$con){
  die("Conexión fallida: ".mysqli_error());
}

$db=mysqli_select_db($con, $basededatos) or die ("<br><br><br><h1>no se puede conectar a la base de datos</h1>");
$consulta= "INSERT INTO usuario(usuario,clave) VALUE ('$nombre','$passwordid')";
$consulta1= "INSERT INTO clientes(nombre,apellido,cuil,fecha_alta,telefono,e_mail) VALUE ('$nombre','$apellido','$cuil','$fecha_alta','$telefono','$direccion')";

if(mysqli_query ($con,$consulta)){
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<h1>Registro Agendado</h1>";
}else{
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
    echo "<h1>Error al realizar el registro</h1>";
    echo "Error: ".$consulta. "<br>".mysqli_error($con);
}

if(mysqli_query ($con,$consulta1)){
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<h1>Registro Agendado</h1>";
}else{
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
    echo "<h1>Error al realizar el registro</h1>";
    echo "Error: ".$consulta1. "<br>".mysqli_error($con);
}

mysqli_cole($con);
?>
 
  <br>
  <br>
  <br>
  <footer>
    <div class="contenedor-all">
        <div class="contenedor-footer">
            <div class="columna1">
                <h1>Dirección</h1>
                <p>Buenos Aires 573</p>
                <br>
                <p>Cordoba, Villa Allende</p>
                <br>
                <p>Argentina, CP 5105</p>
            </div>
            <div class="columna2">
                <div class="logo">
                <i id="fontawesome1-1" class="fab fa-facebook"></i>
                <h3>Sigenos en Faceboock</h3>
                </div>

                <div class="logo">
                <i id="fontawesome1-2" class="fab fa-whatsapp-square"></i>
                <h3>Escribenos en whatsapp</h3>
                </div>

                <div class="logo">
                <i id="fontawesome1-3" class="fab fa-twitter-square"></i>
                <h3>Sigenos en twitter</h3>
                </div>

                <div class="logo">
                <i id="fontawesome1-4" class="fab fa-instagram-square"></i>
                <h3>Sigenos en instagram</h3>
                </div>    
            </div>
            <div class="columna3">
                <h1>Contacto</h1>
                <p>Soporte: (0351) 4555777</p>
                <br>
                <p>info@sistemas.com.ar</p>
            </div>   
        </div>
        
        <div class="conteiner-footer2">
            <div class="copyright">
                <p>© 2021 Todo los Derechos Reservados</p>
            </div> 
            <div class="information">
                <a href="informacion.html">Informacion Compañia  </a><a href="politica.html">| Politica de Privacidad |</a> <a href="terminos.html">Termino y Condiciones</a>
            </div>              
    </div>
</div>




</footer>
<!-- fin del footer-->
<script src="js/funcionesGrupo99.js"></script>
<script src="js/time.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  
  </body>
</html>
