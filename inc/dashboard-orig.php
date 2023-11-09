<?php 
require ('perfilloader.php');
include("header.php");
$usuario = $_SESSION['nombre'];
$iduser = $_SESSION['id'];
?>
 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalsolicitud">
        Nueva solicitud
 </button>
 <div style="width:100%; height:40%; overflow:auto;">
    <center> <h3>Solicitudes abiertas</h3></center>
 <table class="table table-hover table-condensed table-bordered" id="myTable" >
    <thead>
      <tr bgcolor= "#e03845" style="color:#FFFCFB" > 
        <th>Folio</th>
        <th>Economico</th>
        <th>Serie</th>
        <th>Placas</th>
        <th>Fecha solicitud</th>
        <th>Fecha asignacion</th>
        <th>Fecha ingreso al taller</th>
        <th>Fecha Finalizacion</th>
        <th>Descripcion</th>
        <th>Ubicacion</th>
        <th>Tipo</th>
        
        <th>Ejecutivo</th>
        <th></th>
      </tr>
    </thead>
    <?php
if($_SESSION['perfil'] <> 1){ 
    $consulta = "
    left join users_contratos as uc on uc.id_contrato = inv.id_contrato where uc.id_user = $iduser and id_estatus = 1 ";
 }else { $consulta = "where id_estatus = 1"; }
  $querysolicitud =  "SELECT  sl.id_folio, inv.economico,inv.serie ,inv.placas, 
                      sl.fecha_solicitud,sl.descripcion,
                      CONCAT(upv.vialidad,', ' ,upv.numero_interior, ', ' ,upv.numero_exterior, ', ' ,upv.colonia, ', ' ,upv.entidad_federativa , ', ' ,upv.municipio, ', ' ,upv.codigo_postal) as ubicacionfsc,cts.tipo,ces.tipo_estatus_solicitud,
                      sl.ubicacion_solicitud,sl.usuario_creacion,sl.fecha_asignacion,sl.fecha_ingreso_servicio,sl.fecha_salida_servicio, sl.ejecutivo_asignacion, ces.id_estatus_solicitud
  from solicitud sl
 left join inventario inv on inv.id = sl.id_inventario 
 left join proveedor prv on prv.id_proveedor = sl.id_proveedor
 left join ubicacion_proveedor upv on upv.id_proveedor = prv.id_proveedor
 left join cat_tipo_solicitud cts on cts.id_tipo_solicitud = sl.id_tipo
 left join cat_estatus_solicitud ces on ces.id_estatus_solicitud = sl.id_estatus
 
 $consulta
 order by ces.orden asc, sl.fecha_solicitud desc
  "; 
    $resultadosolicitud = mysqli_query($conexion, $querysolicitud);
    while ($filasolic = mysqli_fetch_array($resultadosolicitud)) { 
  
      ?> 
      <tbody> 
        <?PHP

        // echo "permiso para ver:".$_SESSION['viewdoc_'.$filaup['id_tipo_documento']]."tipo_documento: ".$filaup['id_tipo_documento'];

        // if ($_SESSION['viewdoc_' . $filaup['id_tipo_documento']] . "" == "1") {
        ?>
          <tr>
 
            <td data-titulo="Folio: "><?php echo $filasolic['id_folio'] ?></td>
            <td data-titulo="Economico: "><?php echo $filasolic['economico'] ?></td>
            <td data-titulo="Serie: "><?php echo $filasolic['serie']  ?></td>
            <td data-titulo="Placas: "><?php echo $filasolic['placas'] ?></td>
            <td data-titulo="Fecha solicitud: "><?php  $date = date_create($filasolic['fecha_solicitud']);
            echo date_format($date, 'd-m-Y H:i:s'); ?></td> 
             <td data-titulo="Fecha solicitud: "><?php if($filasolic['fecha_asignacion'] == '0000-00-00 00:00:00' ){echo "00:00:00"; }else{ $date = date_create($filasolic['fecha_asignacion']) ;
            echo date_format($date, 'd-m-Y H:i:s'); } ?></td> 
             <td data-titulo="Fecha solicitud: "><?php if($filasolic['fecha_ingreso_servicio']  == '0000-00-00' ){echo "00:00:00"; }else{ $date = date_create($filasolic['fecha_ingreso_servicio']);
            echo date_format($date, 'd-m-Y H:i:s');} ?></td> 
            <td data-titulo="Fecha solicitud: "><?php if($filasolic['fecha_salida_servicio']  == '0000-00-00' ){echo "00:00:00"; }else{ $date = date_create($filasolic['fecha_salida_servicio']);
            echo date_format($date, 'd-m-Y H:i:s'); } ?></td> 
            <td data-titulo="Descripcion: "><?php echo $filasolic['descripcion'] ?></td>
            <td data-titulo="Ubicacion: "><?php echo $filasolic['ubicacion_solicitud'] ?></td>
            <td data-titulo="Tipo: "><?php echo $filasolic['tipo'] ?></td>
          
            <td data-titulo="Ejecutivo: "><?php echo $filasolic['ejecutivo_asignacion'] ?></td>
            <!-- <td><button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#modificarsoli" onclick="agregaform('<?php echo $datoss ?>')">Modificar.</button></td> -->
            <?php if ($_SESSION['view_asignar_solicitud'] == "1") { ?>
            <td><?php echo ' <a class="btn btn-primary black-background white" href="solicitud.php?id=' . $filasolic['id_folio'] . '" >Detalle</a>'; ?></td>
            <?php } ?>



          </tr>
        <?PHP
        }
        ?>
      </tbody>
    <?php
    // }
 
    ?>
  </table> 
  </div>




  <div style="width:100%; height:40%; overflow:auto;">
    <center> <h3>Solicitudes en proceso</h3></center>
 <table class="table table-hover table-condensed table-bordered" id="myTable" >
    <thead>
      <tr bgcolor= "#DBA901" style="color:#FFFCFB" > 
        <th>Folio</th>
        <th>Economico</th>
        <th>Serie</th>
        <th>Placas</th>
        <th>Fecha solicitud</th>
        <th>Fecha asignacion</th>
        <th>Fecha ingreso al taller</th>
        <th>Fecha Finalizacion</th>
        <th>Descripcion</th>
        <th>Ubicacion</th>
        <th>Tipo</th>
        
        <th>Ejecutivo</th>
        <th></th>
      </tr>
    </thead>
    <?php
