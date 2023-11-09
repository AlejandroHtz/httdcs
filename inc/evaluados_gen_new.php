<?php
require '../conexion.php';

if(!isset($codigo)){
  echo'<script type="text/javascript">
    alert("No debes de editar la url");
    window.location.href="../";
    </script>';
}

 if ($_SESSION['gerente']<> 1){   echo'<script type="text/javascript">
    alert("No debes de editar la url");
    window.location.href="../";
    </script>'; }

    $id=$_SESSION['id'];
$query =  "SELECT direccion from users as us
left join evaluadores as ev on ev.id_user = us.id
where us.id = '$id' ";
$resdiscaredo = mysqli_query($conexion, $query);
$filaresdiscaredo = mysqli_fetch_assoc($resdiscaredo);
$var = $filaresdiscaredo['direccion'];

if($var ==="Todas"){
  
  $consulta = "where s.id_evaluadordos > 0 and s.eliminada = 0";
  $consultados = "where s.eliminada = 0 and s.id_evaluadordos > 0";
  $consultatres = "where s.eliminada = 0 and s.id_evaluadordos > 0 and s.evaluadodos = 1";
  $consultacuatro = "where s.eliminada = 0 and s.id_evaluadordos > 0 and s.evaluadodos in (0, '')";
}else{
  $consulta = "where oi.direccion = '$var' and s.eliminada = 0"; 
  $consultados = "where s.eliminada = 0 and s.id_evaluadordos > 0 and ww.direccion = '$var'";
  $consultatres = "where s.eliminada = 0 and s.id_evaluadordos > 0 and s.evaluadodos = 1 and ww.direccion = '$var'";
  $consultacuatro = "where s.eliminada = 0 and s.id_evaluadordos > 0 and s.evaluadodos in (0, '') and ww.direccion = '$var'";
}
        
    
?>

 

    <!-- Main content -->
<section>

<table class='table table-hover table-condensed'>
<thead>
<tr >
  <td>Evaluado</td>
  <td>Puesto</td>
  <td>Depto</td>
  <td>Dirección</td>
  <td>Evaluador</td>
  <td>Califiación Objetivos Q4 2023</td>
  <td>Calificación Competencias Q4 2023 </td>
 

  <td>Calificacion total e dd 2023</td>
  <td>Completada</td>
  <td></td>
  
</tr>
</thead>
<?php
$querydiscaredo =  "SELECT ww.nombre_completo, ww.nombreposicion, ww.departamento, ww.direccion,
evv.nombre,
oi.calificacion_objetivos, oi.calific_competencias, (oi.calificacion_objetivos + oi.calific_competencias)/2 as Calificacion_Global,
(oi.calificacion_objetivos + oi.calific_competencias) as rendimiento,
case when s.evaluadodos > 0 then 'Si' else 'No' end as evaluado, s.id_slack
FROM objetivos_info_new AS oi
LEFT JOIN   slack as s on s.id_slack = oi.id_slack
LEFT join empleado as ww on ww.id_slack = oi.id_slack
LEFT JOIN evaluadores as evv on evv.id = s.id_evaluadordos
$consulta
order by  evaluado desc,ww.nombre_completo asc";
$resdiscaredo = mysqli_query($conexion, $querydiscaredo);


$id_vari=  "SELECT count(*) as coun from slack as s 
left join empleado as ww on ww.id_slack = s.id_slack 
$consultados ";
$resdiscaredos = mysqli_query($conexion, $id_vari);
$id_varido = mysqli_fetch_assoc($resdiscaredos);
$vars = $id_varido['coun'];

$id_comp= "SELECT count(*) as coun from slack as s 
left join empleado as ww on ww.id_slack = s.id_slack 
$consultatres";
$resdiscaredosscom = mysqli_query($conexion, $id_comp);
$id_varidocomp = mysqli_fetch_assoc($resdiscaredosscom);
$varscomp = $id_varidocomp['coun'];

$id_pend= "SELECT count(*) as coun from slack as s 
left join empleado as ww on ww.id_slack = s.id_slack 
$consultacuatro";
$resdiscarpend = mysqli_query($conexion, $id_pend);
$id_varidocpend = mysqli_fetch_assoc($resdiscarpend);
$varspend = $id_varidocpend['coun'];

echo 'Total a evaluar: ' . $vars; ?><br><?php
echo 'Evaluaciones completas: ' . $varscomp; ?><br><?php
echo 'Evaluaciones pendientes: ' . $varspend;
while ($filaresdiscaredo = mysqli_fetch_array($resdiscaredo)) {
 
?>
    <tbody>
    <tr> 
     
  
    <td><?php echo $filaresdiscaredo['0'] ?></td>  
    <td><?php echo $filaresdiscaredo['1'] ?></td>
    <td><?php echo $filaresdiscaredo['2'] ?></td>
    <td><?php echo $filaresdiscaredo['3'] ?></td>
    <td><?php echo $filaresdiscaredo['4'] ?></td>
    <td><?php echo $filaresdiscaredo['5'] ?></td>
    <td><?php echo $filaresdiscaredo['6'] ?></td>
 
    <td><?php echo $filaresdiscaredo['8'] ?></td>
    <td><?php echo $filaresdiscaredo['9'] ?></td>
   

   
    </tr>
    
    </tbody>
      <?php  } ?>
   </table>
    </section>


<?php

?>
<script>
 
</script> 