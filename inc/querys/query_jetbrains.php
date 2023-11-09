<?php
require '../../conexion.php';
 
if(isset($_POST['inpTodoJet'])){
    $var = $_POST['inpTodoJet'];

    if(!empty($var1)){
 
    $consulta = "where 
   email = '$var' )"; }
else { $consulta = ''; }
echo "
<table class='table table-hover table-condensed'>
<thead>
<tr >
<td>id</td>
<td>user</td>
<td>email</td>


<td>licenceid</td>
<td>orderr</td> 
<td>description</td>
<td>assignmentdate</td>
<td>eliminada</td>

</tr>
</thead>";
 $querydiscaredo =  "SELECT * from jetbrains $consulta
order by userr asc";
$resdiscaredo = mysqli_query($conexion, $querydiscaredo);

$numero = mysqli_num_rows($resdiscaredo);
echo 'Total de registros: ' . $numero; ?><br><?php

while ($filaresdiscaredo = mysqli_fetch_array($resdiscaredo)) {

    echo"
    <tbody>
    <tr>
<td>".$filaresdiscaredo['id']."</td>
<td>".$filaresdiscaredo['userr']."</td>
<td>".$filaresdiscaredo['email']."</td>

<td>".$filaresdiscaredo['licenseid']."</td>
<td>".$filaresdiscaredo['orderr']."</td>
<td>".$filaresdiscaredo['description']."</td>
<td>".$filaresdiscaredo['assignmentdate']."</td>
<td>".$filaresdiscaredo['eliminada']."</td>
    
   
    </tr>
    
    </tbody>";
        }
    echo "</table>";

}


if(isset($_FILES['archivo']['name'])){
require '../Classes/PHPExcel/IOFactory.php';


$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];

	if(move_uploaded_file($guardado, '../archivos/'.$nombre)){
		$nombreArchivo = '../archivos/jetbrains.xlsx';
	
	$objPHPExcel = PHPEXCEL_IOFactory::load($nombreArchivo);
	
	$objPHPExcel->setActiveSheetIndex(0);
	
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	
	
	
	for($i = 2; $i <= $numRows; $i++){
		
        $customercode =	$objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
        $customername =	$objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
        $team =	$objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
        $licenseid =	$objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
        $orderr =	$objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
        $subscriptionpack =	$objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
        $ponumber =	$objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
        $issued =	$objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
        $product =	$objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
        $description =	$objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
        $assigned =	$objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
        $regname =	$objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
        $licensekey =	$objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();
        $userr =	$objPHPExcel->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
        $email =	$objPHPExcel->getActiveSheet()->getCell('O'.$i)->getCalculatedValue();
        $fallbackcoveredversion =	$objPHPExcel->getActiveSheet()->getCell('P'.$i)->getCalculatedValue();
        $licensesubscriptionexpiration =	$objPHPExcel->getActiveSheet()->getCell('Q'.$i)->getCalculatedValue();
        $lastseen =	$objPHPExcel->getActiveSheet()->getCell('R'.$i)->getCalculatedValue();
        $assignmentdate =	$objPHPExcel->getActiveSheet()->getCell('S'.$i)->getCalculatedValue();
        $offlinekeygenerateddate =	$objPHPExcel->getActiveSheet()->getCell('T'.$i)->getCalculatedValue();
        
        
        
		
		 $sql = mysqli_query ($conexion,"SELECT email  from jetbrains where email = '$email'");
		
		 $result= mysqli_num_rows($sql);
		 if ($result > 0) { 
			
			
			$sqlup = "UPDATE jetbrains
			SET  			
            customercode = '$customercode',
            customername = '$customername',
            team = '$team',
            licenseid = '$licenseid',
            orderr = '$orderr',
            subscriptionpack = '$subscriptionpack',
            ponumber = '$ponumber',
            issued = '$issued',
            product = '$product',
            jetbrains.description = '$description',
            assigned = '$assigned',
            regname = '$regname',
            licensekey = '$licensekey',
            userr = '$userr',
            email = '$email',
            fallbackcoveredversion = '$fallbackcoveredversion',
            licensesubscriptionexpiration = '$licensesubscriptionexpiration',
            lastseen = '$lastseen',
            assignmentdate = '$assignmentdate',
            offlinekeygenerateddate = '$offlinekeygenerateddate',

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
			
			 $sqlinser = "INSERT INTO jetbrains
			(
                customercode,
                customername,
                team,
                licenseid,
                orderr,
                subscriptionpack,
                ponumber,
                issued,
                product,
                jetbrains.description,
                assigned,
                regname,
                licensekey,
                userr,
                email,
                fallbackcoveredversion,
                licensesubscriptionexpiration,
                lastseen,
                assignmentdate,
                offlinekeygenerateddate,
                eliminada,
                fecha_insercion,
                hora_insercion)
			VALUES(
                '$customercode',
                '$customername',
                '$team',
                '$licenseid',
                '$orderr',
                '$subscriptionpack',
                '$ponumber',
                '$issued',
                '$product',
                '$description',
                '$assigned',
                '$regname',
                '$licensekey',
                '$userr',
                '$email',
                '$fallbackcoveredversion',
                '$licensesubscriptionexpiration',
                '$lastseen',
                '$assignmentdate',
                '$offlinekeygenerateddate',				
				0,
                current_date,
                current_time		
			);";
			$resultinser = mysqli_query($conexion, $sqlinser);
		
			if($resultinser){
				$sqlupids = "UPDATE jetbrains  
				INNER JOIN slack on upper (SUBSTRING(slack.email, 1,(instr(slack.email,'@')-1 ))) = upper (SUBSTRING(jetbrains.email, 1,(instr(jetbrains.email,'@')-1 )))
				SET jetbrains.id_slack = slack.id_slack , jetbrains.eliminada = slack.eliminada
                    where jetbrains.email = '$email'";
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