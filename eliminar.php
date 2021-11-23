<?php 
include('datosDB.php');  // extraemos la variable conexion p
//Datos para hacer la validacón
$ID=$_POST['txtID'];
mysqli_query($conn,"DELETE FROM usuario where id_usuario='$ID'") or die("Error al eliminar el registro");

mysqli_close($conn);
header("location:tablaUsuario.php");

?>