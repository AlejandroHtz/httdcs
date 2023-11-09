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
                            <input type="text" id="inputBuscars" class="form-control" placeholder="Buscar" onkeyup="mayus(this); realizaProcesoSlack();">
                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Importar
                    </button>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section>
    <div id="spp">
    <span id="resultado"></span>
    </section>
</div>
</div>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Importar (plataformas.xlsx)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="querys/query_plataformas.php" method="post" enctype="multipart/form-data" id="filesForm">
                    <div>
                        <input type="file" name="archivo">
                        <br>
                        <button class="btn btn-primary form-control">Cargar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<?php
require 'footer.php';
?>

<style>
    #spp {
  width: 100%;
  height: 900px;
  overflow: auto;
  /* ADD THIS TO THE PARENT */  
  scroll-snap-type: y mandatory;
}
</style>
<script>
   function realizaProcesoSlack(){
    inpTodopla = document.getElementById('inputBuscars').value; 

   if(inpTodopla ==''){
    var inpTodopla =0;
   
   
   
  } else { var aux = 0; }
    var parametros = {
      "inpTodopla" : inpTodopla,
      "aux" : aux
    };
  
     
    $.ajax({
            data:  parametros, //datos que se envian a traves de ajax
            url:   'querys/query_plataformas.php', //archivo que recibe la peticion
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