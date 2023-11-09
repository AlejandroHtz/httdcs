<?php
 require ('../conexion.php');
 echo $var1 = $_POST['inpTodo'];
echo "
<table class='table table-hover table-condensed'>
<thead>
<tr >
<td>guidexpediente</td>
<td>nombrepersona</td>
<td>apellidopaterno</td>
<td>apellidomaterno</td>
<td>nombre_completo</td>
<td>nombreposicion</td>
<td>correoelectronico</td>
<td>fechadenacimiento</td>
<td>sexo</td>
<td>empleadoactivorh</td>
<td>fechadebajarh</td>
<td>fechadeingresoorganizacion</td>
<td>razonsocial</td>
<td>activonomina</td>
<td>departamento</td>
<td>departamento_netsuite</td>
<td>dirección</td>
<td>region</td>
<td>nivel_jerarquico</td>
<td>eliminada</td>

  
</tr>
</thead>";
$querydiscaredo =  "SELECT * from workbeat where 
(nombre_completo  like '%$var1%' or 
nombreposicion  like '%$var1%' or
correoelectronico  like '%$var1%' or
departamento  like '%$var1%' or
nivel_jerarquico   like '%$var1%' or
region  like '%$var1%'  )
order by nombre_completo asc";
$resdiscaredo = mysqli_query($conexion, $querydiscaredo);
while ($filaresdiscaredo = mysqli_fetch_array($resdiscaredo)) {

    echo"
    <tbody>
    <tr>
   
    <td>".$filaresdiscaredo['guidexpediente']."</td>
    <td>".$filaresdiscaredo['nombrepersona']."</td>
    <td>".$filaresdiscaredo['apellidopaterno']."</td>
    <td>".$filaresdiscaredo['apellidomaterno']."</td>
    <td>".$filaresdiscaredo['nombre_completo']."</td>
    <td>".$filaresdiscaredo['nombreposicion']."</td>
    <td>".$filaresdiscaredo['correoelectronico']."</td>
    <td>".$filaresdiscaredo['fechadenacimiento']."</td>
    <td>".$filaresdiscaredo['sexo']."</td>
    <td>".$filaresdiscaredo['empleadoactivorh']."</td>
    <td>".$filaresdiscaredo['fechadebajarh']."</td>
    <td>".$filaresdiscaredo['fechadeingresoorganizacion']."</td>
    <td>".$filaresdiscaredo['razonsocial']."</td>
    <td>".$filaresdiscaredo['activonomina']."</td>
    <td>".$filaresdiscaredo['departamento']."</td>
    <td>".$filaresdiscaredo['departamento_netsuite']."</td>
    <td>".$filaresdiscaredo['direccion']."</td>
    <td>".$filaresdiscaredo['region']."</td>
    <td>".$filaresdiscaredo['nivel_jerarquico']."</td>
    <td>".$filaresdiscaredo['eliminada']."</td>
    
   
   
    </tr>
    
    </tbody>";
        }
    echo "</table>";

