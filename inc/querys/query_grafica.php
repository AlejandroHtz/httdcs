

<?php 
require '../../conexion.php';

if(isset( $_POST['valor2'])){
    $variable = $_POST['valor2'];
    $valor3 = $_POST['valor3'];
    if($valor3 > 1) { $punto = "asc"; $layout = "TOP 5 de los Colaboradores con puntajes bajos"; } else { $punto  = "desc"; $layout = "TOP 5 de los Mejores Colaboradores por Dirección"; }
    if($variable == '0'){ $consulta = "where ob.eliminada = 0"; }else { $consulta = "where w.direccion = '$variable' and ob.eliminada = 0 "; }
    $querydiscareje =  "SELECT ob.nombre_empleado, ob.puesto,ob.calific_total_evaluacion_desempeno 
    from objetivos_info as ob left join workbeat as w on w.id_slack = ob.id_slack 
    $consulta
    order by ob.calific_total_evaluacion_desempeno $punto, ob.nombre_empleado asc limit 5";

    echo " <center><h2> $layout </h2></center>
<table class='table table-striped' >
    <thead>
        <tr>
        <th>
        Nombre
        </th>
        <th>
        Posición
        </th>          
        <th>
        Calificación
        </th>
             
        </tr>
    </thead>";

    $resdiscarejeo = mysqli_query($conexion, $querydiscareje);
    while ($filaresdiscareje = mysqli_fetch_array($resdiscarejeo))  {
echo"
<tbody>
<tr>
<td>".$filaresdiscareje['nombre_empleado'] ."</td> 
<td>".$filaresdiscareje['puesto'] ."</td> 
<td>".$filaresdiscareje['calific_total_evaluacion_desempeno'] ."</td> 
</tr>

</tbody>";
    }
echo "</table>";

$variable = $_POST['valor2'];
 if($variable == '0'){ $consulta = "where ob.eliminada = 0"; }else { $consulta = "where w.direccion = '$variable' and ob.eliminada = 0"; }
$querydoscarz="SELECT ob.nombre_empleado, ob.puesto,ob.calific_total_evaluacion_desempeno 
from objetivos_info as ob left join workbeat as w on w.id_slack = ob.id_slack 
$consulta
order by ob.calific_total_evaluacion_desempeno $punto, ob.nombre_empleado asc limit 5 ";

 $resultadodoscarz = mysqli_query($conexion, $querydoscarz);
 while ($filacarz = mysqli_fetch_array($resultadodoscarz)) {  
  $datacampcarz[] = $filacarz; 
 }

 if($variable == '0'){ $consultaj = ""; }else { $consultaj = "where w.direccion = '$variable'"; }
 $querydoscarzj="SELECT 
 FORMAT(sum(cm.sc_uno + cm.sc_dos)/count(*),1) as sercliente, 
 FORMAT(sum(cm.cva_uno + cm.cva_dos + cm.valagre_tres)/count(*),1) as compvalagre,
 FORMAT(sum(cm.po_uno + cm.po_dos)/count(*),1) as planorg ,
 FORMAT(sum(cm.tec_uno + cm.tec_dos + cm.tec_tres + cm.valagre_cuatro)/count(*),1) as trabequipcom
 
 from competencias as cm
 left join workbeat as w on w.id_slack = cm.id_slack and w.eliminada = 0
 $consultaj ";
 
  $resultadodoscarzj = mysqli_query($conexion, $querydoscarzj);
  while ($filacarzj = mysqli_fetch_array($resultadodoscarzj)) {  
   $datacampcarzj[] = $filacarzj; 
  }

 
?>

<script>
   

   let select = document.querySelector('#valor2');
   let chartEgresos;

mostrarGrafico('horizontalBar');
select.addEventListener('change', ()=>{
   tipo = select.value;

   chartEgresos && chartEgresos.destroy();
   Chart.type = tipo;
   mostrarGrafico(tipo);
});

function mostrarGrafico(tipo){
    let egresos = document.querySelector('#myChart').getContext('2d');
    Chart.defaults.global.defaultFontSize = 15;
  Chart.defaults.global.defaultFontFamily = "'Roboto', 'sans-serif'";

    chartEgresos = new Chart(egresos, {
        type: tipo, 
        data: {
            options:{
               animation: {
                   duration: 3000
               }
            },
            animationSteps: 60,
            labels: [ <?php foreach ($datacampcarz as $d) : ?> "<?php echo $d[0]; ?>",
            <?php endforeach; ?>],
            datasets:  [{
            label: '',
            data: [
                <?php foreach ($datacampcarz as $d) : ?>
             
                 <?php echo $d[2]; ?>,

             
                <?php endforeach; ?>
            ],  
                backgroundColor: [
                'rgb(255, 255, 0)',
                'rgb(54, 162, 235)',
                'rgb(255, 206, 86)',
                'rgb(75, 192, 192)',
                'rgb(153, 102, 255)',
                'rgb(255, 159, 64)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
                ]
            }]
            
        },
        options: {
      

            scales: {
        yAxes: [{
            barPercentage: 0.5
        }],
        xAxes: [{            
             ticks: { 
              beginAtZero: true,
               fontSize: 10
                    },
                }],
      }
    }
    })
}

////
let selectj = document.querySelector('#valor2');
   let chartEgresosj;

mostrarGraficoj('bar');
selectj.addEventListener('change', ()=>{
   tipo = selectj.value;

   chartEgresosj && chartEgresosj.destroy();
   Chart.type = tipo;
   mostrarGraficoj(tipo);
});

function mostrarGraficoj(tipo){
    let egresosj = document.querySelector('#myChartdos').getContext('2d');
    Chart.defaults.global.defaultFontSize = 15;
  Chart.defaults.global.defaultFontFamily = "'Roboto', 'sans-serif'";

    chartEgresosj = new Chart(egresosj, {
        type: tipo, 
        data: {
            options:{
               animation: {
                   duration: 3000
               }
            },
            animationSteps: 60,
            labels: [ 'SERVICIO AL CLIENTE', 'COMPROMISO Y VALOR AGREGADO','TRABAJO EN EQUIPO y COMUNICACIÓN','PLANEACIÓN Y ORGANIZACIÓN'],
            datasets:  [{
            label: '',
            data: [
                <?php foreach ($datacampcarzj as $d) : ?>
             
                 <?php echo $d[0]; ?>,
                 <?php echo $d[1]; ?>,
                 <?php echo $d[2]; ?>,
                 <?php echo $d[3]; ?>,
             
                <?php endforeach; ?>
            ],  
                backgroundColor: [
                    
                'rgb(255, 0, 0)',
                'rgb(255, 105, 180)',
                'rgb(255, 140, 0)',
                'rgb(255, 215, 0)',
                'rgb(139, 0, 139)',
                'rgb(50, 205, 50)'
                ],
                borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
                ]
            }]
            
        },
        options: {
      

            scales: {
        yAxes: [{
            barPercentage: 1
            
        }],
   
        xAxes: [{            
             ticks: { 
              beginAtZero: true,
               fontSize: 10
                    },
                }],
      }
    }
    }) 
}
</script>
<?php }
?>

