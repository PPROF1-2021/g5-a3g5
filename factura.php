<?php 
include('datosDB.php');  // extraemos la variable conexion p
?>
<?php require_once "vistas/parte_superior.php"?>
<main>
  <section class="row">
      <div class="col">
          <div class="card">
            <div class="card-header">
                <h3 class="card-title text-danger"> Cabecera de Facturas</h3>
            </div>
            <div class="card-body">


                <form class="row table-dark table-striped">
                    <div class="form-group col-md-4">
                        <label for="">Nombre</label>
                        <input id="inputNombre" type="text" class="form-control" placeholder="Ingresar el Nombre">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">RUC</label
                            ><input id="inputRuc" type="text" class="form-control" placeholder="Ejm: 00120212121">
                        </div>
                    <div class="form-group col-md-4">
                        <label for="">N°</label>
                        <input id="inputNro" type="text" class="form-control" placeholder="Ejm: 001">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="">Direccion</label>
                        <input id="inputDireccion" type="text" class="form-control" placeholder="Ejm: Calle San Martin 502">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Fecha</label>
                        <input id="inputFecha" type="date" class="form-control">
                    </div>
                </form>
            </div>
          </div>
      </div>
  </section>  

  <section class="row mt-4">
    <div class="col-12">
        <div class="card">
          <div class="card-body">
              <form id="formDetalle" class="row table-dark table-striped">
                  <div class="form-group col-md-1">
                      <label for="">Cantidad</label>
                      <input id="inputCantidad" type="number" class="form-control">
                    </div>
                  <div class="form-group col-md-5">
                      <label for="">Descripción</label>
                     <select id="selectDescripcion" class="form-control">
                         <option value="0">--Seleccione el Producto--</option>
                         <option value="1">Producto 1</option>
                         <option value="2">Producto 2</option>
                         <option value="3">Producto 3</option>
                         <option value="4">Producto 4</option>
                     </select>
                    </div>
                  <div class="form-group col-md-1">
                      <label for="">Desc.</label>
                      <input id="inputDesc" type="number" class="form-control">
                    </div>
                  <div class="form-group col-md-2">
                      <label for="">P.Unit</label>
                      <input id="inputPUnitario" type="number" class="form-control">
                    </div>
                  <div class="form-group col-md-2">
                      <label for="">P.total</label>
                      <input id="inputPTotal" type="number" class="form-control">
                    </div>
                  <div class="form-group col-md-1">
                        <label for="">Acciones</label>
                      <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
              </form>
          </div>
        </div>
    </div>
    <div class="col mt-4">
        <button class="btn btn-dark btn-lg">Guardar Facturas</button>
    </div>
</section>
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
                    <th>Acciones</th>
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