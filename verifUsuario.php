<?php 
include('datosDB.php');  // extraemos la variable conexion p
?>
<?php require_once "vistas/parte_superiorTime.php"?>
   
   <!-- Formulario  -->
<?php 

$TxtUser=$_POST['txtuser'];
$TxtPass=$_POST['txtpass'];


print "<p>Su Nombre es: <strong>$TxtUser</strong>.</p>\n";
print "\n";
print "<p>Su Clave es: <strong>$TxtPass</strong>.</p>\n";
print "\n";



include("datosDB.php");
$con=mysqli_connect($host,$usuario,$clave,$basededatos) or die ("<br><br><br><h1>no se puede conectar con el Servidor</h1>");

if(!$con){
  die("Conexión fallida: ".mysqli_error());
}

$db=mysqli_select_db($con, $basededatos) or die ("<br><br><br><h1>no se puede conectar a la base de datos</h1>");
$consulta= "INSERT INTO usuario(usuario,clave) VALUE ('$TxtUser','$TxtPass')";

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


mysqli_cole($con);
?>
 
    
<!--Final del contenido principal-->
<?php require_once "vistas/parte_inferior.php"?>