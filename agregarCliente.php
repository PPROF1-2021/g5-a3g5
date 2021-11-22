<?php require_once "vistas/parte_superior.php"?>

<div>
<form action="verifCliente.php" method="Post" class="card-header table table-dark table-striped">
<div class="card-header">
<h3 class="card-title text-danger"> Ingresar Nuevo Clente</h3>
</div>
  <label class="text-danger">Nombre     </label>
  <br>
  <input type="text" name="txtuser">  
  <br>
  <label class="text-danger">Apellido   </label>
  <br>
  <input type="text" name="txtapell">  
  <br>
  <label class="text-danger">Cuil       </label>
  <br>
  <input type="text" name="txtcuil"> 
  <br>
  <label class="text-danger">Telefono   </label>
  <br>
  <input type="text" name="txttel"> 
  <br>
  <label class="text-danger">Fecha Nac: </label>
  <br>
  <input type="date" name="txtfecha"> 
  <br>
  <label class="text-danger">E-mail     </label>
  <br>
  <input type="email" name="txtemail">
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