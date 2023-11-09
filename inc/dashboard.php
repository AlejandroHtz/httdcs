<?php 

include("header.php"); 
// include("querys/querys_general.php");
$usuario = $_SESSION['nombre'];
$iduser = $_SESSION['id'];

if($_SESSION['permisos'] != 1){
  if($_SESSION['permisos'] == 1){
  echo "<script> alert('No puedes ingresar') ;window.location='mievaluacion2023.php'</script>";
}else { echo "<script> alert('No puedes ingresar') ;window.location='list_evaluar.php'</script>";}
}else{ }
?>

<link rel="stylesheet" href="../css/style_tab.css">
<link href="../css/jquery-ui.css" rel="stylesheet" type="text/css" />

<script src="../js/jquery.js"></script>
<script src="../js/jquery-ui.js"></script>
<style>
.container{
    margin: 0 30%;
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="container">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><strong>Dashboard</strong></h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

<div>
  <select name="inputPlat" id="inputPlat" onchange="llenardash();" class="form-select form-select-lg mb-3" aria-label="Default select example">
  <option selected>Open this select menu</option>
 <?php $queryArchivos =  "SELECT  servicio
                    from plataformas order by servicio asc ";
                    $resultadoArchivo = mysqli_query($conexion, $queryArchivos);
                    while ($filaup = mysqli_fetch_array($resultadoArchivo)) {  ?>

  <option value="<?php echo $filaup['servicio']; ?>"><?php echo $filaup['servicio']; ?></option>
  <?php } ?>
  </select>
</div>

<div class="row">

<!-- Earnings (Monthly) Card Example 
https://fontawesome.com/v5/icons/user-alt?s=solid&f=classic -->


<!-- Earnings (Monthly) Card Example -->
<!-- <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                        Comodo</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Responsable: <?php echo $filaComodo['numlic']; ?></div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"># Lincencias: <?php echo $filaComodo['numlic']; ?></div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"># Usadas: <?php echo $filaComodoactivas['activos']; ?></div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">$ Costo mensual: <?php echo number_format($filaComodocostomen['costmensual'],2); ?> </div>
                </div> 
                <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div> -->
 
<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1" >Plataforma:</div>
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1" id="servicio">
                    </div>
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1" id="descripcion"></div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <!--  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div> -->
                        </div>
                        <div class="col">
                         <!--      <div class="progress progress-sm mr-2">
                               <div class="progress-bar bg-info" role="progressbar"
                                    style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example --> 
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1" >Resposable:</div>
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1" id="responsable">
                       </div>
                    <div class="text-xs font-weight-bold text-gray text-uppercase mb-1" id="tipoinvercion"></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Licencias</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="nolicencias"></div> 

                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Usuarios</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="usuarios"> </div> 

                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Periodicidad</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="periodicidad"> </div> 

                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Vencimiento</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="vencimiento"> </div> 
                </div>
                <div class="col-auto">
                    <i class="fas fa-user-alt fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="row">

<!-- Earnings (Monthly) Card Example 
https://fontawesome.com/v5/icons/user-alt?s=solid&f=classic -->


<!-- Earnings (Monthly) Card Example -->
<!-- <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                        Comodo</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Responsable: <?php echo $filaComodo['numlic']; ?></div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"># Lincencias: <?php echo $filaComodo['numlic']; ?></div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"># Usadas: <?php echo $filaComodoactivas['activos']; ?></div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">$ Costo mensual: <?php echo number_format($filaComodocostomen['costmensual'],2); ?> </div>
                </div> 
                <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div> -->
 
<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1" >Plataforma:</div>
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1" id="servicio">
                    </div>
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1" id="descripcion"></div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <!--  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div> -->
                        </div>
                        <div class="col">
                         <!--      <div class="progress progress-sm mr-2">
                               <div class="progress-bar bg-info" role="progressbar"
                                    style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example --> 
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1" >Resposable:</div>
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1" id="responsable">
                       </div>
                    <div class="text-xs font-weight-bold text-gray text-uppercase mb-1" id="tipoinvercion"></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Licencias</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="nolicencias"></div> 

                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Usuarios</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="usuarios"> </div> 

                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Periodicidad</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="periodicidad"> </div> 

                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Vencimiento</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="vencimiento"> </div> 
                </div>
                <div class="col-auto">
                    <i class="fas fa-user-alt fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>

<script>
   function llenardash(){
    inpTodo = document.getElementById('inputPlat').value; 

   if(inpTodo ==''){
    var inpTodo =0;
   
   
  
  } else { var aux = 0; } 
    var parametros = {
      "inpTodo" : inpTodo,
      "aux" : aux
    };

    $.ajax({
            data:  parametros, //datos que se envian a traves de ajax
            url:   'querys/querys_general.php', //archivo que recibe la peticion
            type:  'post', //método de envio
            beforeSend: function () {
                    $("#resultado").html("Procesando, espere por favor...");
            }, 
            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                valor1=response.split("||")[0];
                valor2=response.split("||")[1];
                valor3=response.split("||")[2];
                valor4=response.split("||")[3];
                valor5=response.split("||")[4];
                valor6=response.split("||")[5];
                valor7=response.split("||")[6];
                valor8=response.split("||")[7];

                // $("#servicio").html(response);
                    $("#servicio").html(valor1);
                    $("#usuarios").html(valor2);
                    $("#descripcion").html(valor3);
                    $("#responsable").html(valor4);
                    $("#tipoinvercion").html(valor5);
                    $("#periodicidad").html(valor6);
                    $("#nolicencias").html(valor7);
                    $("#vencimiento").html(valor8);
                    
                    
                  
            }
    });
} 
  


  function mayus(e) {
    e.value = e.value.toUpperCase();
  }

  
</script>


<?php require ('footer.php');?>