<?php
require '../../conexion.php';
 
if(isset($_POST['inpTodoEde'])){
    $var = $_POST['inpTodoEde'];

    if(!empty($var1)){
 
    $consulta = "where 
   email = '$var' )"; }
else { $consulta = ''; }
echo "
<table class='table table-hover table-condensed'>
<thead>
<tr >
<td>id</td>
<td>name</td>
<td>email</td>


<td>startdate</td>
<td>phone</td> 
<td>title</td>
<td>department</td>
<td>usergroup</td>

<td>location</td>
<td>role</td>
<td>assigneddesk</td>
<td>caninviteguests</td>
</tr>
</thead>";
 $querydiscaredo =  "SELECT * from eden $consulta
order by eden.name asc";
$resdiscaredo = mysqli_query($conexion, $querydiscaredo);

$numero = mysqli_num_rows($resdiscaredo);
echo 'Total de registros: ' . $numero; ?><br><?php

while ($filaresdiscaredo = mysqli_fetch_array($resdiscaredo)) {

    echo"
    <tbody>
    <tr>
<td>".$filaresdiscaredo['id']."</td>
<td>".$filaresdiscaredo['name']."</td>
<td>".$filaresdiscaredo['email']."</td>

<td>".$filaresdiscaredo['startdate']."</td>
<td>".$filaresdiscaredo['phone']."</td>
<td>".$filaresdiscaredo['title']."</td>
<td>".$filaresdiscaredo['department']."</td>
<td>".$filaresdiscaredo['usergroup']."</td>
<td>".$filaresdiscaredo['location']."</td>
<td>".$filaresdiscaredo['role']."</td>
<td>".$filaresdiscaredo['assigneddesk']."</td>
<td>".$filaresdiscaredo['caninviteguests']."</td>
    
   
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
		$nombreArchivo = '../archivos/eden.xlsx';
	
	$objPHPExcel = PHPEXCEL_IOFactory::load($nombreArchivo);
	
	$objPHPExcel->setActiveSheetIndex(0);
	
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	
	
	
	for($i = 2; $i <= $numRows; $i++){
		
        $name =	$objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
        $email =	$objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
        $startdate =	$objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
        $phone =	$objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
        $title =	$objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
        $department =	$objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
        $usergroup =	$objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
        $location =	$objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
        $role =	$objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
        $assigneddesk =	$objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
        $caninviteguests =	$objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
        $hostprivacy =	$objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
        
        
		
		 $sql = mysqli_query ($conexion,"SELECT email  from eden where email = '$email'");
		
		 $result= mysqli_num_rows($sql);
		 if ($result > 0) { 
			
			
			$sqlup = "UPDATE eden
			SET  			
            eden.name = '$name',
            email = '$email',
            startdate = '$startdate',
            phone = '$phone',
            title = '$title',
            department = '$department',
            usergroup = '$usergroup',
            eden.location = '$location',
            eden.role = '$role',
            assigneddesk = '$assigneddesk',
            caninviteguests = '$caninviteguests',
            hostprivacy = '$hostprivacy',

			fecha_modificacion=current_date,
			hora_modificacion=current_time
			where  email= '$email'";
			$resultup = mysqli_query($conexion, $sqlup);
		
			if($resultup){
				echo $email."-Actualizado<br>";
			}else{ 
				echo $email."-No Actualizado<br>"; 
			}
		}else{
			
			 $sqlinser = "INSERT INTO eden
			(
                eden.name,
                email,
                startdate,
                phone,
                title,
                department,
                usergroup,
                eden.location,
                eden.role,
                assigneddesk,
                caninviteguests,
                hostprivacy,
                eliminada,
                fecha_insercion,
                hora_insercion)
			VALUES(
                '$name',
                '$email',
                '$startdate',
                '$phone',
                '$title',
                '$department',
                '$usergroup',
                '$location',
                '$role',
                '$assigneddesk',
                '$caninviteguests',
                '$hostprivacy',
				
				0,
                current_date,
                current_time		
			);";
			$resultinser = mysqli_query($conexion, $sqlinser);
		
			if($resultinser){
				$sqlupids = "UPDATE eden  
				INNER JOIN slack on upper (SUBSTRING(slack.email, 1,(instr(slack.email,'@')-1 ))) = upper (SUBSTRING(eden.email, 1,(instr(eden.email,'@')-1 )))
				SET eden.id_slack = slack.id_slack , eden.eliminada = slack.eliminada
                    where eden.email = '$email'";
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