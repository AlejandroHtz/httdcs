<?php
 require ('../conexion.php');
 echo $var1 = $_POST['inpTodo'];
echo "
<table class='table table-hover table-condensed'>
<thead>
<tr >
<td>nombre_para_mostrar</td>
<td>licencias</td>
<td>ubicacion_de_uso</td>
<td>nombre_principal_de_usuario</td>
<td>Negocios</td>
<td>Estandar</td>
<td>Visio</td>
<td>cuando_se_crea</td>

  
</tr>
</thead>";
$querydiscaredo =  "SELECT nombre_para_mostrar,licencias,ubicacion_de_uso,nombre_principal_de_usuario ,
case when licencias = 'Aplicaciones de Microsoft 365 para negocios' or 
			licencias = 'Microsoft Power Automate Free+Microsoft Teams Exploratory+Aplicaciones de Microsoft 365 para negocios' or 
			licencias = 'Microsoft Teams Exploratory+Aplicaciones de Microsoft 365 para negocios' or
			licencias = 'Visio Plan 2+Aplicaciones de Microsoft 365 para negocios' or
			licencias = 'Visio Plan 2+Microsoft Teams Exploratory+Aplicaciones de Microsoft 365 para negocios' or
			licencias = 'Visio Plan 2+Power BI (gratis)+Microsoft Teams Exploratory+Aplicaciones de Microsoft 365 para negocios' 
	then 1 else 0 end as Negocios,
case when licencias = 'Microsoft 365 Empresa Estándar' or 
		  licencias = 'Visio Plan 2+Microsoft 365 Empresa Estándar' or
		  licencias = 'Visio Plan 2+Microsoft Power Automate Free+Microsoft 365 Empresa Estándar' 
then 1 else 0 end as Estandar,

case when licencias = 'Visio Plan 2' or 
		  licencias = 'Visio Plan 2+Aplicaciones de Microsoft 365 para negocios' or
		  licencias = 'Visio Plan 2+Microsoft 365 Empresa Estándar' or
		  licencias = 'Visio Plan 2+Microsoft Power Automate Free+Microsoft 365 Empresa Estándar' or
		  licencias = 'Visio Plan 2+Microsoft Teams Exploratory+Aplicaciones de Microsoft 365 para negocios' or
		  licencias = 'Visio Plan 2+Power BI (gratis)+Microsoft Teams Exploratory+Aplicaciones de Microsoft 365 para negocios'
		  
then 1 else 0 end as Visio,
cuando_se_crea
from office where 
(nombre_para_mostrar  like '%$var1%' or 
licencias  like '%$var1%' or
ubicacion_de_uso  like '%$var1%' or
nombre_principal_de_usuario  like '%$var1%' or
cuando_se_crea  like '%$var1%'  )
order by nombre_para_mostrar asc";
$resdiscaredo = mysqli_query($conexion, $querydiscaredo);
while ($filaresdiscaredo = mysqli_fetch_array($resdiscaredo)) {

    echo"
    <tbody>
    <tr>
   
    <td>".$filaresdiscaredo['nombre_para_mostrar']."</td>
    <td>".$filaresdiscaredo['licencias']."</td>
    <td>".$filaresdiscaredo['ubicacion_de_uso']."</td>
    <td>".$filaresdiscaredo['nombre_principal_de_usuario']."</td>
    <td>".$filaresdiscaredo['Negocios']."</td>
    <td>".$filaresdiscaredo['Estandar']."</td>
    <td>".$filaresdiscaredo['Visio']."</td>
    <td>".$filaresdiscaredo['cuando_se_crea']."</td>
    
    
   
   
    </tr>
    
    </tbody>";
        }
    echo "</table>";

