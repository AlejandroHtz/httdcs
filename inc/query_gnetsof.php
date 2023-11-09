<?php
 require ('../conexion.php');
 echo $var1 = $_POST['inpTodo'];
echo "
<table class='table table-hover table-condensed'>
<thead>
<tr >
<td>id</td>
<td>first_name</td>
<td>last_name</td>
<td>email_address</td>
<td>org_unit_path</td>
<td>status</td>
<td>last_sign_in</td>
<td>email_usage</td>
<td>drive_usage</td>
<td>photos_usage</td>
<td>storage_limit</td>
<td>storage_used</td>
<td>licenses</td>
<td>comentarios</td>
<td>eliminada</td>
  
</tr>
</thead>";
$querydiscaredo =  "SELECT * from google_netsoft where 
(first_name like '%$var1%' or 
last_name  like '%$var1%' or
email_address  like '%$var1%' or
licenses  like '%$var1%' or
google_netsoft.status  like '%$var1%'  )
order by email_address asc";
$resdiscaredo = mysqli_query($conexion, $querydiscaredo);
while ($filaresdiscaredo = mysqli_fetch_array($resdiscaredo)) {

    echo"
    <tbody>
    <tr>
   
<td>".$filaresdiscaredo['id']."</td>
<td>".$filaresdiscaredo['first_name']."</td>
<td>".$filaresdiscaredo['last_name']."</td>
<td>".$filaresdiscaredo['email_address']."</td>
<td>".$filaresdiscaredo['org_unit_path']."</td> 
<td>".$filaresdiscaredo['status']."</td>
<td>".$filaresdiscaredo['last_sign_in']."</td>
<td>".$filaresdiscaredo['email_usage']."</td>
<td>".$filaresdiscaredo['drive_usage']."</td>
<td>".$filaresdiscaredo['photos_usage']."</td>
<td>".$filaresdiscaredo['storage_limit']."</td>
<td>".$filaresdiscaredo['storage_used']."</td>
<td>".$filaresdiscaredo['licenses']."</td>
<td>".$filaresdiscaredo['comentarios']."</td>
<td>".$filaresdiscaredo['eliminada']."</td>
    
   
   
    </tr>
    
    </tbody>";
        }
    echo "</table>";