if($_SESSION['perfil'] <> 1){ 
    $consulta = "
    left join users_contratos as uc on uc.id_contrato = inv.id_contrato where uc.id_user = $iduser and id_estatus = 2 ";
 }else { $consulta = "where id_estatus = 2"; }
  $querysolicitud =  "SELECT  sl.id_folio, inv.economico,inv.serie ,inv.placas, 
                      sl.fecha_solicitud,sl.descripcion,
                      CONCAT(upv.vialidad,', ' ,upv.numero_interior, ', ' ,upv.numero_exterior, ', ' ,upv.colonia, ', ' ,upv.entidad_federativa , ', ' ,upv.municipio, ', ' ,upv.codigo_postal) as ubicacionfsc,cts.tipo,ces.tipo_estatus_solicitud,
                      sl.ubicacion_solicitud,sl.usuario_creacion,sl.fecha_asignacion,sl.fecha_ingreso_servicio,sl.fecha_salida_servicio, sl.ejecutivo_asignacion, ces.id_estatus_solicitud
  from solicitud sl
 left join inventario inv on inv.id = sl.id_inventario 
 left join proveedor prv on prv.id_proveedor = sl.id_proveedor
 left join ubicacion_proveedor upv on upv.id_proveedor = prv.id_proveedor
 left join cat_tipo_solicitud cts on cts.id_tipo_solicitud = sl.id_tipo
 left join cat_estatus_solicitud ces on ces.id_estatus_solicitud = sl.id_estatus
 
 $consulta
 order by ces.orden asc, sl.fecha_solicitud desc
  "; 
    $resultadosolicitud = mysqli_query($conexion, $querysolicitud);
    while ($filasolic = mysqli_fetch_array($resultadosolicitud)) { 
  
      ?> 
      <tbody> 
        <?PHP

        // echo "permiso para ver:".$_SESSION['viewdoc_'.$filaup['id_tipo_documento']]."tipo_documento: ".$filaup['id_tipo_documento'];

        // if ($_SESSION['viewdoc_' . $filaup['id_tipo_documento']] . "" == "1") {
        ?>
          <tr>
 
            <td data-titulo="Folio: "><?php echo $filasolic['id_folio'] ?></td>
            <td data-titulo="Economico: "><?php echo $filasolic['economico'] ?></td>
            <td data-titulo="Serie: "><?php echo $filasolic['serie']  ?></td>
            <td data-titulo="Placas: "><?php echo $filasolic['placas'] ?></td>
            <td data-titulo="Fecha solicitud: "><?php  $date = date_create($filasolic['fecha_solicitud']);
            echo date_format($date, 'd-m-Y H:i:s'); ?></td> 
             <td data-titulo="Fecha solicitud: "><?php if($filasolic['fecha_asignacion'] == '0000-00-00 00:00:00' ){echo "00:00:00"; }else{ $date = date_create($filasolic['fecha_asignacion']) ;
            echo date_format($date, 'd-m-Y H:i:s'); } ?></td> 
             <td data-titulo="Fecha solicitud: "><?php if($filasolic['fecha_ingreso_servicio']  == '0000-00-00' ){echo "00:00:00"; }else{ $date = date_create($filasolic['fecha_ingreso_servicio']);
            echo date_format($date, 'd-m-Y H:i:s');} ?></td> 
            <td data-titulo="Fecha solicitud: "><?php if($filasolic['fecha_salida_servicio']  == '0000-00-00' ){echo "00:00:00"; }else{ $date = date_create($filasolic['fecha_salida_servicio']);
            echo date_format($date, 'd-m-Y H:i:s'); } ?></td> 
            <td data-titulo="Descripcion: "><?php echo $filasolic['descripcion'] ?></td>
            <td data-titulo="Ubicacion: "><?php echo $filasolic['ubicacion_solicitud'] ?></td>
            <td data-titulo="Tipo: "><?php echo $filasolic['tipo'] ?></td>
          
            <td data-titulo="Ejecutivo: "><?php echo $filasolic['ejecutivo_asignacion'] ?></td>
            <!-- <td><button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#modificarsoli" onclick="agregaform('<?php echo $datoss ?>')">Modificar.</button></td> -->
            <?php if ($_SESSION['view_asignar_solicitud'] == "1") { ?>
            <td><?php echo ' <a class="btn btn-primary black-background white" href="solicitud.php?id=' . $filasolic['id_folio'] . '" >Detalle</a>'; ?></td>
            <?php } ?>



          </tr>
        <?PHP
        }
        ?>
      </tbody>
    <?php
    // }
 
    ?>
  </table> 
  </div>

