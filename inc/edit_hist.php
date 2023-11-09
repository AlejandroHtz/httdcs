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

$id_pend = "SELECT  *
from hist_comodo
where id = $id ";
$resdiscarpend = mysqli_query($conexion, $id_pend);
$id_varidocpend = mysqli_fetch_assoc($resdiscarpend);
$varspend = $id_varidocpend['clasificacion'];
$varnumfac = $id_varidocpend['num_factura'];
$varmonto = $id_varidocpend['monto'];
$marca = $id_varidocpend['system_manufacturer'];
$modelo = $id_varidocpend['system_model'];
$serial = $id_varidocpend['serial_number'];
if ($varspend === "A") {
  $colorbutton = "btn btn-success";
} elseif ($varspend === "B") {
  $colorbutton = "btn btn-warning";
} else {
  $colorbutton = "btn btn-danger";
}


?>

<div class="content-wrapper">
  <a href="hist_comodo.php" class="btn btn-primary">Regresar</a>
  <div class="container-sm">
    <div class="progress" style="height: 30px;">
      <div class="progress-bar bg-info" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
        <button type="button" class="<?php echo $colorbutton; ?>" data-bs-toggle="modal" data-bs-target="#clasific" onclick="agregaform('<?php echo $datosdoc ?>')">Clasificacion <?php echo $varspend ?></button><br>


      </div>
    </div>

    <div>
      <br>
      <div class="container overflow-hidden">
        <div class="row gx-5">
          <div class="col">
            <div class="p-3 border bg-light">
              <h5 type="button" data-bs-toggle="modal" data-bs-target="#factura"> Factura: <b><?php echo $varnumfac; ?></b></h5>
            </div>
          </div>
          <div class="col">
            <div class="p-3 border bg-light">
              <h5 type="button" data-bs-toggle="modal" data-bs-target="#factura">Costo Inicial: <b> $ <?php echo number_format($varmonto, 2); ?></b></h5>
            </div>
          </div>

        </div>
        <div class="row gx-2">
        </div>
      </div>

    </div>

    <br>
    <div id="hist">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Serial</th>
            <th>Modelo</th>
            <th>Estatus</th>
            <th></th>
          </tr>
        </thead>
        <?php

        $queryArchivos =  "SELECT  comodo.name,serial_number,system_model, case when eliminada = 0 then 'Ocupada' else 'Retirada' end as estat
                    from comodo
                    where id_hist_comodo = $id order by eliminada asc";
        $resultadoArchivo = mysqli_query($conexion, $queryArchivos);
        while ($filaup = mysqli_fetch_array($resultadoArchivo)) {

        ?>
          <tbody>
            <?PHP


            ?>
            <tr>

              <td data-titulo="Nombre: "><?php echo $filaup['name'] ?></td>
              <td data-titulo="Tipo documento: "><?php echo $filaup['serial_number'] ?></td>
              <td data-titulo="Observaciones: "><?php echo $filaup['system_model'] ?></td>
              <td data-titulo="Observaciones: "><?php echo $filaup['estat'] ?></td>
              <td>




              </td>
              <!-- <td><?php ?> <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#modificart" onclick="agregaform('<?php echo $datosdoc ?>')">Editar</button> <?php  ?> </td> -->


            </tr>
            <?PHP

            ?>
          </tbody>
        <?php
        }

        ?>
      </table>
    </div>
  </div>

  <div class="container-sm">
    <form action="prueba.php" method="post">
      <div class="input-group">

        <input type="text" id="inpnombreresp" name="inpnombreresp" class="form-control" placeholder="NOMBRE" required>
        <input type="text" id="inpmarca" name="inpmarca" class="form-control" value="<?php echo $marca; ?>">
        <input type="text" id="inptipo" name="inptipo" class="form-control" value="LAPTOP">
        <input type="text" id="inpmodelo" name="inpmodelo" class="form-control" value="<?php echo $modelo; ?>">
        <input type="text" id="inpserial" name="inpserial" class="form-control" value="<?php echo $serial; ?>">
        <input type="submit" value="RESPONSIVA">
      </div>
    </form>
  </div>

  <div class="container-sm">

    <!-- <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#nuevdoc">Nuevo documento</button> -->
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

      $queryArchivos =  "SELECT  * from documentos doc
                    left join comodo as com on com.id = doc.id_inventario
                    left join hist_comodo as his on his.serial_number = com.serial_number
                    where his.id = $id and lugar_documento = 'INVENTARIO' order by fecha desc , hora desc";
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


              <a target="_blank" class="fas fa-download fa-2x" href="<?php echo $filaup['ruta']; ?>"></a>

            </td>
            <!-- <td><?php ?> <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#modificart" onclick="agregaform('<?php echo $datosdoc ?>')">Editar</button> <?php  ?> </td> -->


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

