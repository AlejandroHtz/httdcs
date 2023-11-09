<?php
require_once('PHPMailer/PHPMailerAutoload.php');
require ('../conexion.php');


$registroa = mysqli_query($conexion, "SELECT servicio,DATEDIFF(fecha_vencimiento,NOW()),fecha_vencimiento 
FROM plataformas
WHERE fecha_vencimiento <> '' and DATEDIFF(fecha_vencimiento,NOW()) between 0 and 45
ORDER BY fecha_vencimiento asc ");

$result= mysqli_num_rows($registroa);
if ($result > 0) { 
$message ="";
    $uuid =  "Holaaaa";

  //$message= file_get_contents("mail_plantillas/mail_programacion_cita.php?uuid=$uuid");     
     $prefixx="";
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
    $prefixx="https";
}
else {
 
    $prefixx="http";
}
$fullurl = $prefixx.'://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/mail_plantillas/mail_programacion_cita.php";
$postdata = http_build_query(
    array(
        'uuid' => ''.$uuid
    )
);
$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-Type: application/x-www-form-urlencoded',
        'content' => $postdata
    )
);
$context  = stream_context_create($opts);
$message = file_get_contents($fullurl, false, $context);
	//con esta query nos traemos los correos y si funciona
	$registroa = mysqli_query($conexion, "SELECT email
    from users
     where id in (37,2)");
  

	$mail = new PHPMailer();
	$mail->IsSMTP();
//Configuracion servidor mail
		$mail->From = "admin@netsoft-form.com"; //remitente
		$mail->FromName = "admin@netsoft-form.com";
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'ssl'; //seguridad
		$mail->Host = "smtp.ionos.mx"; // servidor smtp
		$mail->Port = 465; //puerto
		$mail->Username ='admin@netsoft-form.com'; //nombre usuario
		$mail->Password = 'Join103214*'; //contraseña
		//$mail->IsHTML(true);
        $email="";
		while ($fila = mysqli_fetch_array($registroa)) { 
			$mail->AddAddress("".$fila['email']);
			$email=$email ." " .$fila['email']." ";
			   } 

	
		$mail->Subject = "Existen contratos proximos a expirar";
		$mail->MsgHTML($message);
		$mail->CharSet = 'UTF-8';
		$mail->SMTPDebug = 0;
		

		if ($mail->Send()) {
			echo'Enviado Correctamente al(los) mail(s): ' .$email;
           // echo "<script> alert('Notificación enviada Correctamente') ;window.location='nueva_solicitud.php'</script>";
			
		} else {
			echo'NO ENVIADO, intentar de nuevo';
            //echo "<script> alert('Fallo en envio de Notificación') ;window.location='nueva_solicitud.php'</script>";
		
		}

    }
?>