<?php
require '../conexion.php';
if(!isset($codigo)){
  echo'<script type="text/javascript">
    alert("No debes de editar la url");
    window.location.href="../";
    </script>';
}
?>



 
 
    <!-- Main content -->
<section>
 <center><a href="eval_excel_new.php">Excel 2023</a></center>
<table class='table table-hover table-condensed'>
<thead>
<tr >
  <td>Evaluado</td>
  <td>Puesto</td>
  <td>Depto</td>
  <td>Dirección</td>
  <td>Evaluador</td>
  <td>Califiación Objetivos Q4 2023</td>
  <td>Calificación Competencias Q4 2023 </td>
 

  <td>Calificacion total e dd 2023</td>
  <td>Completada</td>
  <td></td>
  
</tr> 
</thead>
<?php
 $querydiscaredo =  "SELECT ww.nombre_completo, ww.nombreposicion, ww.departamento, ww.direccion,
 evv.nombre,
 oi.calificacion_objetivos, oi.calific_competencias, (oi.calificacion_objetivos + oi.calific_competencias)/2 as Calificacion_Global,

 (oi.calificacion_objetivos + oi.calific_competencias) as rendimiento,
 case when s.evaluadodos > 0 then 'Si' else 'No' end as evaluado, s.id_slack

 
FROM objetivos_info_new AS oi
LEFT JOIN   slack as s on s.id_slack = oi.id_slack
LEFT join empleado as ww on ww.id_slack = oi.id_slack
LEFT JOIN evaluadores as evv on evv.id = s.id_evaluadordos
 
where s.id_evaluadordos > 0 order by  evaluado desc,ww.nombre_completo asc";
$resdiscaredo = mysqli_query($conexion, $querydiscaredo);
$numero = mysqli_num_rows($resdiscaredo);
/////

$id_vari=  "SELECT count(*) as coun from slack as s 
left join empleado as ww on ww.id_slack = s.id_slack 
where s.eliminada = 0 and s.id_evaluadordos > 0 ";
$resdiscaredos = mysqli_query($conexion, $id_vari);
$id_varido = mysqli_fetch_assoc($resdiscaredos);
$vars = $id_varido['coun'];

$id_comp= "SELECT count(*) as coun from slack as s 
left join empleado as ww on ww.id_slack = s.id_slack 
where s.eliminada = 0 and s.id_evaluadordos > 0 and s.evaluadodos = 1";
$resdiscaredosscom = mysqli_query($conexion, $id_comp);
$id_varidocomp = mysqli_fetch_assoc($resdiscaredosscom);
$varscomp = $id_varidocomp['coun'];

$id_pend= "SELECT count(*) as coun from slack as s 
left join empleado as ww on ww.id_slack = s.id_slack 
where s.eliminada = 0 and s.id_evaluadordos > 0 and s.evaluadodos in (0, '')";
$resdiscarpend = mysqli_query($conexion, $id_pend);
$id_varidocpend = mysqli_fetch_assoc($resdiscarpend);
$varspend = $id_varidocpend['coun'];
////
echo 'Total a evaluar: ' . $vars; ?><br><?php
echo 'Evaluaciones completas: ' . $varscomp; ?><br><?php
echo 'Evaluaciones pendientes: ' . $varspend;?><br><?php

echo 'Número de total de registros: ' . $numero;
while ($filaresdiscaredo = mysqli_fetch_array($resdiscaredo)) {
  $datosdoc = $filaresdiscaredo['id_slack'] . "||" .
  $datosdoc = $filaresdiscaredo['evaluado'];
?>
    <tbody>
    <tr> 
     
  
    <td><?php echo $filaresdiscaredo['0'] ?></td>  
    <td><?php echo $filaresdiscaredo['1'] ?></td>
    <td><?php echo $filaresdiscaredo['2'] ?></td>
    <td><?php echo $filaresdiscaredo['3'] ?></td>
    <td><?php echo $filaresdiscaredo['4'] ?></td>
    <td><?php echo $filaresdiscaredo['5'] ?></td>
    <td><?php echo $filaresdiscaredo['6'] ?></td>
 
    <td><?php echo $filaresdiscaredo['8'] ?></td>
    <td><?php echo $filaresdiscaredo['9'] ?></td>
    <td><button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#modificart" onclick="agregaform('<?php echo $datosdoc ?>')">Editar</button></td>

   
    </tr>
    
    </tbody>
      <?php  } ?>
   </table>
    </section>



</div>

<div class="modal fade" id="modificart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Estatus de evaluacion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">

      <form  id="actEstatus">
         <div class="col-md-12">
            <label for="" class="form-label">Estatus de evaluacion</label>
            <input type="text" class="form-control" name="inpEstatus" id="inpEstatus"  readonly>
            <input type="hidden" class="form-control" name="fechainidoc" id="fechainidoc"  required>
        </div>

        <div class="col-md-12">
        <label for="" class="form-label">Cambiar estatus de evaluacion</label>
        <select name="inpEstatus" id="inpEstatus">
              <option value="0">No</option>
              <option value="1">Si</option>
            </select>
            </div>
            <span id="resultado"></span>
        <div class="col-md-12">
       
        <button id="btnactualizar"  type="button" name="btnactualizar" class="btn btn-primary" onclick="realizaProceso();">Actualizar</button>
        </div>
    </form>
</div>
</div>
</div>

<?php

?>
<script>
       function consultaEv(){
    inpTodo = document.getElementById('inputBuscarEv').value; 

   if(inpTodo ==''){
    var inpTodo =0;
   
   
  
  } else { var aux = 0; }
    var parametros = {
      "inpTodo" : inpTodo,
      "aux" : aux
    };
  
    
    $.ajax({
            data:  parametros, //datos que se envian a traves de ajax
            url:   'query_evalu_new.php', //archivo que recibe la peticion
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

  
function agregaform(datosdoc){
  d=datosdoc.split('||');

  $('#fechainidoc').val(d[0]);
  $('#inpEstatus').val(d[1]);

}
  
function realizaProceso(){

var datos = $('#actEstatus').serialize();
$.ajax({
  type: "POST", 
  url: "act_status_new.php", 
  data: datos,
  beforeSend: function () {
              $("#resultado").html("Procesando, espere por favor...");
      }, 
      success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
              $("#resultado").html(response);
              alert(response); 
              if(response ==="Insertado"){
                location.reload();
              }
      }
});

};
</script> 