<style>
  #hist {
    width: 100%;
    height: 250px;
    overflow: auto;
    /* ADD THIS TO THE PARENT */
    scroll-snap-type: y mandatory;
  }

  #container-sm {
    width: 100%;
    height: 250px;
    overflow: auto;
    /* ADD THIS TO THE PARENT */
    scroll-snap-type: y mandatory;
  }

  #spp {
    width: 100%;
    height: 900px;
    overflow: auto;
    /* ADD THIS TO THE PARENT */
    scroll-snap-type: y mandatory;
  }
</style>

<div class="modal fade" id="modificart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form method="POST" action="cargararchivos.php" enctype="multipart/form-data">
          <input type="hidden" name="usuario" class="form-control" value="<?php echo $usuario; ?>">


          <div class="form-group row">
            <div class="col-md-6">
              <label for="" class="form-label">Fecha inicio</label>
              <input type="date" class="form-control" name="fechainidoc" id="fechainidoc" required>
              <input type="hidden" name="idupliad" id="idupliad">
              <input type="hidden" name="id" value="<?php echo $id_inventario ?>">

            </div>

            <div class="col-md-6">
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
            <input type="text" class="form-control" name="idd" id="idd" value="<?php echo $id; ?>">
            <input type="text" class="form-control" name="usuario" id="usuario" value="<?php echo $user; ?>">
          </div>
          <br>


          <div class="col-md-12">
            <label for="inputTipodoc" class="form-label">Tipo documento</label>
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

<div class="modal fade" id="clasific" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Clasificar </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form id="frmClasif">
          <input type="hidden" name="usuario" class="form-control" value="<?php echo $usuario; ?>">


          <div class="form-group row">
            <div class="col-md-12">
              <select name="clas" id="clas" class="form-control">
                <center>
                  <option value="<?php echo $varspend; ?>"><?php echo $varspend; ?></option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
                </center>
              </select>


            </div>

            <input type="hidden" name="id" value="<?php echo $id; ?>">
          </div>


          <input type="submit" name="actualizar" id="actualizar" value="actualizar" class="btn btn-primary " onclick="insertMonActclas();">
        </form>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="factura" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos de factura </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

    


          <div class="form-floating mb-3">
          <label for="floatingInput">Factura</label>
            <input type="text" class="form-control" id="InpFactura"  name="InpFactura" value="<?php  echo $varnumfac; ?>">
          </div>
          <div class="form-floating">
          <label for="floatingPassword">Monto</label>
            <input type="text" class="form-control" id="InpCosto" name="InpCosto" value="<?php  echo $varmonto; ?>">
          </div>
 
<br>
          <button type="button" class="btn btn-primary " onclick="insertDatfac();">Actualizar</button>
      
      </div>
    </div>
  </div>
</div>


<?php
require 'footer.php';
?>
<script>
  function insertMonActclas() {

    var datos = $('#frmClasif').serialize();
    $.ajax({
      type: "POST",
      url: "querys/act_clasif.php",
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

function insertDatfac(){
    factura = document.getElementById('InpFactura').value; 
    costo = document.getElementById('InpCosto').value; 
    id =  "<?php echo $id ?>";
    var parametros = {
      "factura" : factura,
      "costo" : costo,
      "id" : id
    };
    $.ajax({
            data:  parametros, //datos que se envian a traves de ajax
            url:   'querys/query_trans.php', //archivo que recibe la peticion
            type:  'post', //método de envio
            beforeSend: function () {
                    // $("#resultado").html("Procesando, espere por favor...");
            }, 
            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
              if(response = "Actualizado"){      
              alert(response);
              location.reload();
            }
            }
    });
    
  }



  function mayus(e) {
    e.value = e.value.toUpperCase();
  }
</script>