<?php 
include('datosDB.php');  // extraemos la variable conexion p
//Datos para hacer la validacón
$IDClient=$_POST['txtIDClient'];
mysqli_query($conn,"DELETE FROM clientes where id_cliente='$IDClient'") or die("Error al eliminar el registro");

mysqli_close($conn);
header("location:tablaCliente.php");

?>