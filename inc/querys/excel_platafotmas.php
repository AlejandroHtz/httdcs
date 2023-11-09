<?php
require '../../conexion.php';
 if($_SESSION['email']==="admin@netsoft.com") { 
$file="plataformas_" . date('Y:m:d:m:s').".xls";
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
  <td>User</td>
  <td>Email</td>
  <td>Nombre completo </td>
  <td>Departamento</td>
  <td>Puesto</td>
  <td>region</td>
  <td>Meses de uso</td>
  <td>Marca</td>
  <td>model</td>
  <td>Monto</td>
  <td>Slack</td>
  <td>Workbeat</td>
  <td>OpenAir</td>
  <td>OracleUniversity</td>
  <td>WaveA</td>
  <td>Workspace Standard</td>
  <td>Workspace Starter</td>
  <td>GoogleCloudsuite</td>
  <td>Office_Empresarial</td>
  <td>Office_Visio</td>
  <td>Office_Estatal</td>
  <td>Apcc</td>
  <td>Checadorr</td>
  <td>docusing</td>
  <td>eden</td>
  <td>jetbrains</td>
  <td>smartsheet</td> 
  <td>zoom</td>
  <td>Netsuiteefull</td>
  <td>Netsuitecent</td>
  <td>ComodoA</td>
	</tr>
 </thead>
		<?php 

$query = "SELECT 
s.username,
s.email as email_slack,
CASE WHEN  aw.nombre IS NULL THEN w.nombre_completo else aw.nombre end as nombre,
aw.departamento,
aw.puesto,
CASE WHEN aw.pais IS NULL THEN s.region else aw.pais end as region, 
TIMESTAMPDIFF(YEAR,comh.f_ini_garantia,CURRENT_DATE) as meses_de_uso,
com.system_manufacturer as marca,
com.model, 
comh.monto,
(select cu_mensual from plataformas where id = 11) as Slack,
case WHEN s.id_slack = w.id_slack THEN (select cu_mensual from plataformas where id = 17) ELSE 0 end as Workbeat,
case WHEN s.id_slack = o.id_slack THEN (select cu_mensual from plataformas where id = 24) ELSE 0 end as OpenAir ,
case WHEN s.id_slack = ou.id_slack THEN 'SI' ELSE 0 end as OracleUniversity,
case WHEN s.id_slack = wv.id_slack THEN 'SI' ELSE 'NO' end as WaveA,
case WHEN s.id_slack = gn.id_slack THEN (select cu_mensual from plataformas where id = 27) ELSE 0 end as GoogleStandard,
case WHEN s.id_slack = gns.id_slack THEN (select cu_mensual from plataformas where id = 28) ELSE 0 end as GoogleStarter,
case WHEN s.id_slack = gc.id_slack THEN (select cu_mensual from plataformas where id = 9) ELSE 0 end as GoogleCloudsuite,
 case when off.negocios  =1 then (select cu_mensual from plataformas where id = 18) else 0 end as Office_Empresarial,
 case when off.visio =1 then (select cu_mensual from plataformas where id = 20) else 0 end as Office_Visio,
 case when off.estandar =1 then (select cu_mensual from plataformas where id = 19) else 0 end as Office_Estatal,
case WHEN s.id_slack = ap.id_slack THEN 'SI' ELSE 'NO' end as Apcc,
case WHEN s.id_slack = ch.id_slack THEN 'SI' ELSE 'NO' end as Checadorr,
case WHEN s.id_slack = ds.id_slack THEN (select cu_mensual from plataformas where id = 8) ELSE 0 end as docusing,
case WHEN s.id_slack = en.id_slack THEN 'SI' ELSE 'NO' end as eden,
case WHEN s.id_slack = jrs.id_slack THEN (select cu_mensual from plataformas where id = 15) ELSE 0 end as jetbrains,
case WHEN s.id_slack = smh.id_slack THEN (select cu_mensual from plataformas where id = 12) ELSE 0 end as smartsheet,
case WHEN s.id_slack = zz.id_slack THEN (select cu_mensual from plataformas where id = 29) ELSE 0 end as zoom,
case WHEN s.id_slack = fnts.id_slack THEN (select cu_mensual from plataformas where id = 21) ELSE 0 end as Netsuiteefull,
case WHEN s.id_slack = nts.id_slack THEN (select cu_mensual from plataformas where id = 22) ELSE 0 end as NetsuiteeCent,
case WHEN s.id_slack = com.id_slack THEN (select cu_mensual from plataformas where id = 7) ELSE 0 end as ComodoA,
'' as wrike

from slack s 
LEFT JOIN activos aw  on aw.id_slack = s.id_slack and aw.eliminada = 0
LEFT JOIN workbeat w  on w.id_slack = s.id_slack and w.eliminada = 0
LEFT JOIN openair o  on o.id_slack = s.id_slack and o.eliminada = 0
LEFT JOIN oracle_university ou  on ou.id_slack = s.id_slack and ou.eliminada = 0
LEFT JOIN comodo com  on com.id_slack = s.id_slack and com.eliminada = 0
left join hist_comodo comh on comh.serial_number = com.serial_number and comh.eliminada = 0
LEFT JOIN wave wv  on wv.id_slack = s.id_slack and wv.eliminada = 0
LEFT JOIN google_netsoft gn  on gn.id_slack = s.id_slack and gn.eliminada = 0 AND gn.licenses LIKE '%1010020028%'
LEFT JOIN google_netsoft gns  on gns.id_slack = s.id_slack and gns.eliminada = 0 AND gns.licenses LIKE '%1010020027%'
LEFT JOIN google_cloudsuite gc  on gc.id_slack = s.id_slack and gc.eliminada = 0
LEFT JOIN v_office off  on off.id_slack = s.id_slack 
left join (select id_slack,count(*)  from apc group by id_slack order by id_slack) as ap  on ap.id_slack = s.id_slack 
left join (select id_slack,acceso_de_inicio_de_sesion,count(*) from netsuite WHERE acceso_de_inicio_de_sesion = 'Sí' and rol not in ('Centro de empleados',
'Centro de soporte de NetSuite (básico)') group by id_slack,acceso_de_inicio_de_sesion order by id_slack ) as fnts on fnts.id_slack = s.id_slack
left join (select id_slack,acceso_de_inicio_de_sesion,count(*) from netsuite WHERE acceso_de_inicio_de_sesion = 'Sí' and rol in ('Centro de empleados',
'Centro de soporte de NetSuite (básico)') group by id_slack,acceso_de_inicio_de_sesion order by id_slack ) as nts on nts.id_slack = s.id_slack

LEFT JOIN checador ch  on ch.id_slack = s.id_slack 

LEFT JOIN docusing ds  on ds.id_slack = s.id_slack and ds.eliminada = 0
LEFT JOIN eden en  on en.id_slack = s.id_slack and en.eliminada = 0
LEFT JOIN jetbrains jrs  on jrs.id_slack = s.id_slack and jrs.eliminada = 0
LEFT JOIN smartsheet smh  on smh.id_slack = s.id_slack and smh.usuarioconlicencia = 1
LEFT JOIN zoom zz  on zz.id_slack = s.id_slack and zz.eliminada = 0 and zz.tipo_licencia = 'Con licencia'
where s.eliminada = 0 order by s.email asc"  ;
$resdiscaredo = mysqli_query($conexion, $query);
while ($fila = mysqli_fetch_array($resdiscaredo)) { ?>
	<tr>
<td ><?php echo $fila[0] ?></td>
<td ><?php echo $fila[1] ?></td>
<td ><?php echo $fila[2] ?></td>
<td ><?php echo $fila[3] ?></td>
<td ><?php echo $fila[4] ?></td>
<td ><?php echo $fila[5] ?></td>
<td ><?php echo $fila[6] ?></td>
<td ><?php echo $fila[7] ?></td>
<td ><?php echo $fila[8] ?></td>
<td ><?php echo number_format($fila[9],2) ?></td>
<td ><?php echo number_format($fila[10],2) ?></td>
<td ><?php echo number_format($fila[11],2) ?></td>
<td ><?php echo number_format($fila[12],2) ?></td>
<td ><?php echo $fila[13] ?></td>
<td ><?php echo $fila[14]?></td> 
<td ><?php echo number_format($fila[15],2) ?></td>
<td ><?php echo number_format($fila[16],2) ?></td>
<td ><?php echo number_format($fila[17],2)?></td>
<td ><?php echo number_format($fila[18],2) ?></td>
<td ><?php echo number_format($fila[19],2) ?></td>
<td ><?php echo number_format($fila[20],2) ?></td>
<td ><?php echo $fila[21] ?></td>
<td ><?php echo $fila[22] ?></td>
<td ><?php echo $fila[23]?></td>
<td ><?php echo $fila[24]  ?></td>
<td ><?php echo number_format($fila[25],2) ?></td>
<td ><?php echo number_format($fila[26],2) ?></td>
<td ><?php echo number_format($fila[27],2) ?></td>
<td ><?php echo number_format($fila[28],2) ?></td>
<td ><?php echo number_format($fila[29],2) ?></td>
<td ><?php echo number_format($fila[30],2) ?></td>
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