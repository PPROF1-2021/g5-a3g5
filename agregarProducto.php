<?php require_once "vistas/parte_superior.php"?>

<div>
<form action="verifProducto.php" method="Post" class="card-header table table-dark table-striped">
<div class="card-header">
<h3 class="card-title text-danger"> Ingresar Nuevo Producto</h3>
</div>
  <label class="text-danger">Descripcion</label>
  <br>
  <input type="text" name="txtDesc">  
  <br>
  <label class="text-danger">Stock</label>
  <br>
  <input type="text" name="txtStock"> 
  <br>
  <label class="text-danger">Fecha Lote: </label>
  <br>
  <input type="date" name="txtfecha"> 
  <br> 
  <label class="text-danger">Nombre</label>
  <br>
  <input type="text" name="txtNomb">  
  <br>  
  <label class="text-danger">Precio</label>
  <br>
  <input type="text" name="txtPrec">  
  <br>
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