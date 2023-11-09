<?php
require 'header.php';

if($_SESSION['permisos'] != 1){
    if($_SESSION['permisos'] == 1){
    echo "<script> alert('No puedes ingresar') ;window.location='mievaluacion.php'</script>";
}else { echo "<script> alert('No puedes ingresar') ;window.location='list_evaluar.php'</script>";}
 }else{ }
?>


<div class="content-wrapper">
<center><h1>Ultimas actualizaciones</h1></center>
<div class="content">
<table class="table">
  <thead>
    <tr> 

      <th scope="col">Plataforma</th>
      <th scope="col">Fecha modificacion</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <?php
  $querydiscaredo =  "SELECT MAX(fecha_modif) as f_slack , com.f_comoodo, ap.f_apc, gn.f_google_netsoft, gc.f_google_cloudsuite, oa.f_open_air, ac.f_woractivos,
  ou.f_oracleun, wv.f_wave, of.f_office, ch.f_checador, nt.f_netsuite, dc.f_docusing, ed.f_eden, jet.f_jetbrains, st.f_smartsheet
  from slack ss
  join (select MAX(fecha_modificacion) as f_comoodo from comodo  ) as com
  join (select MAX(fecha_modificacion) as f_apc from apc  ) as ap
  join (select MAX(fecha_modificacion) as f_google_netsoft from google_netsoft  ) as gn
  join (select MAX(fecha_modificacion) as f_google_cloudsuite from google_cloudsuite  ) as gc
  join (select MAX(fecha_modificacion) as f_open_air from openair  ) as oa
  join (select MAX(fecha_modificacion) as f_woractivos from activos  ) as ac
  join (select MAX(fecha_modificacion) as f_oracleun from oracle_university  ) as ou
  join (select MAX(fecha_modificacion) as f_wave from wave  ) as wv
  join (select MAX(fecha_modificacion) as f_office from office  ) as of
  join (select MAX(fecha_modificacion) as f_checador from checador  ) as ch
  join (select MAX(fecha_modificacion) as f_netsuite from netsuite  ) as nt
  join (select MAX(fecha_modificacion) as f_docusing from docusing  ) as dc
  join (select MAX(fecha_modificacion) as f_eden from eden  ) as ed
  join (select MAX(fecha_modificacion) as f_jetbrains from jetbrains  ) as jet
  join (select MAX(fecha_modificacion) as f_smartsheet from smartsheet  ) as st";

$resdiscaredo = mysqli_query($conexion, $querydiscaredo);
$rcompetencias = mysqli_fetch_array($resdiscaredo);
?> 
  <tbody>
    <tr>
        <td>Slack</td>
        <td><?PHP ECHO $num_serie = $rcompetencias["f_slack"]; ?></td>
        <td>Otto</td>
    </tr>
    <tr>
    <td>Comodo</td>
      <td><?PHP ECHO $num_serie = $rcompetencias["f_comoodo"]; ?></td>
      <td>Otto</td>   
    </tr>
    <td>APC</td>
      <td><?PHP ECHO $num_serie = $rcompetencias["f_apc"]; ?></td>
      <td>Otto</td>   
    </tr>
    <td>Google Netsoft</td>
      <td><?PHP ECHO $num_serie = $rcompetencias["f_google_netsoft"]; ?></td>
      <td>Otto</td>   
    </tr>
    <td>Google CloudSuite</td>
      <td><?PHP ECHO $num_serie = $rcompetencias["f_google_cloudsuite"]; ?></td>
      <td>Otto</td>   
    </tr>
    <td>Open air</td>
      <td><?PHP ECHO $num_serie = $rcompetencias["f_open_air"]; ?></td>
      <td>Otto</td>   
    </tr>
    <td>Activos</td>
      <td><?PHP ECHO $num_serie = $rcompetencias["f_woractivos"]; ?></td>
      <td>Otto</td>   
    </tr>
    <td>Oracle University</td>
      <td><?PHP ECHO $num_serie = $rcompetencias["f_oracleun"]; ?></td>
      <td>Otto</td>   
    </tr>
    <td>Wave</td>
      <td><?PHP ECHO $num_serie = $rcompetencias["f_wave"]; ?></td>
      <td>Otto</td>   
    </tr>
    <td>Office</td>
      <td><?PHP ECHO $num_serie = $rcompetencias["f_office"]; ?></td>
      <td>Otto</td>   
    </tr>
    <td>Checador</td>
      <td><?PHP ECHO $num_serie = $rcompetencias["f_checador"]; ?></td>
      <td>Otto</td>   
    </tr>
    <td>Netsuite</td>
      <td><?PHP ECHO $num_serie = $rcompetencias["f_netsuite"]; ?></td>
      <td>Otto</td>   
    </tr>
    <td>DocuSing</td>
      <td><?PHP ECHO $num_serie = $rcompetencias["f_docusing"]; ?></td>
      <td>Otto</td>   
    </tr>
    <td>Eden</td>
      <td><?PHP ECHO $num_serie = $rcompetencias["f_eden"]; ?></td>
      <td>Otto</td>   
    </tr>
    <td>JetBreins</td>
      <td><?PHP ECHO $num_serie = $rcompetencias["f_jetbrains"]; ?></td>
      <td>Otto</td>   
    </tr>
    <td>SmartSheet</td>
      <td><?PHP ECHO $num_serie = $rcompetencias["f_smartsheet"]; ?></td>
      <td>Otto</td>   
    </tr>

   
  </tbody>
</table>
</div>
</div>

<?php 
require 'footer.php';
?>

<script>
   function realizaProcesoChecador(){
    inpTodo = document.getElementById('inputBuscars').value; 

   if(inpTodo ==''){
    var inpTodo =0;
   
   
  
  } else { var aux = 0; }
    var parametros = {
      "inpTodo" : inpTodo,
      "aux" : aux
    };
  
    
    $.ajax({
            data:  parametros, //datos que se envian a traves de ajax
            url:   'query_apc.php', //archivo que recibe la peticion
            type:  'post', //método de envio
            beforeSend: function () {
                    $("#resultado").html("Procesando, espere por favor...");
            }, 
            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                    $("#resultado").html(response);
            }
    });
} 
  


  function mayus(e) {
    e.value = e.value.toUpperCase();
  }

  
</script>