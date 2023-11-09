<?php
require '../../conexion.php';
 
if(isset($_POST['inpTodopla'])){
    $var = $_POST['inpTodopla'];

    if(!empty($var1)){
 
    $consulta = "where 
   email = '$var' )"; }
else { $consulta = ''; }
echo "
<table class='table table-hover table-condensed'>
<thead>
<tr >

<td>Servicio</td>
<td>Responsable</td>


<td>Clasificacion</td>
<td>Tipo invercion</td> 
<td>Periodicidad</td>
<td>Acceso Ti</td>
<td>Licencias</td>
<td>Vencimiento</td>
<td>cu_mensual</td>
<td>cu_anual</td>
<td>mensua</td>
<td>anio</td>
</tr>
</thead>";
 $querydiscaredo =  "SELECT * from plataformas $consulta
order by fecha_vencimiento desc";
$resdiscaredo = mysqli_query($conexion, $querydiscaredo);

$numero = mysqli_num_rows($resdiscaredo);
echo 'Total de registros: ' . $numero; ?><br><?php

while ($filaresdiscaredo = mysqli_fetch_array($resdiscaredo)) {

    echo"
    <tbody>
    <tr>

<td>".$filaresdiscaredo['servicio']."</td>
<td>".$filaresdiscaredo['responsable']."</td>
<td>".$filaresdiscaredo['clasificacion']."</td>
<td>".$filaresdiscaredo['tipo_invercion']."</td>
<td>".$filaresdiscaredo['periodicidad']."</td>
<td>".$filaresdiscaredo['acceso_ti']."</td>
<td>".$filaresdiscaredo['nolicencias']."</td>
<td>".$filaresdiscaredo['fecha_vencimiento']."</td>
<td>".number_format($filaresdiscaredo['cu_mensual'],2)."</td>
<td>".number_format($filaresdiscaredo['cu_anual'],2)."</td>
<td>".number_format($filaresdiscaredo['mensual'],2)."</td>
<td>".number_format($filaresdiscaredo['anio'],2)."</td> 
   
    </tr>
    
    </tbody>";
        }
    echo "</table>";

}


if(isset($_FILES['archivo']['name'])){
require '../Classes/PHPExcel/IOFactory.php';


$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];


// if(!file_exists('archivos')){
// 	mkdir('archivos',0777,true);
// 	if(file_exists('archivos')){
// 		if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
// 			$nombreArchivo = 'archivos/lista.xlsx';
	
// 	$objPHPExcel = PHPEXCEL_IOFactory::load($nombreArchivo);
	
// 	$objPHPExcel->setActiveSheetIndex(0);
	
// 	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	
	
	
// 	for($i = 2; $i <= $numRows; $i++){
// 		$codigo = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
// 		$descripcion = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
// 		$costo = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
		
		
	
	
// 			$connection=mysqli_connect("localhost","root","","eqgorsa");
// 			$descripcion= mysqli_real_escape_string($connection, $descripcion); 
// 			$connection->query("INSERT INTO historial (accion,actualcosto,anteriorcosto,codigo,fecha,hora,id)
// 			select 'CAMBIO DE PRECIO','$costo',pco,'$codigo',current_date,CURRENT_TIMESTAMP,'' from general where id = '$codigo'");

// 		$sql = "UPDATE general SET pco='$costo'
// 		where id = '$codigo'";
// 		$result = $mysqli->query($sql);


// 	}if ($result){
// 		echo "<script> alert('Actualizado')
//  window.location='index.php';
//    </script>";

// 	}else {
// 		echo "<script> alert('No Actualizado')
// 		window.location='index.php';
// 		  </script>";
// 		}

