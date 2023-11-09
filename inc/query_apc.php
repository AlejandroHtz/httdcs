<?php
 require ('../conexion.php');
 echo $var1 = $_POST['inpTodo'];
echo "
<table class='table table-hover table-condensed'>
<thead>
<tr >
<td>contact</td>
<td>email</td>
<td>rolee</td>
<td>comentarios</td>
<td>eliminada</td>
 

  
</tr>
</thead>";
$querydiscaredo =  "SELECT * from apc where 
(contact  like '%$var1%' or 
email  like '%$var1%' or
rolee  like '%$var1%' or
comentarios  like '%$var1%'  )
order by contact asc";
$resdiscaredo = mysqli_query($conexion, $querydiscaredo);
while ($filaresdiscaredo = mysqli_fetch_array($resdiscaredo)) {

    echo"
    <tbody>
    <tr>
   
    <td>".$filaresdiscaredo['contact']."</td>
    <td>".$filaresdiscaredo['email']."</td>
    <td>".$filaresdiscaredo['rolee']."</td>
    <td>".$filaresdiscaredo['comentarios']."</td>
    <td>".$filaresdiscaredo['eliminada']."</td>
   
   
    
   
   
    </tr>
    
    </tbody>";
        }
    echo "</table>";

