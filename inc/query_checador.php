<?php
 require ('../conexion.php');
 echo $var1 = $_POST['inpTodo'];
echo "
<table class='table table-hover table-condensed'>
<thead>
<tr >
<td>badgenumber</td>
<td>name</td>
<td>lastname</td>
<td>gender</td>
<td>email</td>
<td>eliminada</td>

  
</tr>
</thead>";
$querydiscaredo =  "SELECT * from checador where 
(badgenumber  like '%$var1%' or 
checador.name  like '%$var1%' or
lastname  like '%$var1%' or
gender  like '%$var1%' or
email  like '%$var1%'  )
order by badgenumber asc";
$resdiscaredo = mysqli_query($conexion, $querydiscaredo);
while ($filaresdiscaredo = mysqli_fetch_array($resdiscaredo)) {

    echo"
    <tbody>
    <tr>
   
    <td>".$filaresdiscaredo['badgenumber']."</td>
    <td>".$filaresdiscaredo['name']."</td>
    <td>".$filaresdiscaredo['lastname']."</td>
    <td>".$filaresdiscaredo['gender']."</td>
    <td>".$filaresdiscaredo['email']."</td>
    <td>".$filaresdiscaredo['eliminada']."</td>
   
    
   
   
    </tr>
    
    </tbody>";
        }
    echo "</table>";

