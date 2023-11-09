<?php
 require ('../conexion.php');
 $var1 = $_POST['btnaa'];

 $querydiscaredo =  "SELECT s.username,
s.email as email_slack,
w.nombre_completo,
s.fullname , 
w.nombreposicion,
 w.correoelectronico as email_workbeat,
com.model, 
com.processor,
CASE WHEN w.region IS NULL THEN s.region else w.region end as region, 
case WHEN s.id_slack = w.id_slack THEN 1 ELSE 0 end as Workbeat,
case WHEN s.id_slack = o.id_slack THEN 1 ELSE 0 end as OpenAir , o.active,
case WHEN s.id_slack = ou.id_slack THEN 1 ELSE 0 end as OracleUniversity,
case WHEN s.id_slack = com.id_slack THEN 1 ELSE 0 end as ComodoA,
case WHEN s.id_slack = wv.id_slack THEN 1 ELSE 0 end as WaveA,
case WHEN s.id_slack = gn.id_slack THEN 1 ELSE 0 end as Googlenetsoft,
case WHEN s.id_slack = gc.id_slack THEN 1 ELSE 0 end as GoogleCloudsuite,
off.negocios  as Office_Empresarial,
off.visio   as Office_Visio,
off.estandar as Office_Estatal,
case WHEN s.id_slack = ap.id_slack THEN 1 ELSE 0 end as Apcc,
case WHEN s.id_slack = nts.id_slack THEN 1 ELSE 0 end as Netsuitee, nts.acceso_de_inicio_de_sesion ,
case WHEN s.id_slack = ch.id_slack THEN 1 ELSE 0 end as Checadorr,
case WHEN s.id_slack = ds.id_slack THEN 1 ELSE 0 end as docusing,
case WHEN s.id_slack = en.id_slack THEN 1 ELSE 0 end as eden,
case WHEN s.id_slack = jrs.id_slack THEN 1 ELSE 0 end as jetbrains,
case WHEN s.id_slack = smh.id_slack THEN 1 ELSE 0 end as smartsheet
from slack s 
LEFT JOIN workbeat w  on w.id_slack = s.id_slack and w.eliminada = 0
LEFT JOIN openair o  on o.id_slack = s.id_slack and o.eliminada = 0
LEFT JOIN oracle_university ou  on ou.id_slack = s.id_slack and ou.eliminada = 0
LEFT JOIN comodo com  on com.id_slack = s.id_slack and com.eliminada = 0
LEFT JOIN wave wv  on wv.id_slack = s.id_slack and wv.eliminada = 0
LEFT JOIN google_netsoft gn  on gn.id_slack = s.id_slack and gn.eliminada = 0
LEFT JOIN google_cloudsuite gc  on gc.id_slack = s.id_slack and gc.eliminada = 0
LEFT JOIN v_office off  on off.id_slack = s.id_slack 
left join (select id_slack,count(*)  from apc group by id_slack order by id_slack) as ap  on ap.id_slack = s.id_slack 
left join (select id_slack,acceso_de_inicio_de_sesion,count(*) from netsuite group by id_slack,acceso_de_inicio_de_sesion order by id_slack) as nts on nts.id_slack = s.id_slack
LEFT JOIN checador ch  on ch.id_slack = s.id_slack 
LEFT JOIN docusing ds  on ds.id_slack = s.id_slack and ds.eliminada = 0
LEFT JOIN eden en  on en.id_slack = s.id_slack and en.eliminada = 0
LEFT JOIN jetbrains jrs  on jrs.id_slack = s.id_slack and en.eliminada = 0
LEFT JOIN smartsheet smh  on smh.id_slack = s.id_slack and en.eliminada = 0
where s.eliminada = 0 and 
(s.username like '%$var1%')

order by s.username asc";
$resdiscaredo = mysqli_query($conexion, $querydiscaredo);
$filaresdiscaredo = mysqli_fetch_array($resdiscaredo);
function tab($no)
{
for($x=0; $x<$no; $x++)
$tab="&nbsp;&nbsp;&nbsp;&nbsp;";
return $tab;
}
$palabra=tab(1);



echo  "Correo:                    ".$filaresdiscaredo["email_slack"]."\n";
echo  "Region:                    ".$filaresdiscaredo["region"]."\n";
echo  "Workbeat:                ".$filaresdiscaredo["Workbeat"]."\n";
echo  "OpenAir:                  ".$filaresdiscaredo["OpenAir"]." active:".$filaresdiscaredo["active"]."\n";
echo  "Oracle_University:   ".$filaresdiscaredo["OracleUniversity"]."\n";
echo  "Comodo:                 ".$filaresdiscaredo["ComodoA"]."\n";
echo  "Wave:                       ".$filaresdiscaredo["WaveA"]."\n";
echo  "Google_netsoft:       ".$filaresdiscaredo["Googlenetsoft"]."\n";
echo  "Google_Cloudsuite: ".$filaresdiscaredo["GoogleCloudsuite"]."\n";
echo  "Office_Empresarial:  ".$filaresdiscaredo["Office_Empresarial"]."\n";
echo  "Office_Visio:              ".$filaresdiscaredo["Office_Visio"]."\n";
echo  "Office_Estatal:           ".$filaresdiscaredo["Office_Estatal"]."\n";
echo  "Apc:                           ".$filaresdiscaredo["Apcc"]."\n";
echo  "Netsuite:                   ".$filaresdiscaredo["Netsuitee"]." Active:".$filaresdiscaredo["acceso_de_inicio_de_sesion"]."\n";
echo  "Checador:                 ".$filaresdiscaredo["Checadorr"]."\n";

echo  "Docusing:                 ".$filaresdiscaredo["docusing"]."\n";
echo  "Eden:                 ".$filaresdiscaredo["eden"]."\n";
echo  "JetBrains:                 ".$filaresdiscaredo["jetbrains"]."\n";
echo  "Smartsheet:                 ".$filaresdiscaredo["smartsheet"]."\n";
