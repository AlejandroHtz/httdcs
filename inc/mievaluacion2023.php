<?php
require 'header.php';

$id_slack = $_SESSION['id_slack'];

 $id_user = $_SESSION['id'];  

$sql = mysqli_query ($conexion,"SELECT * from objetivos_info_new where id_slack = '$id_slack'");
		
		 $result= mysqli_num_rows($sql);
		 if ($result > 0) { 
      $sqlselecu = "SELECT * from objetivos_info_new
      where id_slack = $id_slack";
      $registrcu = mysqli_query($conexion, $sqlselecu);
      $regonecontcu = mysqli_fetch_array($registrcu);
      $calificacion_objetivos = $regonecontcu["calificacion_objetivos"];
      $calific_competencias = $regonecontcu["calific_competencias"];
      $calific_total_evaluacion_desempeno = $regonecontcu ["calific_total_evaluacion_desempeno"];
      $areas_a_mejorar= $regonecontcu ["areas_a_mejorar"];
      $fortalezas= $regonecontcu  ["fortalezas"];
      $comp_revisar_prox_evaluacion= $regonecontcu  ["comp_revisar_prox_evaluacion"];
      $comentarioevaluado= $regonecontcu  ["comentarioevaluado"];

      $sqlselecObj = "SELECT * from objetivos_new
      where id_slack = $id_slack ORDER BY ID ASC, num_objetivo_general asc, num_objetivos_sub";
      $registrcObj = mysqli_query($conexion, $sqlselecObj);
        while ($rObj = mysqli_fetch_array($registrcObj)) { 
            $array[] = $rObj;
        }
        // echo trim($arr = json_encode($array[0]["objetivo_dec"]),'"'); 
      
    }
     else{  }

     $sqls = mysqli_query ($conexion,"SELECT * from competencias_new where id_slack = '$id_slack'");
		
		 $resultss= mysqli_num_rows($sqls);
		 if ($resultss > 0) { 
      $sqlselecus = "SELECT * from competencias_new
      where id_slack = $id_slack";
      $registrcus = mysqli_query($conexion, $sqlselecus);
      $rcompetencias = mysqli_fetch_array($registrcus);
      $te_uno = $rcompetencias["te_uno"];
      $te_dos = $rcompetencias["te_dos"];
      $te_tres = $rcompetencias["te_tres"];
      $cec_uno = $rcompetencias["cec_uno"];
      $cec_dos = $rcompetencias["cec_dos"];
      $cec_tres = $rcompetencias["cec_tres"];
      $i_uno = $rcompetencias["i_uno"];
      $i_dos = $rcompetencias["i_dos"];
      $i_tres = $rcompetencias["i_tres"];
      $c_uno = $rcompetencias["c_uno"];
      $c_dos = $rcompetencias["c_dos"];
      $c_tres = $rcompetencias["c_tres"];
      $e_uno = $rcompetencias["e_uno"];
      $e_dos = $rcompetencias["e_dos"];
      $e_tres = $rcompetencias["e_tres"];
      $r_uno = $rcompetencias["r_uno"];
      $r_dos = $rcompetencias["r_dos"];
      $r_tres = $rcompetencias["r_tres"];
      
      $puntaje_obtenido = $rcompetencias["puntaje_obtenido"];
      $nivel_de_desempeno = $rcompetencias["nivel_de_desempeno"];
      $competencias_fuertes = $rcompetencias["competencias_fuertes"];
      $competencias_desarrollar = $rcompetencias["competencias_desarrollar"];




    }
     else{  }

     if ($result > 0 &&  $resultss == 0 ) { ?>
      <script>
        alert ("Es necesario llenar las competencias para ver tus calificaciones, ponte en contacto con tu supervisor");
      </script>
      <?php }
 
?>
<script>
  $( document ).ready(function() {
    $('#staticBackdrop').modal('toggle')
});
</script>


<div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">

      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <h4>Estimado Colaborador <br>
Es importante revisar las calificaciones de tu evaluación de desempeño, si estás de acuerdo con los resultados escribe en el apartado de comentarios: <b>"Estoy de acuerdo"</b>.<br>
En caso de tener alguna inconformidad en algún resultado, objetivos, actividad clave y competencias, escríbelas para que tu evaluador pueda revisarlas. <br>
-En la parte de abajo de la evaluación se encuentra un recuadro donde puedes colocar tus comentarios.<br>
Recuerda que estos comentarios los podrás revisar en la sesión de retroalimentación con tu líder.

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
 
    </div>
  </div>
</div>
</div>
<div class="content-wrapper">
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Objetivos</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Valores Organizacionales</button>
    <!-- <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button> -->
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  <?php include("objetivos_new.php"); ?> 
  </div> 
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  <?php include("competencias_new.php"); ?> 
  </div>
  <!-- <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"><h1>3er seccion</h1></div> -->
</div>

 

</div>

<?php 
require 'footer.php';
?>