// 		}else{
// 			echo "<script> alert('Archivo no se pudo guardar')
// 			window.location='index.php';
// 			  </script>";
// 		}
// 	}
// }else{
	if(move_uploaded_file($guardado, '../archivos/'.$nombre)){
		$nombreArchivo = '../archivos/plataformas.xlsx';
	
	$objPHPExcel = PHPEXCEL_IOFactory::load($nombreArchivo);
	
	$objPHPExcel->setActiveSheetIndex(0);
	
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	
	
	
	for($i = 2; $i <= $numRows; $i++){
		
        $servicio= $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
        $responsable= $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
        $clasificacion= $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
        $tipodeinverncion= $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
        $periodicidad= $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
        $accesoti= $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
        $nolicencias= $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
        $fechainicio= $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
        $fechadevencimiento= $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
        $observaciones= $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
        $proveedor= $objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
        $empresa= $objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
        $cuenta= $objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();
        $moneda= $objPHPExcel->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
        $costounitariomensual= $objPHPExcel->getActiveSheet()->getCell('O'.$i)->getCalculatedValue();
        $costounitarioanual= $objPHPExcel->getActiveSheet()->getCell('P'.$i)->getCalculatedValue();
        $mensual= $objPHPExcel->getActiveSheet()->getCell('Q'.$i)->getCalculatedValue();
        $anio= $objPHPExcel->getActiveSheet()->getCell('R'.$i)->getCalculatedValue();
        if(empty($fechadevencimiento)){  }else{
        $timestamp = PHPExcel_Shared_Date::ExcelToPHP($fechadevencimiento);
        echo $fechadevencimiento = gmdate("Y/m/d H:i:s", $timestamp) ;
    }
		
		 $sql = mysqli_query ($conexion,"SELECT servicio  from plataformas where servicio = '$servicio'");
		
		 $result= mysqli_num_rows($sql);
		 if ($result > 0) { 
			
			
		echo	$sqlup = "UPDATE plataformas
			SET  			

            responsable='$responsable',
            clasificacion='$clasificacion',
            tipo_invercion='$tipodeinverncion',
            periodicidad='$periodicidad',
            acceso_ti='$accesoti',
            nolicencias='$nolicencias',
            fecha_inicio='$fechainicio',
            fecha_vencimiento='$fechadevencimiento',
            observaciones='$observaciones',
            proveedor='$proveedor',
            empresa='$empresa',
            cuenta='$cuenta',
            moneda='$moneda',
            cu_mensual='$costounitariomensual',
            cu_anual='$costounitarioanual',
            mensual='$mensual',
            anio='$anio',
			fecha_modificacion=current_date,
			hora_modificacion=current_time
			where  servicio= '$servicio'";
			$resultup = mysqli_query($conexion, $sqlup);
		
			if($resultup){
				echo $servicio."-Actualizado<br>";
			}else{ 
				echo $servicio."-No Actualizado<br>"; 
			}
		}else{
			
		echo	 $sqlinser = "INSERT INTO plataformas
			(
                servicio,
                responsable,
                clasificacion,
                tipo_invercion,
                periodicidad,
                acceso_ti,
                nolicencias,
                fecha_inicio,
                fecha_vencimiento,
                observaciones,
                proveedor,
                empresa,
                cuenta,
                moneda,
                cu_mensual,
                cu_anual,
                mensual,
                anio,
                eliminada,
                fecha_insercion,
                hora_insercion)
			VALUES(
                '$servicio',
                '$responsable',
                '$clasificacion',
                '$tipodeinverncion',
                '$periodicidad',
                '$accesoti',
                '$nolicencias',
                '$fechainicio',
                '$fechadevencimiento',
                '$observaciones',
                '$proveedor',
                '$empresa',
                '$cuenta',
                '$moneda',
                '$costounitariomensual',
                '$costounitarioanual',
                '$mensual',
                '$anio',

				0,
                current_date,
                current_time		
			);";
			$resultinser = mysqli_query($conexion, $sqlinser);
		
			if($resultinser){
				
                echo $servicio."-Insertado <br>";
            }else{
				echo $servicio."-No Insertado <br>";
			}
			
		 }
	}
// 	if ($result){ 
// 		echo "<script> alert('Actualizado')
//  window.location='index.php';
//    </script>";

// 	}else {
// 		echo "<script> alert('No Actualizado')
// 		window.location='index.php';
// 		  </script>";
// 		}

	}else{
// 		echo "<script> alert('Archivo no se pudo guardar')
//  window.location='../docusing.php';
//    </script>";

	
	}

}