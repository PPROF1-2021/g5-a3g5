<?php 
include('datosDB.php');  // extraemos la variable conexion p
//Datos para hacer la validacón
$IDprod=$_POST['txtIDProd'];
mysqli_query($conn,"DELETE FROM productos where id_numero_referencia='$IDprod'") or die("Error al eliminar el registro");

mysqli_close($conn);
header("location:tablaProductos.php");

?>