<?php 
include('datosDB.php');  // extraemos la variable conexion p
?>
<?php require_once "vistas/parte_superior.php"?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">  
        <h2 class="card-title"> Registro de Productos</h2>        
        <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal"><a  href="agregarProducto.php">Nuevo</a></button>    
        </div>    
    </div>    
</div>    
<br>  
<div class="tabla1">

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">DESCRIPCION</th>
      <th scope="col">STOCK</th>
      <th scope="col">NOMBRE ARTICULO</th>
      <th scope="col">PRECIO</th>
    </tr>
  </thead>
  <tbody>


<?php 
$sql="SELECT * FROM productos";
$result=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($result)){

?>

    <tr>
      <th><?php echo $mostrar['id_numero_referencia'] ?></th>
      <td><?php echo $mostrar['descripcion'] ?></td>
      <td><?php echo $mostrar['stock'] ?></td>
      <td><?php echo $mostrar['nombre_articulo'] ?></td>
      <td><?php echo $mostrar['precio_venta'] ?></td>
        <td>
            <form action="eliminar_productos.php" method="post">
                <input type="hidden" size="1" value="<?php echo $mostrar['id_numero_referencia']?>" name="txtIDProd" readonly>
                <td> <input class="btn btn-danger" size="1" type="submit" value="Eliminar" name="btnEliminar"></td>
            </form>

        </td>
        <td>
        <form action="editar.php" method="post">
                <input type="hidden" size="1" value="<?php echo $mostrar['id_numero_referencia']?>" name="txtEDProd" readonly>
                <td> <input class="btn btn-success" size="1" type="submit" value="Editar" name="btnEditar"></td>
            </form>
        </td>
    </tr>
<?php 
}
?>    
  </tbody>
</table>
</div>

    
    <script src="./js/jquery.js"></script>  
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/factura.js"></script>



    
<!--Final del contenido principal-->
<?php require_once "vistas/parte_inferior.php"?>