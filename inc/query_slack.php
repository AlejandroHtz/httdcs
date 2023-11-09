<?php
 require ('../conexion.php');
 echo $var1 = $_POST['inpTodo'];
echo "
<table class='table table-hover table-condensed'>
<thead>
<tr >
  <td>id_slack</td>
  <td>username</td>
  <td>email</td>
  <td>status</td>
  <td>billing_active</td>
  <td>has_2fa</td>
  <td>has_sso </td>
  <td>userid</td>
  <td>fullname</td>
  <td>displayname</td>
  <td>expiration_timestamp</td>
  <td>region</td>
  <td>Eliminada</td>
  <td></td>
  
</tr>
</thead>";
$querydiscaredo =  "SELECT * from slack where 
(username like '%$var1%' or 
email  like '%$var1%' or
fullname  like '%$var1%' or
displayname  like '%$var1%' or
slack.status  like '%$var1%' or
region  like '%$var1%' )
order by username asc";
$resdiscaredo = mysqli_query($conexion, $querydiscaredo);
while ($filaresdiscaredo = mysqli_fetch_array($resdiscaredo)) {

    echo"
    <tbody>
    <tr>
   
    <td>".$filaresdiscaredo['0']."</td>
    <td>".$filaresdiscaredo['1']."</td>
    <td>".$filaresdiscaredo['2']."</td>
    <td>".$filaresdiscaredo['3']."</td>
    <td>".$filaresdiscaredo['4']."</td>
    <td>".$filaresdiscaredo['5']."</td>
    <td>".$filaresdiscaredo['6']."</td>
    <td>".$filaresdiscaredo['7']."</td>
    <td>".$filaresdiscaredo['8']."</td>
    <td>".$filaresdiscaredo['9']."</td>
    <td>".$filaresdiscaredo['10']."</td>
    <td>".$filaresdiscaredo['11']."</td> 
    <td>".$filaresdiscaredo['eliminada']."</td>
    <td><a class='form-check-input' href= 'eliminar_user.php?id=".$filaresdiscaredo['id_slack']."' >Eliminar</a></td>
    
    
   
   
    </tr>
    
    </tbody>";
        }
    echo "</table>";

