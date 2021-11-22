<?php 
include('datosDB.php');  // extraemos la variable conexion p
?>
<?php require_once "vistas/parte_superior.php"?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">  
        <h2 class="card-title"> Registro de Usuarios</h2> 
 
        <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal" ><a  href="agregarUsuario.php">Nuevo</a></button>    
        </div>    
    </div>    
</div>    
<br>  

<div class="tabla1">

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Usuario</th>
      <th scope="col">Passworsd</th>
      <th scope="col">Cliente</th>
    
    </tr>
  </thead>
  <tbody>


<?php 
$sql="SELECT * FROM usuario";
$result=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($result)){

?>

    <tr>
      <th><?php echo $mostrar['id_usuario'] ?></th>
      <td><?php echo $mostrar['usuario'] ?></td>
      <td><?php echo $mostrar['clave'] ?></td>
      <td><?php echo $mostrar['cliente'] ?></td>
        <td>
            <form action="eliminar.php" method="post">
                <input type="hidden" size="1" value="<?php echo $mostrar['id_usuario']?>" name="txtID" readonly>
                <td> <input class="btn btn-danger" size="1" type="submit" value="Eliminar" name="btnEliminar"></td>
            </form>

        </td>
        <td>
        <form action="editar.php" method="post">
                <input type="hidden" size="1" value="<?php echo $mostrar['id_usuario']?>" name="txtEdit" readonly>
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