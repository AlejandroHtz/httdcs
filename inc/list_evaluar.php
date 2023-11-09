<?php
require 'header.php';

 echo $id_user = $_SESSION['id']; 
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
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
<table class="table table-hover table-condensed table-bordered" id="myTable">
                    <thead>
                      <tr> 
                        <th>Nombre</th>
                        <th>Posicion</th>

                        
                        <th></th>
                    </tr>
                </thead>
                <?php

                $querysolicitud =  "SELECT  w.nombre_completo, w.nombreposicion, w.departamento, w.direccion, pu.id_puesto, sl.id_slack 
                from evaluadores ev
                left join slack sl on sl.id_evaluador = ev.id
                left join workbeat w on w.id_slack = sl.id_slack
                left join puestos pu on pu.puesto = w.nombreposicion
                where ev.id_user = $id_user and sl.evaluado = 0"; 
                $resultadosolicitud = mysqli_query($conexion, $querysolicitud);
                $numero = mysqli_num_rows($resultadosolicitud);
echo 'Número de total de registros: ' . $numero;
                while ($filasolic = mysqli_fetch_array($resultadosolicitud)) { 

                  ?> 
                  <tbody>
                    <?PHP


                    ?>
                    <tr>

                        <td data-titulo="Folio: "><?php echo $filasolic['nombre_completo'] ?></td>
                        <td data-titulo="Folio: "><?php echo $filasolic['nombreposicion'] ?></td>
                  
                        <td><?php 
                        echo ' <a class="btn btn-danger black-background white" href="form_eval.php?id=' . $filasolic['id_slack'] . '&po='. $filasolic['id_puesto'].'" >Evaluar</a>';
                        
                    ?></td>


                    </tr>
                    <?PHP
                }
                ?>
            </tbody>
            <?php


            ?>
        </table>

        </div>
        <!-- 2023 -->
        
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <table class="table table-hover table-condensed table-bordered" id="myTable">
                    <thead>
                      <tr> 
                        <th>Nombre</th>
                        <th>Posicion</th>
                    
                        
                        <th></th>
                    </tr>
                </thead>
                <?php

                $querysolicitud =  "SELECT  w.nombre_completo, w.nombreposicion, w.departamento, w.direccion, pu.id_departamento, sl.id_slack 
                from evaluadores ev
                left join slack sl on sl.id_evaluadordos = ev.id
                left join empleado w on w.id_slack = sl.id_slack
                left join departamentos pu on pu.puesto = w.nombreposicion
                where ev.id_user = $id_user and sl.evaluadodos = 0 and w.id_slack is not null"; 
                $resultadosolicitud = mysqli_query($conexion, $querysolicitud);
                $numero = mysqli_num_rows($resultadosolicitud);
                echo 'Número de total de registros 2023: ' . $numero;
                while ($filasolic = mysqli_fetch_array($resultadosolicitud)) { 

                  ?> 
                  <tbody>
                    <?PHP

 
                    ?>
                    <tr>

                        <td data-titulo="Folio: "><?php echo $filasolic['nombre_completo'] ?></td>
                        <td data-titulo="Folio: "><?php echo $filasolic['nombreposicion'] ?></td>
          
                        <td><?php 
                        echo ' <a class="btn btn-danger black-background white" href="form_evaluacion.php?id=' . $filasolic['id_slack'] . '&po='. $filasolic['id_departamento'].'" >Evaluar</a>';
                        
                    ?></td>

 
                    </tr>
                    <?PHP
                }
                ?>
            </tbody>
            <?php


            ?>
        </table>
</div>

</div>
</div>
<?php 
require 'footer.php';
?>