<div class="modal fade bd-example-modal-lg" id="modalsolicitud" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Solicitud</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form class="row g-3" action="ins_solicitud.php" onSubmit="return validarsolicitud()" method="POST">
 
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="inpTipoSoli" class="form-label">Economico</label>
                            <input type="text" class="form-control" name="inpEconomico" id="inpEconomico">
                        </div>
 
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="inpTipoSoli" class="form-label">Serie</label>
                            <select  class="form-control" name="inpSerie" id="inpSerie" readonly>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inpTipoSoli" class="form-label">Placa</label>
                            <select  class="form-control" name="inpPlaca" id="inpPlaca" readonly>
                            </select>
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="inpTipoSoli" class="form-label">Tipo de solicitud</label>
                            <select name="inpTipoSoli" id="inpTipoSoli" class="form-control">

                                <?PHP $catsoli = mysqli_query($conexion, "SELECT * from cat_tipo_solicitud ");

                                while ($filasoli = mysqli_fetch_array($catsoli)) { ?>

                                    <option value='<?php echo $filasoli['id_tipo_solicitud']; ?>'> <?php echo $filasoli['tipo']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <!-- <div class="col-md-6">
                            <label for="inpKilometrajeSoli" class="form-label">Kilometraje actual</label>
                            <input type="number" class="form-control" name="inpKilometrajeSoli" id="inpKilometrajeSoli" onkeypress="return valideKey(event);" value="<?php echo $fila['kilometraje'] ?>">
                            <input type="hidden" class="form-control" name="inpKilometrajevali" id="inpKilometrajevali" value="<?php echo $fila['kilometraje'] ?>">
                        </div> -->
                    </div><br>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="inpcp" class="form-label">CP</label>
                            <input type="text" class="form-control" name="inpcp" id="inpcp" >
                        </div> 
                        <div class="col-md-9">
                            <label for="inpColonia" class="form-label">Colonia</label>
                            <select type="text" class="form-control" name="inpColonia" id="inpColonia" >
                            </select>
                        </div>
                    </div> 
               
                   
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="inpUbicacionSoli" class="form-label">Ubicación</label>
                            <textarea type="text" class="form-control" name="inpUbicacionSoli" id="inpUbicacionSoli" cols="30" rows="1"></textarea>
                        </div>
 
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="inpDescripSoli" class="form-label">Descripcion</label>
                            <textarea type="text" class="form-control" name="inpDescripSoli" id="inpDescripSoli" cols="30" rows="1"></textarea>
                        </div>
                    </div>
                    <input type="hidden" name="id" id="id" value="<?php echo $id_inventario ?>">
                    <input type="hidden" name="usuario" id="usuario" value="<?php echo $usuario; ?>">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button id="btnsolicitarnuev" name="btnsolicitarnuev" class="btn btn-primary ">Solicitar</button>

                    </div>
                </form>
            </div>
        </div> 
    </div>
</div>
</div>


<script>
    // $(document).ready(function() {
    //     $('#modalsolicitud').modal('toggle')
    // });
 
    
    $(document).ready(function() {
      $("#inpEconomico").keyup(function() {
        $("#inpEconomico").each(function() {
          id_estado = $(this).val();
          $.post("cat_inventario.php", { 
            id_estado: id_estado  
          }, function(data) {  
            $("#inpSerie").html(data);
          });
        });
      })
    });

     
inpEconomico = document.getElementById('inpEconomico').value;


    $(document).ready(function() {
      $("#inpEconomico").keyup(function() {
        $("#inpSerie ").each(function() {
            id_placa = $(this).val();
          $.post("cat_inventario.php", {
            id_placa: id_placa  
          }, function(data) { 
            $("#inpPlaca").html(data);
          });
        });
      })
    });


    $(document).ready(function() {
      $("#inpcp").keyup(function() {
        $("#inpcp").each(function() {
          id_inpcp = $(this).val();
          $.post("cat_inventario.php", { 
            id_inpcp: id_inpcp    
          }, function(data) {  
            $("#inpColonia").html(data);
          });
        });
      })
    });

</script>

<?php include("footer.php") ?>