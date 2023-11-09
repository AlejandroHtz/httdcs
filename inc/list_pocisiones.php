<?php
require 'header.php';

$id_user = $_SESSION['id'];
if ($_SESSION['email'] === "pgutierrez@netsoft.com") {
} else {
  echo '<script type="text/javascript">
  alert("No debes de editar la url");
  window.location.href="../";
  </script>';
}
?>
<div class="content-wrapper">

  <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">2023</button>
      <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">2022</button>
      <!-- <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button> -->
    </div>
  </nav>

  <div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

<table class="table table-hover table-condensed table-bordered" id="myTable">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Estatus</th>
    
      <th><button type="button" style='font-size:15px' data-bs-toggle="modal" data-bs-target="#agregardep">Nuevo</button></th>



    </tr>
  </thead>
  <?php

  $querysolicitud =  "SELECT id_departamento, puesto,periodo, case when estatus = 1 then 'Completado'
          else 'Pendiente' end as statuss, anio from departamentos where anio  = 2023 order by  estatus asc  ";
  $resultadosolicitud = mysqli_query($conexion, $querysolicitud);
  $numero = mysqli_num_rows($resultadosolicitud);
  echo 'Número de total de registros 2023: ' . $numero;
  while ($filasolic = mysqli_fetch_array($resultadosolicitud)) {

  ?>
    <tbody>
      <?PHP

      // echo "permiso para ver:".$_SESSION['viewdoc_'.$filaup['id_tipo_documento']]."tipo_documento: ".$filaup['id_tipo_documento'];

      // if ($_SESSION['viewdoc_' . $filaup['id_tipo_documento']] . "" == "1") {
      ?>
      <tr>

        <td data-titulo="Folio: "><?php echo $filasolic['puesto'] ?></td>
        <td data-titulo="Folio: "><?php echo $filasolic['statuss'] ?></td>
        <td><?php
           echo ' <a class="btn btn-danger black-background white" href="formularios_new.php?id=' . $filasolic['id_departamento'] . '&a=' . $filasolic['anio'] . '&p=' . $filasolic['periodo'].'" >Editar</a>';

            ?></td>


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
    
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

      <table class="table table-hover table-condensed table-bordered" id="myTable">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Estatus</th>
            <th></th>


            <th></th>
          </tr>
        </thead>
        <?php

        $querysolicitud =  "SELECT id_puesto, puesto, case when estatus = 1 then 'Completado'
                else 'Pendiente' end as statuss from puestos order by  estatus asc  ";
        $resultadosolicitud = mysqli_query($conexion, $querysolicitud);
        $numero = mysqli_num_rows($resultadosolicitud);
        echo 'Número de total de registros: ' . $numero;
        while ($filasolic = mysqli_fetch_array($resultadosolicitud)) {

        ?>
          <tbody>
            <?PHP

            // echo "permiso para ver:".$_SESSION['viewdoc_'.$filaup['id_tipo_documento']]."tipo_documento: ".$filaup['id_tipo_documento'];

            // if ($_SESSION['viewdoc_' . $filaup['id_tipo_documento']] . "" == "1") {
            ?>
            <tr>

              <td data-titulo="Folio: "><?php echo $filasolic['puesto'] ?></td>
              <td data-titulo="Folio: "><?php echo $filasolic['statuss'] ?></td>
              <td><?php
                  echo ' <a class="btn btn-danger black-background white" href="formularios.php?id=' . $filasolic['id_puesto'] . '" >Editar</a>';

                  ?></td>


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



  </div>

  <div class="modal fade" id="agregardep" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="forminsdep">
          <div class="mb-3">
            <label for="InpDepartamento" class="form-label">Departamento</label>
            <input type="text" class="form-control" id="InpDepartamento" name="InpDepartamento" >
            <div id="InpDepartamento" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="InpDireccion" class="form-label">Direccion</label>
            <input type="text" class="form-control" name="InpDireccion" id="InpDireccion">
          </div>
          <div class="mb-3">
            <label for="InpAnio" class="form-label">Año</label>
            <input type="number" class="form-control" id="InpAnio" name="InpAnio" value="2023" placeholder="2023">
          </div>
          <button id="btnguardarfor" type="button" name="btnguardarfor" class="btn btn-primary" onclick="insertDep();">Agregar</button>
        </div>
        </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

        </div>
        
      </div>
    </div>
  </div>
  <?php
  require 'footer.php';
  ?>

<script>
function insertDep(){ 

var datos = $('#forminsdep').serialize();
$.ajax({
  type: "POST", 
  url: "querys/ins_dep.php",
  data: datos, 
  beforeSend: function () {
            
      }, 
      success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
             
              alert(response);
              if(response ==="Insertado"){
                location.reload();
              }else{ }
      }
});

};

</script>