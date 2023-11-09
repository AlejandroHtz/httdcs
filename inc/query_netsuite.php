<?php
 require ('../conexion.php');
 echo $var1 = $_POST['inpTodo'];
echo "
<table class='table table-hover table-condensed'>
<thead>
<tr >
<td>nombre</td>
<td>correo_electronico</td>
<td>supervisor</td>
<td>departamento</td>
<td>ubicacion</td>
<td>pais_de_facturacion</td>

  
</tr>
</thead>";
$querydiscaredo =  "SELECT * from netsuite where 
(nombre  like '%$var1%' or 
correo_electronico  like '%$var1%' or
supervisor  like '%$var1%' or
departamento  like '%$var1%' or
pais_de_facturacion  like '%$var1%' or
ubicacion  like '%$var1%'  )
order by nombre asc";
$resdiscaredo = mysqli_query($conexion, $querydiscaredo);
while ($filaresdiscaredo = mysqli_fetch_array($resdiscaredo)) {

    echo"
    <tbody>
    <tr>
   
    <td>".$filaresdiscaredo['nombre']."</td>
    <td>".$filaresdiscaredo['correo_electronico']."</td>
    <td>".$filaresdiscaredo['supervisor']."</td>
    <td>".$filaresdiscaredo['departamento']."</td>
    <td>".$filaresdiscaredo['ubicacion']."</td>
    <td>".$filaresdiscaredo['pais_de_facturacion']."</td>
   
    
   
   
    </tr>
    
    </tbody>";
        }
    echo "</table>";

