
<?php require '../conexion.php'; 
 if ($_SESSION['gerente']<> 1){   echo'<script type="text/javascript">
    alert("No debes de editar la url");
    window.location.href="../";
    </script>'; }

    $id=$_SESSION['id'];
    $query =  "SELECT direccion from users as us
    left join evaluadores as ev on ev.id_user = us.id
    where us.id = '$id' ";
    $resdiscaredo = mysqli_query($conexion, $query);
    $filaresdiscaredo = mysqli_fetch_assoc($resdiscaredo);
    $var = $filaresdiscaredo['direccion'];

    if($var ==="Todas"){
        $consuta = "";
    }else{
        $consuta = "where direccion = '$var'";
    }
?>


<script src="../js/chart.min.js"></script>
<script type="text/javascript" src="../js/jquery.js"></script>
<script src="../js/insercion.js"></script> 
 
<div class="content">
    <label for="caja_texto">Direccion</label>
    <select name="caja_texto" id="valor2" onchange="realizaProcesodos($('#valor2').val(), $('#valor3').val()); return false; " value="Calcula"  />>
    <option value=""> Selecciona</option>
    <?php if($var ==="Todas"){  ?><option value="0"> Mostrar todo</option> <?php } ?>
    <?php
    $registrotresuno = "SELECT direccion 
              from departamentos 
              $consuta
              group by direccion
              order by direccion asc "; 
 
$resultadosolicitud = mysqli_query($conexion, $registrotresuno);
    while ($regtwouno = mysqli_fetch_array($resultadosolicitud)) { ?>
        <option value="<?php echo $regtwouno['direccion']; ?>"> <?php echo $regtwouno['direccion'];   ?></option>
    <?php }   ?>
    </select>



    <label for="caja_texto">Calificación</label>
    <select name="caja_puntos" id="valor3" onchange="realizaProcesodos($('#valor2').val(), $('#valor3').val()); return false;"  value="CalculaP"  />>
    <option value="1">Alta</option>
    <option value="2">Baja</option>
    </select>



    <!-- <input type="button" href="javascript:;" onclick="realizaProceso($('#valor1').val(), $('#valor2').val());return false;" value="Calcula"/> -->
    <br />
    <style>
.contenedor-flexbox {
    display: flex; /*Convertimos al menú en flexbox*/
    justify-content: space-between; /*Con esto le indicamos que margine todos los items que se encuentra adentro hacia la derecha e izquierda*/
    align-items: center; /*con esto alineamos de manera vertical*/
}
</style>
<span id="resultadodos"></span>
<div class="contenedor-flexbox">
<div style="width:50%; display:inline-block;">

<canvas id="myChart" ></canvas> 
    </div>

    <div style="width:50%; display:inline-block; ">
    <canvas id="myChartdos" ></canvas>  
</div>
</div>
</div>
<script>


function realizaProcesodos(valor2,valor3){ 
 
    
    var parametros = {
             "valor2" : valor2,
             "valor3" : valor3
    };
  
    
    $.ajax({
            data:  parametros, //datos que se envian a traves de ajax
            url:   'querys/query_grafica_new.php', //archivo que recibe la peticion
            type:  'post', //método de envio
            beforeSend: function () {
                    $("#resultadodos").html("Procesando, espere por favor...");
            },
            success:  function (responsedos) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                    $("#resultadodos").html(responsedos);
            }
    });
  } 






</script>

 

 





