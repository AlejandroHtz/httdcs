<?php
require 'header.php';
if ($_SESSION['permisos'] != 1) {
  if ($_SESSION['permisos'] == 1) {
    echo "<script> alert('No puedes ingresar') ;window.location='mievaluacion.php'</script>";
  } else {
    echo "<script> alert('No puedes ingresar') ;window.location='list_evaluar.php'</script>";
  }
} else {
}

$id = $_GET['id'];
$user = $_SESSION['id']; 

$sqlselecus = "SELECT * from documentos 
where id_inventario = $id";
$registrcus = mysqli_query($conexion, $sqlselecus);
$rcompetencias = mysqli_fetch_array($registrcus);





?>

<div class="content-wrapper">
  <a href="comodo.php" class="btn btn-primary">Regresar</a>
  <div class="container-sm">

    <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#nuevdoc">Nuevo documento</button>
    <span id="resultado"></span><br><br>
    <table class="table table-hover">
    <thead>
                        <tr> 
                            <th>Archivo</th>
                            <th>Tipo</th>
                            <th>Observaciones</th>
                            <th>fecha</th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php 

                    $queryArchivos =  "SELECT  *
                    from documentos
                    where id_inventario = $id and lugar_documento = 'INVENTARIO' order by fecha desc , hora desc";
                    $resultadoArchivo = mysqli_query($conexion, $queryArchivos);
                    while ($filaup = mysqli_fetch_array($resultadoArchivo)) { 
                      $datosdoc = $filaup['id_doc'] . "||" .
                      $datosdoc = $filaup['id_inventario'] . "||" .
                      $datosdoc = $filaup['tipo_documento'] . "||" .
                      $datosdoc = $filaup['observaciones'];
                      ?>
                      <tbody>
                        <?PHP

                       
                            ?>
                            <tr>

                                <td data-titulo="Nombre: "><?php echo $filaup['nombre'] ?></td>
                                <td data-titulo="Tipo documento: "><?php echo $filaup['tipo_documento'] ?></td>
                                <td data-titulo="Observaciones: "><?php echo $filaup['observaciones'] ?></td>
                                <td data-titulo="Observaciones: "><?php echo $filaup['fecha'] ?></td>
                                <td>


                                  <a target="_blank" class="fas fa-download fa-2x" href="<?php echo $filaup['ruta']; ?>" ></a>

                              </td>
                              <td><?php ?> <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#modificart" onclick="agregaform('<?php echo $datosdoc ?>')">Editar</button> <?php  ?> </td>


                          </tr>
                          <?PHP 
                   
                      ?>
                  </tbody>
                  <?php
  }

                  ?>
              </table>
  </div><br>


</div>
<div class="modal fade" id="modificart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">

      <form  method="POST" action="cargararchivos.php" enctype="multipart/form-data">
        <input type="hidden" name="usuario" class="form-control" value="<?php echo $usuario; ?>">
        

        <div class="form-group row">
            <div class="col-md-6">
                <label for="" class="form-label">Fecha inicio</label>
                <input type="date" class="form-control" name="fechainidoc" id="fechainidoc" required>
                <input type="hidden" name="idupliad" id="idupliad" >
                <input type="hidden" name="id" value="<?php echo $id_inventario ?>">

            </div>

            <div class="col-md-6" >
                <label for="" class="form-label">Fecha fin</label>
                <input type="date" class="form-control" name="fechafindoc" id="fechafindoc" required>
            </div>
        </div>
        <br>
        <div class="col-md-12">
            <label for="" class="form-label">Observaciones</label>
            <textarea name="inpobservecionesdoc" class="form-control" id="inpobservecionesdoc" cols="30" rows="1"></textarea>
        </div>

        <input type="submit" name="actualizar" id="actualizar" value="actualizar" class="btn btn-primary ">
    </form>
</div>
</div>
</div>
</div>

<div class="modal fade" id="nuevdoc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo documento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="cargararchivos.php" enctype="multipart/form-data">
          <div class="col-md-12">
            <label for="" class="form-label"></label>
            <input type="file" class="form-control" name="file">
            <input type="text" class="form-control" name="idd" id="idd" value="<?php echo $id; ?>" >
            <input type="text" class="form-control" name="usuario" id="usuario" value="<?php echo $user; ?>" >
          </div>
          <br>


          <div class="col-md-12">
            <label for="inputTipodoc" class="form-label" >Tipo documento</label>
            <select name="inputTipodoc" id="inputTipodoc" class="form-control">
              <option value="RESPONSIVA">RESPONSIVA</option>
              <option value="ACTA DE ENTREGA">ACTA DE ENTREGA</option>
              <option value="ACTA DE ENTREGA">ACTA DE CAMBIO</option>
              <option value="OTRO">OTRO</option>

            </select>
          </div> 

          <div class="col-md-12">
            <label for="" class="form-label">Observaciones</label>
            <textarea name="inpobserveciones" id="inpobserveciones" class="form-control"></textarea>
          </div>


         
          <input type="submit" class="btn btn-primary" name="cargarPc" id="cargarPc" value="cargar Archivos">
        </form> 

      </div>
    </div>
  </div>
</div>
<?php
require 'footer.php';
?>
<script>
  function insertMonAct() {

    var datos = $('#insformon').serialize();
    $.ajax({
      type: "POST",
      url: "ins_monitores_edit.php",
      data: datos,
      beforeSend: function() {
        $("#resultado").html("Procesando, espere por favor...");
      },
      success: function(response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
        $("#resultado").html(response);
        alert(response);
        if (response === "Actualizado") {
          location.reload();
        }
      }
    });

  };

  function mayus(e) {
    e.value = e.value.toUpperCase();
  }
</script>