<?php
require 'header.php';

if($_SESSION['permisos'] != 1){
    if($_SESSION['permisos'] == 1){
    echo "<script> alert('No puedes ingresar') ;window.location='mievaluacion.php'</script>";
}else { echo "<script> alert('No puedes ingresar') ;window.location='list_evaluar.php'</script>";}
 }else{ }


?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <div class="row g-3 align-items-center">

                        <div class="col-auto">
                            <input type="text" id="inputBuscarsAl" class="form-control" placeholder="Buscar" onkeyup="mayus(this); realizaProcesalta();">
                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Agregar
                    </button> 
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section>
    <span id="resultado"></span>
    </section>
</div>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Nuevo ingreso</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form id="insformalta">
            <div class="row">
                    <div class="col-md-3">
                        <label for="inputNombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="inputNombre" name="inputNombre">
                    </div>
                    <div class="col-md-4">
                        <label for="inputApellidos" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="inputApellidos" name="inputApellidos">
                    </div>
                    <div class="col-md-2">
                        <label for="inputLocalidad" class="form-label">Localidad</label>
                        <input type="text" class="form-control" id="inputLocalidad" name="inputLocalidad">
                    </div>
                    <div class="col-md-3">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail" name="inputEmail">
                    </div>
                    <div class="col-5">
                        <label for="inputPuesto" class="form-label">Puesto</label>
                        <input type="text" class="form-control" id="inputPuesto" name="inputPuesto">
                    </div>
                    <div class="col-2">
                        <label for="inputfsolicitud" class="form-label">Fecha solicitud</label>
                        <input type="date" class="form-control" id="inputfsolicitud" name="inputfsolicitud" >
                    </div>
                    <div class="col-md-3">
                        <label for="inputfcontrato" class="form-label">Fecha de contrato</label>
                        <input type="date" class="form-control" id="inputfcontrato" name="inputfcontrato" >
                    </div>
                    <div class="col-md-2">
                        <label for="inputIngreso" class="form-label">Fecha Ingreso</label>
                        <input type="date" class="form-control" id="inputIngreso" name="inputIngreso" >
                    </div>
            </div>
                    <div class="col-12">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" name="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Foraneo
                        </label>
                        </div>
                    </div> 

                    <div id="myDIV" style=" display: none"  >
                   
                    <div class="row">
                        <div class="col-7">
                        <label for="inputDomicilio" class="form-label">Domicilio</label>
                         
                            <textarea name="inputDomicilio" id="inputDomicilio" class="form-control" type="text" aria-label="City" placeholder="Hospital de Clínicas Subdirector de Desarrollo Dr. Sergio Carrasco Avenida Italia"></textarea>
                        </div>

                        <div class="col-sm">
                            <label for="inputinterior" class="form-label">Num interior</label>
                            <input type="text" class="form-control" id="inputinterior" name="inputinterior" aria-label="State">
                        </div>
                        <div class="col-sm">
                            <label for="inputExterior" class="form-label">Num Exterior</label>
                            <input type="text" class="form-control" id="inputExterior" name="inputExterior" aria-label="State">
                        </div>
                        <div class="col-sm">
                            <label for="inputCP" class="form-label">C.P</label>
                            <input type="text" class="form-control" id="inputCP" name="inputCP" aria-label="State">
                        </div>

                        
                    </div>
                    
                    <div class="row">    
                    <div class="col-sm-4">
                            <label for="inputCP" class="form-label">Estado</label>
                            <input type="text" class="form-control" id="inputEstado" name="inputEstado" placeholder="MEXICO" aria-label="State">
                        </div>
                        <div class="col-5">
                        <label for="inputReferencia" class="form-label">Referencias</label>
                         
                            <textarea name="inputReferencia" id="inputReferencia" class="form-control" type="text" aria-label="City" placeholder="ejemplo:A un lado de un parque..."></textarea>
                        </div>
                        <div class="col-sm-3">
                            <label for="inputTelefono" class="form-label">Telefono</label>
                            <input type="text" class="form-control" id="inputTelefono" name="inputTelefono" placeholder="5510909283" aria-label="State">
                        </div>
                    
                    </div>
                    
                    </div>
                    <br>
                    <div class="col-12">
                        <button id="btnguardarfor" type="button" name="btnguardarfor" class="btn btn-primary" onclick="realizaProcesalta();insertAltas();">Agregar</button>
                    </div>




            </form>
            </div>

        </div>
    </div>
</div>
<?php 
require 'footer.php';
?>

<script>
       function realizaProcesalta(){
        inpTodo = document.getElementById('inputBuscarsAl').value; 

if(inpTodo ==''){
 var inpTodo =0;



} else { var aux = 0; }
 var parametros = {
   "inpTodo" : inpTodo,
   "aux" : aux
 };

 
 $.ajax({
         data:  parametros, //datos que se envian a traves de ajax
         url:   'querys/query_alta.php', //archivo que recibe la peticion
         type:  'post', //método de envio
         beforeSend: function () {
                 $("#resultado").html("Procesando, espere por favor...");
         }, 
         success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                 $("#resultado").html(response);
         }
 });
} 

  function insertAltas(){ 

var datos = $('#insformalta').serialize();
$.ajax({
  type: "POST", 
  url: "querys/query_alta.php", 
  data: datos, 
  beforeSend: function () {
            
      }, 
      success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
             
              alert(response);
              if(response ==="AGREGADO"){
              
              }else{ }
      }
});

};

var checkbox = document.getElementById('gridCheck');
var x = document.getElementById("myDIV");
checkbox.addEventListener("change", validaCheckbox, false);
function validaCheckbox()
{
  var checked = checkbox.checked;
  if(checked){
    x.style.display = "block";

  }else{
    x.style.display = "none";
  }
}


  function mayus(e) {
    e.value = e.value.toUpperCase();
  }

  
</script>