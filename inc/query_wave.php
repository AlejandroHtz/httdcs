<?php
 require ('../conexion.php');
 echo $var1 = $_POST['inpTodo'];
echo "
<table class='table table-hover table-condensed'>
<thead>
<tr >
<td>id</td>
<td>extension</td>
<td>first_name</td>
<td>last_name</td>
<td>email_address</td>
<td>eliminada</td>

  
</tr>
</thead>";
$querydiscaredo =  "SELECT * from wave where 
(extension  like '%$var1%' or 
first_name  like '%$var1%' or
last_name  like '%$var1%' or
email_address  like '%$var1%'  )
order by extension asc";
$resdiscaredo = mysqli_query($conexion, $querydiscaredo);
while ($filaresdiscaredo = mysqli_fetch_array($resdiscaredo)) {

    echo"
    <tbody>
    <tr>
   
    <td>".$filaresdiscaredo['id']."</td>
    <td>".$filaresdiscaredo['extension']."</td>
    <td>".$filaresdiscaredo['first_name']."</td>
    <td>".$filaresdiscaredo['last_name']."</td>
    <td>".$filaresdiscaredo['email_address']."</td>
    <td>".$filaresdiscaredo['eliminada']."</td>
    
   
   
    </tr>
    
    </tbody>";
        }
    echo "</table>";

