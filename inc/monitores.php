<?php
require 'header.php'; 
if($_SESSION['permisos'] != 1){
    if($_SESSION['permisos'] == 1){
    echo "<script> alert('No puedes ingresar') ;window.location='mievaluacion.php'</script>";
}else { echo "<script> alert('No puedes ingresar') ;window.location='list_evaluar.php'</script>";}
 }else{ }
 
?>
 
<div class="content-wrapper">

<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Nuevo</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" onclick="realizaProces();">Accesorios</button>
    <!-- <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button> -->
  </div>
</nav>


<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
<div class="container-sm">

<form id="insformon" >
<div class="row"> 
<div class="col">
  <label for="formGroupExampleInput" class="form-label">Numero de serie</label>
  <input type="text" class="form-control" id="InputNumSerie" name="InputNumSerie" onkeyup="mayus(this);" placeholder="Example input placeholder">
</div>

<div class="col">
  <label for="formGroupExampleInput2" class="form-label">Numer de monitor</label>
  <input type="text" class="form-control" id="InputNumMonitor" name="InputNumMonitor" onkeyup="mayus(this);" placeholder="MON-001">
</div>
</div>


<div class="form-row">
<div class="form-group col-md-4">
  <label for="formGroupExampleInput2" class="form-label">Tipo</label>
 <select name="Inptipo" id="Inptipo" class="form-control" >
    <option value="MONITOR">MONITOR</option>
    <option value="SMARTV">SMARTV</option>
    <option value="CELULAR">CELULAR</option>
    <option value="MOUSE">MOUSE</option>
    <option value="TECLADO">TECLADO</option>
    <option value="ADAPTADOR">ADAPTADOR</option>
    <option value="CARGADOR">CARGADOR</option>
    <option value="IMPRESORA">IMPRESORA</option>
    <option value="IMPRESORA TERMICA">IMPRESORA TERMICA</option>
    <option value="SILLA">SILLA</option>
    <option value="WEBCAM">WEBCAM</option>
    <option value="SSD">SSD</option>
    <option value="SCANNER">SCANNER</option>
    <option value="TABLET">TABLET</option>
    <option value="AUDIFONOS">AUDIFONOS</option>
    <option value="OTRO">OTRO</option>


 </select> 
</div>
<div class="form-group col-md-4">
  <label for="formGroupExampleInput2" class="form-label">Marca</label>
  <input type="text" class="form-control" id="InputMarca" name="InputMarca" onkeyup="mayus(this);" placeholder="MON-001">
</div>
<div class="form-group col-md-4">
  <label for="formGroupExampleInput2" class="form-label">Modelo</label>
  <input type="text" class="form-control" id="InputModelo" name="InputModelo" onkeyup="mayus(this);" >
</div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
        <label for="InputFactura" class="form-label">Factura</label>
        <input type="text" class="form-control" id="InputFactura" name="InputFactura" onkeyup="mayus(this);"  >
      </div>
      <div class="form-group col-md-4">
        <label for="Inputcosto" class="form-label">Costo</label>
        <input type="number" class="form-control" id="Inputcosto" name="Inputcosto" value="0" >
      </div>
      <div class="form-group col-md-4">
        <label for="InputEmpresa" class="form-label">Empresa</label>
        <input type="text" class="form-control" id="InputEmpresa" name="InputEmpresa" value="NETSOFT" onkeyup="mayus(this);" >
      </div>

</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Comentarios</label>
  <input type="text" class="form-control" id="InputComentarios" name="InputComentarios" onkeyup="mayus(this);" >
</div>
<button id="btnguardarfor" type="button" name="btnguardarfor" class="btn btn-primary" onclick="insertMon();">Registrar</button>
</form>
</div><br>
  </div>


<div class="tab-pane fade " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"  >
 

  </div>
</div>




</div>

<style>
    #spp {
  width: 100%;
  height: 900px;
  overflow: auto;
  /* ADD THIS TO THE PARENT */  
  scroll-snap-type: y mandatory;
}
</style>

<?php
require 'footer.php';
?> 
<script>
       function realizaProces(){
    var inpTodo = 0;

    var parametros = {
      "inpTodo" : inpTodo
    };
  
    
    $.ajax({
            data:  parametros, //datos que se envian a traves de ajax
            url:   'query_monitor.php', //archivo que recibe la peticion
            type:  'post', //método de envio
            beforeSend: function () {
                    $("#nav-profile").html("Procesando, espere por favor...");
            }, 
            success:  function (responses) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                    $("#nav-profile").html(responses);
            }
    });
} 
 
function insertMon(){ 

    var datos = $('#insformon').serialize();
    $.ajax({
      type: "POST", 
      url: "ins_monitores.php",
      data: datos, 
      beforeSend: function () {
                
          }, 
          success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                 
                  alert(response);
                  if(response ==="Insertado"){
                  
                  }else{ }
          }
    });

};
function mayus(e) {
    e.value = e.value.toUpperCase();
  }

</script>