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
                    <th>Servicio al cliente</th>
                    <th>Compromiso y valor agregado</th>
                    <th>Trabajo en equipo y comunicación</th>
                    <th>Planeación y organización</th>
			
		</tr>
 </thead>
		<?php 

$query = "SELECT ww.nombre_completo, ww.nombreposicion, ww.departamento, ww.direccion,
evv.nombre,
oi.calificacion_objetivos, oi.calific_competencias, (oi.calificacion_objetivos + oi.calific_competencias)/2 as Calificacion_Global,

(oi.calificacion_objetivos + oi.calific_competencias) as rendimiento,
case when s.evaluado > 0 then 'Si' else 'No' end as evaluado,
oi.areas_a_mejorar, oi.fortalezas, oi.comp_revisar_prox_evaluacion, oi.comentarioevaluado, oi.fecha_insercion, 
(cm.sc_uno + cm.sc_dos) as sercliente, 
(cm.cva_uno + cm.cva_dos + cm.valagre_tres) as compvalagre,
(cm.tec_uno + cm.tec_dos + cm.tec_tres + cm.valagre_cuatro) as trabequipcom,
(cm.po_uno + cm.po_dos) as planorg

FROM objetivos_info AS oi
LEFT JOIN   slack as s on s.id_slack = oi.id_slack
LEFT join workbeat as ww on ww.id_slack = oi.id_slack
LEFT JOIN evaluadores as evv on evv.id = s.id_evaluador
LEFT JOIN competencias as cm on cm.id_slack = oi.id_slack

where s.id_evaluador > 0 and s.eliminada = 0 order by evaluado desc,ww.nombre_completo asc"  ;
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