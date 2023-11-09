<?php
 require ('../conexion.php');
 echo $var1 = $_POST['inpTodo'];
echo "
<table class='table table-hover table-condensed'>
<thead>
<tr >
<td>id</td>
<td>os</td>
<td>name</td>
<td>last_logged_in_user</td>
<td>owner</td>
<td>last_activity</td>
<td>model</td>
<td>processor</td>
<td>serial_number</td>
<td>system_model</td>
<td>system_manufacturer</td>
<td>comentarios</td>
<td>Eliminada</td>
  
</tr>
</thead>";
 $querydiscaredo =  "SELECT * from comodo where 
(os like '%$var1%' or 
comodo.name  like '%$var1%' or
os_name  like '%$var1%' or
model  like '%$var1%' or
processor  like '%$var1%' or
serial_number  like '%$var1%' or
comentarios  like '%$var1%' or
system_manufacturer  like '%$var1%'  )
order by comodo.name asc";
$resdiscaredo = mysqli_query($conexion, $querydiscaredo);
while ($filaresdiscaredo = mysqli_fetch_array($resdiscaredo)) {

    echo"
    <tbody>
    <tr>
    
<td><a href='edit_inv.php?id=".$filaresdiscaredo['id']."' >".$filaresdiscaredo['id']."</a></td> 
<td>".$filaresdiscaredo['os']."</td>
<td>".$filaresdiscaredo['name']."</td>
<td>".$filaresdiscaredo['last_logged_in_user']."</td>
<td>".$filaresdiscaredo['owner']."</td>
<td>".$filaresdiscaredo['last_activity']."</td>
<td>".$filaresdiscaredo['model']."</td>
<td>".$filaresdiscaredo['processor']."</td>
<td>".$filaresdiscaredo['serial_number']."</td>
<td>".$filaresdiscaredo['system_model']."</td>
<td>".$filaresdiscaredo['system_manufacturer']."</td>
<td>".$filaresdiscaredo['comentarios']."</td>
<td>".$filaresdiscaredo['eliminada']."</td>
    
   
    </tr>
    
    </tbody>";
        }
    echo "</table>";

