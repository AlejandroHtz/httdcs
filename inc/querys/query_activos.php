<?php
require '../../conexion.php';
 
if(isset($_POST['inpTodoAct'])){
    $var = $_POST['inpTodoAct']; 

    if(!empty($var)){
 
    $consulta = "where 
   (email like '%$var%' or nombre like  '%$var%'  or departamento like  '%$var%'  or puesto like  '%$var%' )"; } 
else { $consulta = 'where eliminada = 0'; }
echo "
<table class='table table-hover table-condensed'>
<thead>
<tr >
<td>id</td>
<td>Nombre</td>
<td>Email</td>


<td>Departamento</td>
<td>Puestp</td> 
<td>Fecha Ingreso</td>
<td>Pais</td>

</tr>
</thead>";
 $querydiscaredo =  "SELECT * from activos $consulta
order by nombre asc";
$resdiscaredo = mysqli_query($conexion, $querydiscaredo);

$numero = mysqli_num_rows($resdiscaredo);
echo 'Total de registros: ' . $numero; ?><br><?php

while ($filaresdiscaredo = mysqli_fetch_array($resdiscaredo)) {

    echo"
    <tbody>
    <tr>
<td>".$filaresdiscaredo['id']."</td>
<td>".$filaresdiscaredo['nombre']."</td>
<td>".$filaresdiscaredo['email']."</td>

<td>".$filaresdiscaredo['departamento']."</td>
<td>".$filaresdiscaredo['puesto']."</td>
<td>".$filaresdiscaredo['fecha_ingreso']."</td>
<td>".$filaresdiscaredo['pais']."</td>

    
   
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
		$nombreArchivo = '../archivos/activos.xlsx';
	
	$objPHPExcel = PHPEXCEL_IOFactory::load($nombreArchivo);
	
	$objPHPExcel->setActiveSheetIndex(0);
	
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	
	
	
	for($i = 2; $i <= $numRows; $i++){
		
        $nombre =	$objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
        $email =	$objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
        $departamento =	$objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
        $puesto =	$objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
        $fecha_ingreso =	$objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
        $pais =	$objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
        if(empty($fecha_ingreso)){  }else{
            $timestamp = PHPExcel_Shared_Date::ExcelToPHP($fecha_ingreso);
             $fecha_ingreso = gmdate("Y/m/d H:i:s", $timestamp) ;
        }
        
        
		
		 $sql = mysqli_query ($conexion,"SELECT nombre  from activos where nombre = '$nombre'");
		
		 $result= mysqli_num_rows($sql);
		 if ($result > 0) { 
			
			
			$sqlup = "UPDATE activos
			SET  			
            
            email = '$email',
            departamento = '$departamento',
            puesto = '$puesto',
            fecha_ingreso = '$fecha_ingreso',
            pais = '$pais',
			fecha_modificacion=current_date,
			hora_modificacion=current_time
			where  nombre= '$nombre'";
			$resultup = mysqli_query($conexion, $sqlup);
		
			if($resultup){
				echo $email."-Actualizado<br>";
			}else{ 
				echo $email."-No Actualizado<br>"; 
			}
		}else{
			
			$sqlinser = "INSERT INTO activos
			(
            nombre,
            email,
            departamento,
            puesto,
            fecha_ingreso,
            pais,
            eliminada,
            fecha_insercion,
            hora_insercion
            
            )
			VALUES(
                '$nombre',
                '$email',
                '$departamento',
                '$puesto',
                '$fecha_ingreso',
                '$pais',
				0,
                current_date,
                current_time		
			);";
			$resultinser = mysqli_query($conexion, $sqlinser);
		
			if($resultinser){
				$sqlupids = "UPDATE activos  
				INNER JOIN slack on upper (SUBSTRING(slack.email, 1,(instr(slack.email,'@')-1 ))) = upper (SUBSTRING(activos.email, 1,(instr(activos.email,'@')-1 )))
				SET activos.id_slack = slack.id_slack , activos.eliminada = slack.eliminada
                    where activos.email = '$email'";
                    $resultupids = mysqli_query($conexion, $sqlupids);
            if($resultupids){
                echo $email."-Insertado y id_slack actualizado <br>";
            }else{
                echo $email."-Insertado <br>";
            }

				
			}else{
				echo $email."-No Insertado <br>";
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