<?php 
include('datosDB.php');  // extraemos la variable conexion p
?>
<?php require_once "vistas/parte_superior.php"?>
<main>
<h3 class="card-title text-danger"> Pedidos</h3>
<section class="row mt-4">
    <div class="col">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Cantidad</th>
                    <th>Descripción</th>
                    <th>Desc.</th>
                    <th>P.Uni</th>
                    <th>P.total</th>
                    <th>Clientes</th>
                </tr>
            </thead>
            <tbody id="cuerpoTabla">

            </tbody>
        </table>
    </div>
</section>
</main>


    
    <script src="./js/jquery.js"></script>  
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/factura.js"></script>
    
<!--Final del contenido principal-->
<?php require_once "vistas/parte_inferior.php"?>