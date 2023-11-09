<?php
require '../../conexion.php';
 
if(isset($_POST['inpTododoc'])){
    $var = $_POST['inpTododoc'];

    if(!empty($var1)){
 
    $consulta = "where 
   useremail = '$var' )"; }
else { $consulta = ''; }
echo "
<table class='table table-hover table-condensed'>
<thead>
<tr >
<td>id</td>
<td>useremail</td>
<td>estatus</td>


<td>firstname</td>
<td>lastname</td> 
<td>usertitle</td>
<td>companyname</td>
<td>esignpermissionprofile</td>

<td>addeddate</td>
<td>alladministrationcapabilities</td>
<td>dpusersandgroups</td>
<td>eliminada</td>
</tr>
</thead>";
 $querydiscaredo =  "SELECT * from docusing $consulta
order by useremail asc";
$resdiscaredo = mysqli_query($conexion, $querydiscaredo);

$numero = mysqli_num_rows($resdiscaredo);
echo 'Total de registros: ' . $numero; ?><br><?php

while ($filaresdiscaredo = mysqli_fetch_array($resdiscaredo)) {

    echo"
    <tbody>
    <tr>
<td>".$filaresdiscaredo['id']."</td>
<td>".$filaresdiscaredo['useremail']."</td>
<td>".$filaresdiscaredo['estatus']."</td>

<td>".$filaresdiscaredo['firstname']."</td>
<td>".$filaresdiscaredo['lastname']."</td>
<td>".$filaresdiscaredo['usertitle']."</td>
<td>".$filaresdiscaredo['companyname']."</td>
<td>".$filaresdiscaredo['esignpermissionprofile']."</td>
<td>".$filaresdiscaredo['addeddate']."</td>
<td>".$filaresdiscaredo['alladministrationcapabilities']."</td>
<td>".$filaresdiscaredo['dpusersandgroups']."</td>
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
		$nombreArchivo = '../archivos/docusing.xlsx';
	
	$objPHPExcel = PHPEXCEL_IOFactory::load($nombreArchivo);
	
	$objPHPExcel->setActiveSheetIndex(0);
	
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	
	
	
	for($i = 2; $i <= $numRows; $i++){
		
$useremail = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
$estatus = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
$firstname = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
$lastname = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
$usertitle = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
$companyname = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
$esignpermissionprofile = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
$addeddate = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
$alladministrationcapabilities = $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
$dpusersandgroups = $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
$dpadministrators = $objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
$dpenvelopesharing = $objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
$dpenvelopetransfer = $objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();
$dpaccountsettings = $objPHPExcel->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
$dpreporting = $objPHPExcel->getActiveSheet()->getCell('O'.$i)->getCalculatedValue();
$dpaccountsecuritysettings = $objPHPExcel->getActiveSheet()->getCell('P'.$i)->getCalculatedValue();
$dpdocumentretentionsettings = $objPHPExcel->getActiveSheet()->getCell('Q'.$i)->getCalculatedValue();
$dpconnect = $objPHPExcel->getActiveSheet()->getCell('R'.$i)->getCalculatedValue();
$dpsigninggroups = $objPHPExcel->getActiveSheet()->getCell('S'.$i)->getCalculatedValue();
$dpmanagegroupsbutnotusers = $objPHPExcel->getActiveSheet()->getCell('T'.$i)->getCalculatedValue();
$dpstamps = $objPHPExcel->getActiveSheet()->getCell('U'.$i)->getCalculatedValue();
$cansendenvelope = $objPHPExcel->getActiveSheet()->getCell('V'.$i)->getCalculatedValue();
$allapisequentialsigning = $objPHPExcel->getActiveSheet()->getCell('W'.$i)->getCalculatedValue();
$allequentialsigning = $objPHPExcel->getActiveSheet()->getCell('X'.$i)->getCalculatedValue();
$addressbook = $objPHPExcel->getActiveSheet()->getCell('Y'.$i)->getCalculatedValue();
$clickwraps = $objPHPExcel->getActiveSheet()->getCell('Z'.$i)->getCalculatedValue();
$templates = $objPHPExcel->getActiveSheet()->getCell('AA'.$i)->getCalculatedValue();
$allignerattachments = $objPHPExcel->getActiveSheet()->getCell('AB'.$i)->getCalculatedValue();
$allendonbehalfofotherusersthroughapi = $objPHPExcel->getActiveSheet()->getCell('AC'.$i)->getCalculatedValue();
$allreceiptoftransferredenvelopes = $objPHPExcel->getActiveSheet()->getCell('AD'.$i)->getCalculatedValue();
$alllanguageselection = $objPHPExcel->getActiveSheet()->getCell('AE'.$i)->getCalculatedValue();
$allendingtobulklist = $objPHPExcel->getActiveSheet()->getCell('AF'.$i)->getCalculatedValue();
$allrecipientviewednotifications = $objPHPExcel->getActiveSheet()->getCell('AG'.$i)->getCalculatedValue();
$disabledocumentupload = $objPHPExcel->getActiveSheet()->getCell('AH'.$i)->getCalculatedValue();
$hideotheractionsmenu = $objPHPExcel->getActiveSheet()->getCell('AI'.$i)->getCalculatedValue();
$powerformrole = $objPHPExcel->getActiveSheet()->getCell('AJ'.$i)->getCalculatedValue();
$addressline1 = $objPHPExcel->getActiveSheet()->getCell('AK'.$i)->getCalculatedValue();
$addressline2 = $objPHPExcel->getActiveSheet()->getCell('AL'.$i)->getCalculatedValue();
$city = $objPHPExcel->getActiveSheet()->getCell('AM'.$i)->getCalculatedValue();
$stateregionprovince = $objPHPExcel->getActiveSheet()->getCell('AN'.$i)->getCalculatedValue();
$country = $objPHPExcel->getActiveSheet()->getCell('AO'.$i)->getCalculatedValue();
$postalcode = $objPHPExcel->getActiveSheet()->getCell('AP'.$i)->getCalculatedValue();
$phone = $objPHPExcel->getActiveSheet()->getCell('AQ'.$i)->getCalculatedValue();
$apiusername = $objPHPExcel->getActiveSheet()->getCell('AR'.$i)->getCalculatedValue();
$groupuno = $objPHPExcel->getActiveSheet()->getCell('AS'.$i)->getCalculatedValue();
$groupdos = $objPHPExcel->getActiveSheet()->getCell('AT'.$i)->getCalculatedValue();


		
		 $expiration_timestamp = $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
		
		 $sql = mysqli_query ($conexion,"SELECT useremail  from docusing where useremail = '$useremail'");
		
		 $result= mysqli_num_rows($sql);
		 if ($result > 0) { 
			
			
			$sqlup = "UPDATE docusing
			SET  			
            useremail = '$useremail',
            estatus = '$estatus',
            firstname = '$firstname',
            lastname = '$lastname',
            usertitle = '$usertitle',
            companyname = '$companyname',
            esignpermissionprofile = '$esignpermissionprofile',
            addeddate = '$addeddate',
            alladministrationcapabilities = '$alladministrationcapabilities',
            dpusersandgroups = '$dpusersandgroups',
            dpadministrators = '$dpadministrators',
            dpenvelopesharing = '$dpenvelopesharing',
            dpenvelopetransfer = '$dpenvelopetransfer',
            dpaccountsettings = '$dpaccountsettings',
            dpreporting = '$dpreporting',
            dpaccountsecuritysettings = '$dpaccountsecuritysettings',
            dpdocumentretentionsettings = '$dpdocumentretentionsettings',
            dpconnect = '$dpconnect',
            dpsigninggroups = '$dpsigninggroups',
            dpmanagegroupsbutnotusers = '$dpmanagegroupsbutnotusers',
            dpstamps = '$dpstamps',
            cansendenvelope = '$cansendenvelope',
            allapisequentialsigning = '$allapisequentialsigning',
            allequentialsigning = '$allequentialsigning',
            addressbook = '$addressbook',
            clickwraps = '$clickwraps',
            templates = '$templates',
            allignerattachments = '$allignerattachments',
            allendonbehalfofotherusersthroughapi = '$allendonbehalfofotherusersthroughapi',
            allreceiptoftransferredenvelopes = '$allreceiptoftransferredenvelopes',
            alllanguageselection = '$alllanguageselection',
            allendingtobulklist = '$allendingtobulklist',
            allrecipientviewednotifications = '$allrecipientviewednotifications',
            disabledocumentupload = '$disabledocumentupload',
            hideotheractionsmenu = '$hideotheractionsmenu',
            powerformrole = '$powerformrole',
            addressline1 = '$addressline1',
            addressline2 = '$addressline2',
            city = '$city',
            stateregionprovince = '$stateregionprovince',
            country = '$country',
            postalcode = '$postalcode',
            phone = '$phone',
            apiusername = '$apiusername',
            groupuno = '$groupuno',
            groupdos = '$groupdos',
			fecha_modificacion=current_date,
			hora_modificacion=current_time
			where  useremail= '$useremail'";
			$resultup = mysqli_query($conexion, $sqlup);
		
			if($resultup){
				echo $useremail."-Actualizado<br>";
			}else{ 
				echo $useremail."-No Actualizado<br>"; 
			}
		}else{
			
			 $sqlinser = "INSERT INTO docusing
			(
                useremail,
                estatus,
                firstname,
                lastname,
                usertitle,
                companyname,
                esignpermissionprofile,
                addeddate,
                alladministrationcapabilities,
                dpusersandgroups,
                dpadministrators,
                dpenvelopesharing,
                dpenvelopetransfer,
                dpaccountsettings,
                dpreporting,
                dpaccountsecuritysettings,
                dpdocumentretentionsettings,
                dpconnect,
                dpsigninggroups,
                dpmanagegroupsbutnotusers,
                dpstamps,
                cansendenvelope,
                allapisequentialsigning,
                allequentialsigning,
                addressbook,
                clickwraps,
                templates,
                allignerattachments,
                allendonbehalfofotherusersthroughapi,
                allreceiptoftransferredenvelopes,
                alllanguageselection,
                allendingtobulklist,
                allrecipientviewednotifications,
                disabledocumentupload,
                hideotheractionsmenu,
                powerformrole,
                addressline1,
                addressline2,
                city,
                stateregionprovince,
                country,
                postalcode,
                phone,
                apiusername,
                groupuno,
                groupdos,
                eliminada,
                fecha_insercion,
                hora_insercion)
			VALUES(
				
				'$useremail',
                '$estatus',
                '$firstname',
                '$lastname',
                '$usertitle',
                '$companyname',
                '$esignpermissionprofile',
                '$addeddate',
                '$alladministrationcapabilities',
                '$dpusersandgroups',
                '$dpadministrators',
                '$dpenvelopesharing',
                '$dpenvelopetransfer',
                '$dpaccountsettings',
                '$dpreporting',
                '$dpaccountsecuritysettings',
                '$dpdocumentretentionsettings',
                '$dpconnect',
                '$dpsigninggroups',
                '$dpmanagegroupsbutnotusers',
                '$dpstamps',
                '$cansendenvelope',
                '$allapisequentialsigning',
                '$allequentialsigning',
                '$addressbook',
                '$clickwraps',
                '$templates',
                '$allignerattachments',
                '$allendonbehalfofotherusersthroughapi',
                '$allreceiptoftransferredenvelopes',
                '$alllanguageselection',
                '$allendingtobulklist',
                '$allrecipientviewednotifications',
                '$disabledocumentupload',
                '$hideotheractionsmenu',
                '$powerformrole',
                '$addressline1',
                '$addressline2',
                '$city',
                '$stateregionprovince',
                '$country',
                '$postalcode',
                '$phone',
                '$apiusername',
                '$groupuno',
                '$groupdos',
				0,
                current_date,
                current_time		
			);";
			$resultinser = mysqli_query($conexion, $sqlinser);
		
			if($resultinser){
				$sqlupids = "UPDATE docusing  
				INNER JOIN slack on upper (SUBSTRING(slack.email, 1,(instr(slack.email,'@')-1 ))) = upper (SUBSTRING(docusing.useremail, 1,(instr(docusing.useremail,'@')-1 )))
				SET docusing.id_slack = slack.id_slack , docusing.eliminada = slack.eliminada
                    where docusing.useremail = '$useremail'";
                    $resultupids = mysqli_query($conexion, $sqlupids);
            if($resultupids){
                echo $useremail."-Insertado y id_slack actualizado <br>";
            }else{
                echo $useremail."-Insertado <br>";
            }

				
			}else{
				echo $useremail."-No Insertado <br>";
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