<?php
 require ('../conexion.php');
 if($_SESSION['email']==="pgutierrez@netsoft.com") {
$file="evaluados_" . date('Y:m:d:m:s').".xls";
header("Content-Type: application/vnd.ms-excel charset=iso-8859-1");
header("Content-Disposition: attachment; filename=$file");


?> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<table >
  		<thead>
		<tr >
        <th >Evaluado</th>
                    <th>Puesto</th>
                    <th>Depto</th>
                    <th>Dirección</th>
                    <th>Evaluador</th>
                    <th>Califiación Objetivos Q4 2022</th>
                    <th>Calificación Competencias Q4 2022 </th>
                   
                  
                    <th>Calificacion total e dd 2022</th>
                    <th>Completada</th>
                    <th>areas_a_mejorar</th> 
                    <th>fortalezas</th>
                    <th>comp_revisar_prox_evaluacion</th>
                    <th>comentarioevaluado</th>
                    <th>fecha_insercion</th>
                    <th>Trabajo en equipo</th>
                    <th>Centrado en el cliente</th>
                    <th>Integridad</th>
                    <th>Compromiso</th>
                    <th>Empatia</th>
                    <th>Responsavilidad</th>
			
		</tr>
 </thead>
		<?php 

$query = "SELECT ww.nombre_completo, ww.nombreposicion, ww.departamento, ww.direccion,
evv.nombre,
oi.calificacion_objetivos, oi.calific_competencias, (oi.calificacion_objetivos + oi.calific_competencias)/2 as Calificacion_Global,

(oi.calificacion_objetivos + oi.calific_competencias) as rendimiento,
case when s.evaluado > 0 then 'Si' else 'No' end as evaluado,
oi.areas_a_mejorar, oi.fortalezas, oi.comp_revisar_prox_evaluacion, oi.comentarioevaluado, oi.fecha_insercion, 
(cm.te_uno + cm.te_dos + cm.te_tres) as trabequipo, 
(cm.cec_uno + cm.cec_dos + cm.cec_tres) as centradoencliente,
(cm.i_uno + cm.i_dos + cm.i_tres) as integridad,
(cm.c_uno + cm.c_dos + cm.c_tres) as compromiso,
(cm.e_uno + cm.e_dos + cm.e_tres) as empatia,
(cm.r_uno + cm.r_dos + cm.r_tres) as responsavilidad

FROM objetivos_info_new AS oi
LEFT JOIN   slack as s on s.id_slack = oi.id_slack
LEFT join empleado as ww on ww.id_slack = oi.id_slack
LEFT JOIN evaluadores as evv on evv.id = s.id_evaluadordos
LEFT JOIN competencias_new as cm on cm.id_slack = oi.id_slack

where s.id_evaluadordos > 0 and s.eliminada = 0 order by evaluado desc,ww.nombre_completo asc"  ;
$resdiscaredo = mysqli_query($conexion, $query);
while ($fila = mysqli_fetch_array($resdiscaredo)) { ?>
	<tr>
    <td width=121 height=20><?php echo $fila[0] ?></td>
    <td width=121 height=20><?php echo $fila[1] ?></td>
    <td width=121 height=20><?php echo $fila[2] ?></td>
    <td width=121 height=20><?php echo $fila[3] ?></td>
    <td width=121 height=20><?php echo $fila[4] ?></td>
    <td width=121 height=20><?php echo $fila[5] ?></td>
    <td width=121 height=20><?php echo $fila[6] ?></td>

    <td width=121 height=20><?php echo $fila[8] ?></td>
    <td width=121 height=20><?php echo $fila[9] ?></td>
    <td width=121 height=20><?php echo $fila[10] ?></td>
    <td width=121 height=20><?php echo $fila[11] ?></td>
    <td width=121 height=20><?php echo $fila[12] ?></td>
    <td width=121 height=20><?php echo $fila[13] ?></td>
    <td width=121 height=20><?php echo $fila[14] ?></td>	
    <td width=121 height=20><?php echo $fila[15] ?></td>
    <td width=121 height=20><?php echo $fila[16] ?></td>
    <td width=121 height=20><?php echo $fila[17] ?></td>
    <td width=121 height=20><?php echo $fila[18] ?></td>
    <td width=121 height=20><?php echo $fila[19] ?></td>
    <td width=121 height=20><?php echo $fila[20] ?></td>
  
		</tr>
	<?php 
	} 
	 ?>
    </table>
    </body>
</html>

<?php } else {
    echo'<script type="text/javascript">
    alert("No debes de editar la url");
    window.location.href="../";
    </script>';
   } ?>