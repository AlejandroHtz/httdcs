<?php
require 'header.php';

if($_SESSION['permisos'] != 1){
  if($_SESSION['permisos'] == 1){
  echo "<script> alert('No puedes ingresar') ;window.location='mievaluacion.php'</script>";
}else { echo "<script> alert('No puedes ingresar') ;window.location='list_evaluar.php'</script>";}
}else{ }
?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <div class="row g-3 align-items-center">
                    <a type="button" href="querys/excel_platafotmas.php" class="btn btn-primary">Excel</a>
                        <div class="col-auto">
                            <input type="text" id="inputBuscar" class="form-control" placeholder="Buscar" onkeyup="mayus(this); realizaProceso();">
                        
                          </div>
 
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

<?php
require 'footer.php';
?>

<script>
   function realizaProceso(){
    inpTodo = document.getElementById('inputBuscar').value; 

   if(inpTodo ==''){
    var inpTodo =0;
   
   
  
  } else { var aux = 0; }
    var parametros = {
      "inpTodo" : inpTodo,
      "aux" : aux
    };
  
    
    $.ajax({
            data:  parametros, //datos que se envian a traves de ajax
            url:   'query_index.php', //archivo que recibe la peticion
            type:  'post', //método de envio
            beforeSend: function () {
                    $("#resultado").html("Procesando, espere por favor...");
            }, 
            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                    $("#resultado").html(response);
            }
    });
} 
 
 
  $(document).ready(function() {

    var now = new Date();

    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);

    var today = now.getFullYear() + "-" + (month) + "-" + (day);

    $("#fecha_emisionu").val(today);
  });

  function mayus(e) {
    e.value = e.value.toUpperCase();
  }

  function btnaj(){
    btnaa = document.getElementById('btna').value; 
     
    var parametros = {
      "btnaa" : btnaa
    };
    $.ajax({
            data:  parametros, //datos que se envian a traves de ajax
            url:   'copy.php', //archivo que recibe la peticion
            type:  'post', //método de envio
            beforeSend: function () {
                    // $("#resultado").html("Procesando, espere por favor...");
            }, 
            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                    
              Swal.fire(""+response+"");   
            }
    });
    
  }
  
</script>