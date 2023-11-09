<?php
 require ('../conexion.php');
 echo $var1 = $_POST['inpTodo'];
echo "
<table class='table table-hover table-condensed'>
<thead>
<tr >
    <td>id</td>
    <td>name</td>
    <td>certifications</td>
    <td>email</td>
    <td>orderr</td>
    <td>time_spent</td>
    <td>expiration</td>
    <td>comentarios</td>
    <td>Eliminada</td>
  
</tr>
</thead>";
$querydiscaredo =  "SELECT * from oracle_university where 
(oracle_university.name like '%$var1%' or 
email  like '%$var1%' )
order by oracle_university.name asc";
$resdiscaredo = mysqli_query($conexion, $querydiscaredo);
while ($filaresdiscaredo = mysqli_fetch_array($resdiscaredo)) {

    echo"
    <tbody>
    <tr>
   
    <td>".$filaresdiscaredo['id']."</td>
    <td>".$filaresdiscaredo['name']."</td>
    <td>".$filaresdiscaredo['certifications']."</td>
    <td>".$filaresdiscaredo['email']."</td>
    <td>".$filaresdiscaredo['orderr']."</td>
    <td>".$filaresdiscaredo['time_spent']."</td>
    <td>".$filaresdiscaredo['expiration']."</td>
    <td>".$filaresdiscaredo['comentarios']."</td>
    <td>".$filaresdiscaredo['eliminada']."</td>
    
   
   
    </tr>
    
    </tbody>";
        }
    echo "</table>";

