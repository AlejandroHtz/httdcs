<?php
require 'header.php';

if($_SESSION['permisos'] != 1){
    if($_SESSION['permisos'] == 1){
    echo "<script> alert('No puedes ingresar') ;window.location='mievaluacion.php'</script>";
}else { echo "<script> alert('No puedes ingresar') ;window.location='list_evaluar.php'</script>";}
 }else{ }
?>

<style>
.contenedor-flexbox {
    display: flex; /*Convertimos al menú en flexbox*/
    justify-content: space-between; /*Con esto le indicamos que margine todos los items que se encuentra adentro hacia la derecha e izquierda*/
    align-items: center; /*con esto alineamos de manera vertical*/
}
</style>
<div class="content-wrapper">

<div class="contenedor-flexbox">
  <ul>
<div style="width:10px; height:100%; display:inline-block;"  class="div__pregunta ucm">
<button value="ANTIVIRUS COMODO" class="pregunta__opcion" style='width:300px; height:25px' id="ANTIVIRUS COMODO">ANTIVIRUS COMODO </button>
  <button value="DOCUSING" class="pregunta__opcion" style='width:300px; height:25px' id="DOCUSING">DOCUSING </button>
  <button value="GOOGLE WORKSPACE (CLOUDSUITE)" class="pregunta__opcion" style='width:300px; height:25px' id="GOOGLE WORKSPACE (CLOUDSUITE)">GOOGLE WORKSPACE (CLOUDSUITE) </button>
  <button value="KAHOOT" class="pregunta__opcion" style='width:300px; height:25px' id="KAHOOT">KAHOOT </button>
  <button value="SLACK" class="pregunta__opcion" style='width:300px; height:25px' id="SLACK">SLACK </button>
  <button value="SMARTSHEET INC" class="pregunta__opcion" style='width:300px; height:25px' id="SMARTSHEET INC">SMARTSHEET INC </button>
  <button value="XERTICA" class="pregunta__opcion" style='width:300px; height:25px' id="XERTICA">XERTICA </button>
  <button value="ADOBE ACROBAT" class="pregunta__opcion" style='width:300px; height:25px' id="ADOBE ACROBAT">ADOBE ACROBAT </button>
  <button value="ASPEL" class="pregunta__opcion" style='width:300px; height:25px' id="ASPEL">ASPEL </button>
  <button value="SINUBE DF" class="pregunta__opcion" style='width:300px; height:25px' id="SINUBE DF">SINUBE DF </button>
  <button value="SPARK GRAND CANAL STR" class="pregunta__opcion" style='width:300px; height:25px' id="SPARK GRAND CANAL STR">SPARK GRAND CANAL STR </button>
  <button value="ASOCIACION MEXICANA DE LA INDUSTRIA DE TECNOLOG?AS DE INFORMACI?N, A.C." class="pregunta__opcion" style='width:300px; height:25px' id="ASOCIACION MEXICANA DE LA INDUSTRIA DE TECNOLOG?AS DE INFORMACI?N, A.C.">AMITI, A.C. </button>
  <button value="BITBUCKET(ATLASSIAN)" class="pregunta__opcion" style='width:300px; height:25px' id="BITBUCKET(ATLASSIAN)">BITBUCKET(ATLASSIAN) </button>
  <button value="BOX UK " class="pregunta__opcion" style='width:300px; height:25px' id="BOX UK">BOX UK  </button>
  <button value="CELIGO" class="pregunta__opcion" style='width:300px; height:25px' id="CELIGO">CELIGO </button>
  <button value="GRAMMARLY" class="pregunta__opcion" style='width:300px; height:25px' id="GRAMMARLY">GRAMMARLY </button>
  <button value="MASTERCLASS" class="pregunta__opcion" style='width:300px; height:25px' id="MASTERCLASS">MASTERCLASS </button>
  <button value="JETBRAINS AMERICAS INC" class="pregunta__opcion" style='width:300px; height:25px' id="JETBRAINS AMERICAS IN">JETBRAINS AMERICAS INC </button>
  <button value="TRELLO" class="pregunta__opcion" style='width:300px; height:25px' id="TRELLO ">TRELLO </button>
  <button value="ACTIVE CAMPAIGN " class="pregunta__opcion" style='width:300px; height:25px' id="ACTIVE CAMPAIGN">ACTIVE CAMPAIGN  </button>
  <button value="AKKY " class="pregunta__opcion" style='width:300px; height:25px' id="AKKY">AKKY  </button>

</div>
</ul>
<div style="width:70%; height:100%;  display:inline-block; ">
<div class="container" style="text-align:center;"  >
  <div class="row">
   
    <div class="col">
    <div id="myChartdos" ></div>
    </div>

  </div>

  <div class="row">
  <div class="col" id="one">
    Descripcion

     <div id="imdesc"><img src="img/eden.png" alt="Girl in a jacket" width="100%" height="100"></div>
    <div id="descr"></div>
  </div>
    <div class="col" >
    Responsable
    <div id="resp"></div>
    </div>
    <div class="col">
 Licencias
 <div  id="resplic"></div>
    </div>
 
  </div><br>
  <div class="row">
    <div class="col">
      Costos
      <div id="costos"></div>
    </div>
    <div class="col">
      Etc
    </div>
  </div>
</div>

</div> 
</div>

</div>
<style>

div#one{
  margin: auto;
  margin-top: 50px;
  
  height: 300px;
  background-color: red;
}
div#imdesc{
  float: center;
  width: 100%;
  height:30%;
  background-color: green;
}
div#descr{
  margin-top: 20px;
  width: 100%;
  height:52%;
  background-color: green;
}

  #myChartdos{
    height:50px;
        background-color:#F4ABF2;
        border:0px solid #FF0000;
}

#descr{
        height:300px;
        background-color:#C8CACC;
}
#resp{
  height:300px;
        background-color:#BDD2EF;
        
    
}
#resplic{
        height:300px;
        background-color:#DAF7E2;
        
       
}
#costos{
        height:300px;
        background-color:#D3D1C1;
        clear:both;
}
</style>
<?php
require 'footer.php';
?>

<script>

  var a = document.querySelectorAll(".ucm > .pregunta__opcion")
  a.forEach(function(e){
    e.addEventListener('click', function(){
      checkAnswer(e.id)
    })
  })
function checkAnswer(id){
  idB= id;
  
  $("#myChartdos").html(document.getElementById(idB).value);
  var parametros = {
             "id" : id
    };
  $.ajax({
            data:  parametros, //datos que se envian a traves de ajax
            url:   'querys/query_software.php', //archivo que recibe la peticion
            type:  'post', //método de envio
            beforeSend: function () {
                    $("#resultado").html("Procesando, espere por favor...");
            }, 
            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                    $("#resultado").html(response);
                    d = response.split(','); 
                    b = response.split(':');
                    // console.log(d[5].indexOf(":"));
                   
                    // var cadena = d[5].substring(d[5].indexOf(":")+1).replace('"','');
                    var cadena1 = d[5].substring(d[5].indexOf(":")+2 , d[5].length-1);
                    $("#resp").html(cadena1);

                    var cadena13 = d[13].substring(d[13].indexOf(":")+2 , d[13].length-1);
                    $("#resplic").html(cadena13);

                    var cadena53 = d[53].substring(d[53].indexOf(":")+2 , d[53].length-1);
                    $("#costos").html(cadena53);

                    var cadena57 = b[57].substring(b[57].indexOf(":")+2 , b[57].length-15);
                    $("#descr").html(cadena57);
                  
            }
    });
} 



  function mayus(e) {
    e.value = e.value.toUpperCase();
  }



  
</script>