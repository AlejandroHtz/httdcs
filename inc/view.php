<?php 
require 'header.php';
$id_slack =  $_GET['id'];
 


$querytc =  "SELECT e.nombre_completo,
e.nombreposicion,
e.direccion,
e.fechadeingresoorganizacion,
e.departamento,
s.nss as razonsocial,
e.correoelectronico, u.evaluador, ev.nombre as evemail, e.region
from empleado e
left join users u on u.id_slack = e.id_slack
left join slack s on s.id_slack = e.id_slack
left join evaluadores ev on ev.id = s.id_evaluadordos
where e.id_slack = $id_slack";
$resultadotc = mysqli_query($conexion, $querytc);
$fila = mysqli_fetch_array($resultadotc);

$nombre_completo = $fila['nombre_completo'];
$nombreposicion = $fila['nombreposicion'];
$direccion = $fila['direccion'];
$fechadeingresoorganizacion = $fila['fechadeingresoorganizacion'];
$departamento = $fila['departamento']; 
$nss = $fila['razonsocial']; 
$evaluador = $fila['evaluador']; 
$correoelectronico = $fila['correoelectronico']; 
$id_evaluadordos = $fila['evemail']; 
$region = $fila['region']; 

?> 

<div class="content-wrapper">
<section class="content-header">

<form id="newempleado">
                    <div class="row g-3">
                        <div class="col-sm-4">
                            <label for="inputEmail4" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="inputNombre" name="inputNombre" value="<?php echo $nombre_completo; ?>">
                        </div>
                       
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-4">
                            <label for="inputEmail4" class="form-label">Posicion</label>
                            <input type="text" class="form-control" id="inputPosicion" name="inputPosicion" value="<?php echo $nombreposicion; ?>">
                        </div>
                        <div class="col-sm-4">
                            <label for="inputPassword4" class="form-label">Direccion</label>
                            <input type="text" class="form-control" id="inputDireccion" name="inputDireccion" value="<?php echo $direccion; ?>">
                        </div>
                        <div class="col-sm-4">
                            <label for="inputAddress" class="form-label">Fecha Ingreso</label>
                            <input type="date" class="form-control" id="inputFingreso" name="inputFingreso" value="<?php echo $fechadeingresoorganizacion; ?>">
                        </div>
                    </div>

                    <input type="hidden" class="form-control" id="idd" name="idd" value="<?php echo $id_slack; ?>">

                    <div class="row">

                        <div class="col-5">
                            <label for="inputAddress2" class="form-label">Departamento</label>
                            <input type="text" class="form-control" id="inputDepartamento" name="inputDepartamento" value="<?php echo $departamento; ?>">
                        </div>
                        <div class="col-sm-4">
                            <label for="exampleFormControlInput1" class="form-label">Evaluador</label>
                            <select class="form-control" aria-label="Default select example" id="inputEvaluador" name="inputEvaluador">
                                <?php if($evaluador > 0) { ?>  <option value="<?php echo $evaluador; ?>">Si</option>      <?php } ?>    
                                <option value="0">No</option>
                                <option value="1">Si</option>

                            </select>
                        </div>
                        <div class="col-sm">
                            <label for="inputZip" class="form-label">NSS</label>
                            <input type="text" class="form-control" id="inputNSS" name="inputNSS" value="<?php echo $nss; ?>">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-5">
                            <label for="inputAddress2" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name="inputEmail" value="<?php echo $correoelectronico; ?>">
                        </div>
                        <div class="col-5">
                            <label for="inputAddress2" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword" name="inputPassword"   autocomplete="false" readonly onfocus="this.removeAttribute('readonly');" >
                        </div>
                        <div class="col-2">
                            <label for="inputAddress2" class="form-label">Region</label>
                            <select class="form-control" aria-label="Default select example" id="inputRegion" name="inputRegion" value="<?php echo $region; ?>">
                            <option value="Mexico">Mexico</option>
                                <option value="Brasil">Brasil</option>
                                <option value="Colombia">Colombia</option>
                                
                            </select>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-5">
                            <label for="inputAddress2" class="form-label">¿Quien lo evalua?</label>
                            <input type="email" class="form-control" id="inputevalua" name="inputevalua" placeholder="dsadsad@netsoft.com" onkeyup="consultar();"  value="<?php echo $id_evaluadordos; ?>">
                        </div>
                        <section>
        <div id="spp">
            <span id="resultado"></span>
            
    </section>

                    </div>

                    <br>

                    <div class="col-12">
                        <button type="button" id="btnguardarfor" name="btnguardarfor" class="btn btn-primary" onclick="Actualizar();">Acrualizar</button>
                    </div>
                </form>
</div>
</div>
<?php 
require 'footer.php';
?>


<script>
function Actualizar() { 

var datos = $('#newempleado').serialize();
$.ajax({
    type: "POST",
    url: "querys/actualizar_empleado.php",
    data: datos,
    beforeSend: function() {
        $("#resultado").html("Procesando, espere por favor...");
    },
    success: function(response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
        $("#resultado").html(response);
        alert(response);
        if (response === "Agregado") {
            location.reload();
        }
    }
});
 
};


function consultar() { 

    inpTodopla = document.getElementById('inputevalua').value;
    var parametros = {
      "inpTodopla" : inpTodopla
    };
  
$.ajax({
    type: "POST",
    url: "querys/actualizar_empleado.php",
    data: parametros,
    
    beforeSend: function() {
        $("#resultado").html("Procesando, espere por favor...");
    },
    success: function(response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
        $("#resultado").html(response);
       

    }
});

};


</script>