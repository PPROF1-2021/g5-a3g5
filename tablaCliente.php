<?php 
include('datosDB.php');  // extraemos la variable conexion p
?>
<?php require_once "vistas/parte_superior.php"?>





<div class="container">
    <div class="row">
        <div class="col-lg-12">  
        <h2 class="card-title"> Registro de Cliente</h2>          
        <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal"><a  href="agregarCliente.php">Nuevo</a></button>    
        </div>    
    </div>    
</div>    
<br>  
<div class="tabla1">


<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO</th>
      <th scope="col">TELEFONO</th>
      <th scope="col">EMAIL</th>
    </tr>
  </thead>
  <tbody>


<?php 
$sql="SELECT * FROM clientes";
$result=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($result)){

?>

    <tr>
      <th><?php echo $mostrar['id_cliente'] ?></th>
      <td><?php echo $mostrar['nombre'] ?></td>
      <td><?php echo $mostrar['apellido'] ?></td>
      <td><?php echo $mostrar['telefono'] ?></td>
      <td><?php echo $mostrar['e_mail'] ?></td>
        <td>
            <form action="eliminar_cliente.php" method="post">
                <input type="text" size="1" value="<?php echo $mostrar['id_cliente']?>" name="txtIDClient" readonly>
                <td> <input class="btn btn-danger" size="1" type="submit" value="Eliminar" name="btnEliminar"></td>
            </form>

        </td>
        <td>
        <form action="editar.php" method="post">
                <input type="hidden" size="1" value="<?php echo $mostrar['id_cliente']?>" name="txtEDClient" readonly>
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