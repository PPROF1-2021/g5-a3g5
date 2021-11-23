<?php require_once "vistas/parte_superior.php"?>

<div>
<form action="verifUsuario.php" method="Post" class="card-header table table-dark table-striped">
<div class="card-header">
<h3 class="card-title text-danger"> Ingresar Nuevo Usuario</h3>
</div>
  <label class="text-danger">Usuario</label>
  <br>
  <input type="text" name="txtuser">  
  <br>
  <label class="text-danger">Clave</label>
  <br>
  <input type="text" name="txtpass"> 
  <br>
  <br>
  <input type="submit" name="" value="Agregar">  
  <a href="tablaUsuario.php">Regreasar</a>
</form>
</div>

<script src="./js/jquery.js"></script>  
<script src="./js/bootstrap.min.js"></script>
<script src="./js/factura.js"></script>

<!--Final del contenido principal-->
<?php require_once "vistas/parte_inferior.php"?>