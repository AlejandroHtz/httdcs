<?php
 require ('../conexion.php');
 $var1 = $_POST['inpTodo'];
echo "
<table class='table table-hover table-condensed'>
<thead>
<tr >
  <td>User</td>
  <td>Email</td>
  <td>Nombre completo </td>
  <td>fullname</td>
 
  <td>Departamento</td>
  <td>Puesto</td>
  <td>correoelectronico</td>
  <td>model </td>
  <td>processor</td>
  
  <td>region</td>
  <td>Workbeat</td>
  
  <td>OpenAir</td>
  <td>active</td>
  <td>OracleUniversity</td>
  <td>ComodoA</td>
  <td>WaveA</td>
  <td>Googlenetsoft</td>
  <td>GoogleCloudsuite</td>
  <td>Office_Empresarial</td>
  <td>Office_Visio</td>
  <td>Office_Estatal</td>
  <td>Apcc</td>
  <td>Netsuitecent</td>
  <td>Netsuiteefull</td>

  <td>Checadorr</td>
  <td>docusing</td>
  <td>eden</td>
  <td>jetbrains</td>
  <td>smartsheet</td>

</tr>
</thead>";
 $querydiscaredo =  "SELECT s.username,
 s.email as email_slack,
 CASE WHEN  aw.nombre IS NULL THEN w.nombre_completo else aw.nombre end as nombre,
 s.fullname , 
 aw.departamento,
 aw.puesto,
  aw.email as email_workbeat,
com.model, 
 com.processor,
 CASE WHEN aw.pais IS NULL THEN s.region else aw.pais end as region, 
 case WHEN s.id_slack = w.id_slack THEN 1 ELSE 0 end as Workbeat,
 case WHEN s.id_slack = o.id_slack THEN 1 ELSE 0 end as OpenAir , o.active,
 case WHEN s.id_slack = ou.id_slack THEN 1 ELSE 0 end as OracleUniversity,
 case WHEN s.id_slack = com.id_slack THEN 1 ELSE 0 end as ComodoA,
 case WHEN s.id_slack = wv.id_slack THEN 1 ELSE 0 end as WaveA,
 case WHEN s.id_slack = gn.id_slack THEN 1 ELSE 0 end as Googlenetsoft,
 case WHEN s.id_slack = gc.id_slack THEN 1 ELSE 0 end as GoogleCloudsuite,
 case when off.negocios  =1 then 1 else 0 end as Office_Empresarial,
 case when off.visio =1 then 1 else 0 end as Office_Visio,
 case when off.estandar =1 then 1 else 0 end as Office_Estatal,
 case WHEN s.id_slack = ap.id_slack THEN 1 ELSE 0 end as Apcc,
 case WHEN s.id_slack = nts.id_slack THEN 1 ELSE 0 end as NetsuiteeCent,
 case WHEN s.id_slack = fnts.id_slack THEN 1 ELSE 0 end as Netsuiteefull,
 case WHEN s.id_slack = ch.id_slack THEN 1 ELSE 0 end as Checadorr,
 case WHEN s.id_slack = ds.id_slack THEN 1 ELSE 0 end as docusing,
 case WHEN s.id_slack = en.id_slack THEN 1 ELSE 0 end as eden,
 case WHEN s.id_slack = jrs.id_slack THEN 1 ELSE 0 end as jetbrains,
 case WHEN s.id_slack = smh.id_slack THEN 1 ELSE 0 end as smartsheet
 from slack s 
 LEFT JOIN activos aw  on aw.id_slack = s.id_slack and aw.eliminada = 0
 LEFT JOIN workbeat w  on w.id_slack = s.id_slack and w.eliminada = 0
 LEFT JOIN openair o  on o.id_slack = s.id_slack and o.eliminada = 0
 LEFT JOIN oracle_university ou  on ou.id_slack = s.id_slack and ou.eliminada = 0
 LEFT JOIN comodo com  on com.id_slack = s.id_slack and com.eliminada = 0
 LEFT JOIN wave wv  on wv.id_slack = s.id_slack and wv.eliminada = 0
 LEFT JOIN google_netsoft gn  on gn.id_slack = s.id_slack and gn.eliminada = 0
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
 where s.eliminada = 0  and 
(s.username like '%$var1%' or 
s.email like '%$var1%' or 
s.fullname  like '%$var1%'
or w.nombre_completo like '%$var1%')

order by s.username asc";
$resdiscaredo = mysqli_query($conexion, $querydiscaredo);
while ($filaresdiscaredo = mysqli_fetch_array($resdiscaredo)) {

    echo"
    <tbody>
    <tr> 
    <td><button type'button' id='btna' name = 'btna' type='button' onclick ='btnaj();' value='".$filaresdiscaredo['0']."' >".$filaresdiscaredo['0']."</button></td> 
     

    <td>".$filaresdiscaredo['1']."</td>
    <td>".$filaresdiscaredo['2']."</td>
    <td>".$filaresdiscaredo['3']."</td>
    <td>".$filaresdiscaredo['4']."</td>
    <td>".$filaresdiscaredo['5']."</td>
    <td>".$filaresdiscaredo['6']."</td>
    <td>".$filaresdiscaredo['7']."</td>
    <td>".$filaresdiscaredo['8']."</td>
    <td>".$filaresdiscaredo['9']."</td>
    <td>".$filaresdiscaredo['10']."</td>
    <td>".$filaresdiscaredo['11']."</td>
    <td>".$filaresdiscaredo['12']."</td>
    <td>".$filaresdiscaredo['13']."</td>
    <td>".$filaresdiscaredo['14']."</td>
    <td>".$filaresdiscaredo['15']."</td>
    <td>".$filaresdiscaredo['16']."</td>
    <td>".$filaresdiscaredo['17']."</td>
    <td>".$filaresdiscaredo['18']."</td>
    <td>".$filaresdiscaredo['19']."</td>
    <td>".$filaresdiscaredo['20']."</td>
    <td>".$filaresdiscaredo['21']."</td>
    <td>".$filaresdiscaredo['22']."</td>
    <td>".$filaresdiscaredo['23']."</td>
    <td>".$filaresdiscaredo['24']."</td>
    <td>".$filaresdiscaredo['25']."</td>
    <td>".$filaresdiscaredo['26']."</td>
    <td>".$filaresdiscaredo['27']."</td>
    <td>".$filaresdiscaredo['28']."</td>


    </tr>
    
    </tbody>";
        }
    echo "</table>";

