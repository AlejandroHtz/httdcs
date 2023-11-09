<?php 

require 'header.php';


?>

<body onload="realizaProcesoPersonal();"></body>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <div class="row g-3 align-items-center">

                        <div class="col-auto">
                            <input type="text" id="inputBuscars" class="form-control" placeholder="Buscar" onkeyup="mayus(this); realizaProcesoPersonal();">
                        </div>
                        <div class="col-auto">
                      
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevo">
                                Nuevo
                            </button>

                        </div>

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

<div class="modal fade" id="nuevo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Nuevo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="newempleado">
                    <div class="row g-3">
                        <div class="col-sm-4">
                            <label for="inputEmail4" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="inputNombre" name="inputNombre">
                        </div>
                        <div class="col-sm-4">
                            <label for="inputPassword4" class="form-label">Apellido paterno</label>
                            <input type="text" class="form-control" id="inputAPaterno" name="inputAPaterno">
                        </div>
                        <div class="col-sm-4">
                            <label for="inputAddress" class="form-label">Apellido materno</label>
                            <input type="text" class="form-control" id="inputAMaterno" name="inputAMaterno">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-4">
                            <label for="inputEmail4" class="form-label">Posicion</label>
                            <input type="text" class="form-control" id="inputPosicion" name="inputPosicion">
                        </div>
                        <div class="col-sm-4">
                            <label for="inputPassword4" class="form-label">Direccion</label>
                            <input type="text" class="form-control" id="inputDireccion" name="inputDireccion">
                        </div>
                        <div class="col-sm-4">
                            <label for="inputAddress" class="form-label">Fecha Ingreso</label>
                            <input type="date" class="form-control" id="inputFingreso" name="inputFingreso">
                        </div>
                    </div>


                    <div class="row">

                        <div class="col-5">
                            <label for="inputAddress2" class="form-label">Departamento</label>
                            <input type="text" class="form-control" id="inputDepartamento" name="inputDepartamento">
                        </div>
                        <div class="col-sm-4">
                            <label for="exampleFormControlInput1" class="form-label">Evaluador</label>
                            <select class="form-control" aria-label="Default select example" id="inputEvaluador" name="inputEvaluador">

                                <option value="0">No</option>
                                <option value="1">Si</option>

                            </select>
                        </div>
                        <div class="col-sm">
                            <label for="inputZip" class="form-label">NSS</label>
                            <input type="text" class="form-control" id="inputNSS" name="inputNSS">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-5">
                            <label for="inputAddress2" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name="inputEmail" onkeyup="consultar();">
                        </div>
                        <div class="col-5">
                            <label for="inputAddress2" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword" name="inputPassword">
                        </div>
                        <div class="col-2">
                            <label for="inputAddress2" class="form-label">Region</label>
                            <select class="form-control" aria-label="Default select example" id="inputRegion" name="inputRegion">
                            <option value="Mexico">Mexico</option>
                                <option value="Brasil">Brasil</option>
                                <option value="Colombia">Colombia</option>
                                
                            </select>
                        </div>

                    </div>
                    <div class="row">
                    <span id="exi"></span>
                    </div>

                    <br>

                    <div class="col-12">
                        <button type="button" id="btnguardarfor" name="btnguardarfor" class="btn btn-primary" onclick="realizaProcesoNuevo();">Registrar</button>
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
    function realizaProcesoPersonal() {
        inpTodopla = document.getElementById('inputBuscars').value;

        if (inpTodopla == '') {
            var inpTodopla = 0;



        } else {
            var aux = 0;
        }
        var parametros = {
            "inpTodopla": inpTodopla,
            "aux": aux
        };


        $.ajax({
            data: parametros, //datos que se envian a traves de ajax
            url: 'querys/query_personal.php', //archivo que recibe la peticion
            type: 'post', //método de envio 
            beforeSend: function() {
                $("#resultado").html("Procesando, espere por favor...");
            },
            success: function(response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                $("#resultado").html(response);
            }
        });
    }

    function realizaProcesoNuevo() {

        var datos = $('#newempleado').serialize();
        $.ajax({
            type: "POST",
            url: "querys/nuevo_empleado.php",
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

    function mayus(e) {
        e.value = e.value.toUpperCase();
    }


    function consultar() { 

inpTodopla2 = document.getElementById('inputEmail').value;
var parametros = {
  "inpTodopla2" : inpTodopla2
};

$.ajax({
type: "POST",
url: "querys/actualizar_empleado.php",
data: parametros,

beforeSend: function() {
    $("#exi").html("Procesando, espere por favor...");
},
success: function(response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
    $("#exi").html(response);
   

}
});

};
</script>