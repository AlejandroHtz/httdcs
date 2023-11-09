<?php
 require ('../conexion.php');


echo "
<table class='table table-hover table-condensed'>
<thead>
<tr >
  <td>Evaluado</td>
  <td>Puesto</td>
  <td>Depto</td>
  <td>Dirección</td>
  <td>Evaluador</td>
  <td>Califiación Objetivos Q4 2021</td>
  <td>Calificación Competencias Q4 2021 </td>
  <td>Calificación Global Q4 2021</td>

  <td>% Rendimiento Integral Q4 2021</td>
  <td>Completada</td>
  <td></td>
  
</tr>
</thead>";
 $querydiscaredo =  "SELECT ww.nombre_completo, ww.nombreposicion, ww.departamento, ww.direccion,
 evv.nombre,
 oi.calificacion_objetivos, oi.calific_competencias, (oi.calificacion_objetivos + oi.calific_competencias)/2 as Calificacion_Global,

 (oi.calificacion_objetivos + oi.calific_competencias) as rendimiento,
 case when s.evaluado > 0 then 'Si' else 'No' end as evaluado

 
FROM objetivos_info AS oi
LEFT JOIN   slack as s on s.id_slack = oi.id_slack
LEFT join workbeat as ww on ww.id_slack = oi.id_slack
LEFT JOIN evaluadores as evv on evv.id = s.id_evaluador

where s.id_evaluador > 0";
$resdiscaredo = mysqli_query($conexion, $querydiscaredo);
while ($filaresdiscaredo = mysqli_fetch_array($resdiscaredo)) {

    echo"
    <tbody>
    <tr> 
    
    
    <td>".$filaresdiscaredo['0']."</td> 
    <td>".$filaresdiscaredo['1']."</td>
    <td>".$filaresdiscaredo['2']."</td>
    <td>".$filaresdiscaredo['3']."</td>
    <td>".$filaresdiscaredo['4']."</td>
    <td>".$filaresdiscaredo['5']."</td>
    <td>".$filaresdiscaredo['6']."</td>
    <td>".$filaresdiscaredo['7']."</td>
    <td>".$filaresdiscaredo['8']."</td>
    <td>".$filaresdiscaredo['9']."</td>
 

   
    </tr>
    
    </tbody>";
        }
    echo "</table>";

