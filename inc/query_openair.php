<?php
 require ('../conexion.php');
 echo $var1 = $_POST['inpTodo'];
echo "
<table class='table table-hover table-condensed'>
<thead>
<tr >
<td>user_id</td>
<td>user</td>
<td>first_name</td>
<td>last_name</td>
<td>active</td>
<td>last_login</td>
<td>role</td>
<td>resource_type</td>
<td>primary_filter_set</td>
<td>department</td>
<td>manager</td>
<td>job_code</td>
<td>user_location</td>
<td>employee_region</td>
<td>locked</td>
<td>eliminada</td>

  
</tr>
</thead>";
$querydiscaredo =  "SELECT * from openair where 
(openair.user_id  like '%$var1%' or 
first_name  like '%$var1%' or
last_name  like '%$var1%' or
employee_region  like '%$var1%' or
primary_filter_set  like '%$var1%' or
active  like '%$var1%' or
openair.role   like '%$var1%' or
department  like '%$var1%'  )
order by openair.user_id asc";
$resdiscaredo = mysqli_query($conexion, $querydiscaredo);
while ($filaresdiscaredo = mysqli_fetch_array($resdiscaredo)) {

    echo"
    <tbody>
    <tr>
   
    <td>".$filaresdiscaredo['user_id']."</td>
    <td>".$filaresdiscaredo['user']."</td>
    <td>".$filaresdiscaredo['first_name']."</td>
    <td>".$filaresdiscaredo['last_name']."</td>
    <td>".$filaresdiscaredo['active']."</td>
    <td>".$filaresdiscaredo['last_login']."</td>
    <td>".$filaresdiscaredo['role']."</td>
    <td>".$filaresdiscaredo['resource_type']."</td>
    <td>".$filaresdiscaredo['primary_filter_set']."</td>
    <td>".$filaresdiscaredo['department']."</td>
    <td>".$filaresdiscaredo['manager']."</td>
    <td>".$filaresdiscaredo['job_code']."</td>
    <td>".$filaresdiscaredo['user_location']."</td>
    <td>".$filaresdiscaredo['employee_region']."</td>
    <td>".$filaresdiscaredo['locked']."</td>
    <td>".$filaresdiscaredo['eliminada']."</td>
    
   
   
    </tr>
    
    </tbody>";
        }
    echo "</table>";

