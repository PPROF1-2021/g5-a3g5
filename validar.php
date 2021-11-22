<?php 
//Datos para hacer la validacón
$usuario2=$_POST['usuario2'];
$password2=$_POST['password2'];
//inici de session
session_start();
$_SESSION['usuario2']=$usuario2;


include('datosDB.php');  // extraemos la variable conexion p

$consulta="SELECT*FROM usuario where usuario='$usuario2' and clave='$password2'";
//creo una variable con el metodo mysqli_query para hacer la validacion correspondiente con el
//dato conexion y la variable consulta.

$resultado=mysqli_query($conn,$consulta) or die("Error en la carga de redistro");

$fila=mysqli_num_rows($resultado);

if($fila){
    header("location:contenido.php");
}else{
    ?>
    
    <?php 
    include("login.html");
    ?>
    <h1> Error en la autentificación</h1>
    <?php 
}

mysqli_free_result($resultado);
mysqli_close($conn);
