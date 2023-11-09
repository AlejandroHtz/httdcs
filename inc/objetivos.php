
<?php

$id_user."-".$id_slack; 

$querytc =  "SELECT   w.nombre_completo, w.nombreposicion, 
w.departamento, w.direccion, w.fechadeingresoorganizacion, sl.id_evaluador,
ev.nombre as nombre_evaluador,sl.evaluado
from slack sl
left join workbeat w on w.id_slack = sl.id_slack
left join evaluadores ev on ev.id = sl.id_evaluador
where sl.id_slack = $id_slack";
$resultadotc = mysqli_query($conexion, $querytc);
$fila = mysqli_fetch_array($resultadotc);
$nombre = $fila['nombre_completo'];
$posicion = $fila['nombreposicion'];
$departamento = $fila['departamento'];
$direccion = $fila['direccion'];
$evaluador = $fila['nombre_evaluador'];
$id_evaluador = $fila['id_evaluador'];
$fechaingreso = $fila['fechadeingresoorganizacion'];
$evaluado = $fila['evaluado'];
if($result <> 0){}else{ ?>
  <script>
    alert ("Estimado Colaborador \nTe informamos que tu evaluación aún no ha sido calificada por tu líder inmediato, una vez que tu líder emita una calificación para tus objetivos y competencias, te aparecerá toda la información.");
  </script>
  <?php }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="generator" content="PhpSpreadsheet, https://github.com/PHPOffice/PhpSpreadsheet">
    <meta name="author" content="AHERRERA" />
    <style type="text/css">
      html { font-family:Calibri, Arial, Helvetica, sans-serif; font-size:11pt; background-color:white }
      a.comment-indicator:hover + div.comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em }
      a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em }
      div.comment { display:none }
      table { border-collapse:collapse; page-break-after:always }
      .gridlines td { border:1px dotted black }
      .gridlines th { border:1px dotted black }
      .b { text-align:center }
      .e { text-align:center }
      .f { text-align:right }
      .inlineStr { text-align:left }
      .n { text-align:right }
      .s { text-align:left }
      td.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style1 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style1 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style2 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style2 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style3 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style3 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style4 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style4 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style5 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#D8D8D8 }
      th.style5 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#D8D8D8 }
      td.style6 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style6 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style7 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:9pt; background-color:white }
      th.style7 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:9pt; background-color:white }
      td.style8 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style8 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style9 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style9 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style10 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style10 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style11 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style11 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style12 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style12 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style13 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style13 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style14 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style14 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style15 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style15 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style16 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFF00 }
      th.style16 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFF00 }
      td.style17 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFF00 }
      th.style17 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFF00 }
      td.style18 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002848 }
      th.style18 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002848 }
      td.style19 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002848 }
      th.style19 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002848 }
      td.style20 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002848 }
      th.style20 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002848 }
      td.style21 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002848 }
      th.style21 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002848 }
      td.style22 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style22 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style23 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style23 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style24 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style24 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style25 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style25 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style26 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      th.style26 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      td.style27 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      th.style27 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      td.style28 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      th.style28 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      td.style29 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      th.style29 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      td.style30 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      th.style30 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      td.style31 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      th.style31 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      td.style32 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      th.style32 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      td.style33 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      th.style33 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      td.style34 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      th.style34 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      td.style35 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style35 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style36 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style36 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style37 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style37 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style38 { vertical-align:top; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:#FFFFFF }
      th.style38 { vertical-align:top; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:#FFFFFF }
      td.style39 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:#00B0F0 }
      th.style39 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:#00B0F0 }
      td.style40 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:12pt; background-color:#002848 }
      th.style40 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:12pt; background-color:#002848 }
      td.style41 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:12pt; background-color:#002848 }
      th.style41 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:12pt; background-color:#002848 }
      td.style42 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:12pt; background-color:#002848 }
      th.style42 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:12pt; background-color:#002848 }
      td.style43 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:9pt; background-color:white }
      th.style43 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:9pt; background-color:white }
      td.style44 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:14pt; background-color:#FFC000 }
      th.style44 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:14pt; background-color:#FFC000 }
      td.style45 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:14pt; background-color:#FFC000 }
      th.style45 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:14pt; background-color:#FFC000 }
      td.style46 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:14pt; background-color:#FFC000 }
      th.style46 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:14pt; background-color:#FFC000 }
      td.style47 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:20pt; background-color:#FFC000 }
      th.style47 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:20pt; background-color:#FFC000 }
      td.style48 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:20pt; background-color:#FFC000 }
      th.style48 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:20pt; background-color:#FFC000 }
      td.style49 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:20pt; background-color:#FFC000 }
      th.style49 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:20pt; background-color:#FFC000 }
      td.style50 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style50 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style51 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style51 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style52 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:12pt; background-color:#002848 }
      th.style52 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:12pt; background-color:#002848 }
      td.style53 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:9pt; background-color:white }
      th.style53 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:9pt; background-color:white }
      td.style54 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:14pt; background-color:#FFFF00 }
      th.style54 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:14pt; background-color:#FFFF00 }
      td.style55 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002848 }
      th.style55 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002848 }
      td.style56 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style56 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style57 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#D8D8D8 }
      th.style57 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#D8D8D8 }
      td.style58 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style58 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style59 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002848 }
      th.style59 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002848 }
      td.style60 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style60 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style61 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style61 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style62 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style62 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style63 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style63 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style64 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style64 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style65 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style65 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style66 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      th.style66 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      td.style67 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      th.style67 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      td.style68 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      th.style68 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      td.style69 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      th.style69 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      td.style70 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      th.style70 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      td.style71 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      th.style71 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      td.style72 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:20pt; background-color:#A9CD90 }
      th.style72 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:20pt; background-color:#A9CD90 }
      td.style73 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:#00B0F0 }
      th.style73 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:#00B0F0 }
      td.style74 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      th.style74 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      td.style75 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      th.style75 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      td.style76 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      th.style76 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      td.style77 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      th.style77 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      td.style78 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      th.style78 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      td.style79 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      th.style79 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      td.style80 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#00B0F0 }
      th.style80 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#00B0F0 }
      td.style81 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#00B0F0 }
      th.style81 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#00B0F0 }
      td.style82 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#00B0F0 }
      th.style82 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#00B0F0 }
      td.style83 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#00B0F0 }
      th.style83 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#00B0F0 }
      td.style84 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#00B0F0 }
      th.style84 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#00B0F0 }
      td.style85 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#00B0F0 }
      th.style85 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#00B0F0 }
      td.style86 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      th.style86 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      td.style87 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      th.style87 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      td.style88 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      th.style88 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      td.style89 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      th.style89 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      td.style90 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      th.style90 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      td.style91 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      th.style91 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      td.style92 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      th.style92 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      td.style93 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      th.style93 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      td.style94 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style94 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style95 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style95 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style96 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style96 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style97 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style97 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style98 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style98 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style99 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style99 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style100 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style100 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style101 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style101 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style102 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style102 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style103 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style103 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style104 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style104 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style105 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style105 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style106 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style106 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style107 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style107 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style108 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style108 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style109 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style109 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style110 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style110 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style111 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style111 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style112 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      th.style112 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      td.style113 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      th.style113 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      td.style114 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      th.style114 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      td.style115 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style115 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style116 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style116 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style117 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style117 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style118 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style118 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style119 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style119 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style120 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      th.style120 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      td.style121 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      th.style121 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      td.style122 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      th.style122 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      td.style123 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      th.style123 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      td.style124 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      th.style124 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      td.style125 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      th.style125 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      td.style126 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style126 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style127 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style127 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style128 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style128 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style129 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style129 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style130 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style130 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style131 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style131 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style132 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style132 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style133 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style133 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style134 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style134 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style135 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style135 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style136 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style136 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style137 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style137 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style138 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style138 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style139 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style139 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style140 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style140 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style141 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style141 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style142 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style142 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style143 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style143 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style144 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style144 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style145 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style145 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style146 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style146 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style147 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style147 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style148 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style148 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style149 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:18pt; background-color:white }
      th.style149 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:18pt; background-color:white }
      td.style150 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:18pt; background-color:white }
      th.style150 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:18pt; background-color:white }
      td.style151 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:18pt; background-color:white }
      th.style151 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:18pt; background-color:white }
      td.style152 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:18pt; background-color:white }
      th.style152 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:18pt; background-color:white }
      td.style153 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:18pt; background-color:white }
      th.style153 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:18pt; background-color:white }
      td.style154 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:18pt; background-color:white }
      th.style154 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:18pt; background-color:white }
      td.style155 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:18pt; background-color:white }
      th.style155 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:18pt; background-color:white }
      td.style156 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:18pt; background-color:white }
      th.style156 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:18pt; background-color:white }
      td.style157 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:18pt; background-color:white }
      th.style157 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:18pt; background-color:white }
      td.style158 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:18pt; background-color:white }
      th.style158 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:18pt; background-color:white }
      table.sheet0 col.col0 { width:25.07777749pt }
      table.sheet0 col.col1 { width:111.15555428pt }
      table.sheet0 col.col2 { width:54.2222216pt }
      table.sheet0 col.col3 { width:54.2222216pt }
      table.sheet0 col.col4 { width:67.09999923pt }
      table.sheet0 col.col5 { width:66.42222146pt }
      table.sheet0 col.col6 { width:54.2222216pt }
      table.sheet0 col.col7 { width:79.29999909pt }
      table.sheet0 col.col8 { width:55.57777714pt }
      table.sheet0 col.col9 { width:134.19999846pt }
      table.sheet0 col.col10 { width:54.2222216pt }
      table.sheet0 col.col11 { width:54.2222216pt }
      table.sheet0 .column11 { visibility:collapse; display:none }
      table.sheet0 tr { height:15pt }
      table.sheet0 tr.row30 { height:27.75pt }
      table.sheet0 tr.row31 { height:27.75pt }
      table.sheet0 tr.row34 { height:20.25pt }
      table.sheet0 tr.row35 { height:20.25pt }
      table.sheet0 tr.row36 { height:29.25pt }
      table.sheet0 tr.row37 { height:29.25pt }
      table.sheet0 tr.row38 { height:29.25pt }
      table.sheet0 tr.row39 { height:29.25pt }
      table.sheet0 tr.row40 { height:29.25pt }
      table.sheet0 tr.row41 { height:29.25pt }
      table.sheet0 tr.row44 { height:20.25pt }
      table.sheet0 tr.row45 { height:29.25pt }
      table.sheet0 tr.row46 { height:29.25pt }
      table.sheet0 tr.row47 { height:29.25pt }
      table.sheet0 tr.row48 { height:29.25pt }
      table.sheet0 tr.row49 { height:29.25pt }
      table.sheet0 tr.row50 { height:29.25pt }
      table.sheet0 tr.row51 { height:29.25pt }
      table.sheet0 tr.row55 { height:20.25pt }
      table.sheet0 tr.row56 { height:29.25pt }
      table.sheet0 tr.row57 { height:29.25pt }
      table.sheet0 tr.row58 { height:29.25pt }
      table.sheet0 tr.row59 { height:29.25pt }
      table.sheet0 tr.row60 { height:29.25pt }
      table.sheet0 tr.row61 { height:29.25pt }
      table.sheet0 tr.row62 { height:29.25pt }
      table.sheet0 tr.row65 { height:29.25pt }
      table.sheet0 tr.row73 { height:29.25pt }
      input.auno { background:#002848; outline: none;
    background-color: #002848;
    border: 0; color:#ffffff; width : 100%;  }
    </style>
  </head>

  <body>
<style>
@page { margin-left: 2.69791666666667in; margin-right: 0.010416666666667in; margin-top: 0.75in; margin-bottom: 0.75in; }
/* body { margin-left: 0.69791666666667in; margin-right: 0.010416666666667in; margin-top: 0.75in; margin-bottom: 0.75in; } */
</style>
<center>

  <form id="insform">
    
    <table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0">
        <col class="col0">
        <col class="col1">
        <col class="col2">
        <col class="col3">
        <col class="col4">
        <col class="col5">
        <col class="col6">
        <col class="col7">
        <col class="col8">
        <col class="col9">
        <col class="col10">
        <col class="col11">
        <tbody>
          <tr class="row0">
            <td class="column0">&nbsp;</td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row1">
            <td class="column0">&nbsp;</td>
            <td class="column1 style60 null style65" colspan="2" rowspan="5">
<div style="position: relative;"><img  src="../images/netsoft.png" border="0" width="95%" height="95%" /></div></td>
            <td class="column3 style149 s style158" colspan="5" rowspan="5">FORMATO EVALUACIÓN DE DESEMPEÑO <br />
NETSOFT</td>
            <td class="column8 style66 s style71" colspan="2" rowspan="5">Ver: 02<br />
Clave:RH/EDD<br />
Año: 2022</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row2">
            <td class="column0">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <input type="hidden" name="id_slack" value="<?php echo $id_slack ?>">
            <input type="hidden" name="id_user" value="<?php echo $id_user ?>">
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row3">
            <td class="column0">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row4">
            <td class="column0">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row5">
            <td class="column0">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row6">
            <td class="column0">&nbsp;</td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row7">
            <td class="column0">&nbsp;</td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">Fecha</td>
            <td class="column8 style55 s style55" colspan="2"><?php date_default_timezone_set('America/Mexico_City');

          echo $hoy = date("d/m/Y");  ?> </td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row8">
            <td class="column0">&nbsp;</td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row9">
            <td class="column0">&nbsp;</td>
            <td class="column1 style55 s style55" colspan="9">Formato de Evaluación de Desempeño</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row10">
            <td class="column0">&nbsp;</td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row11">
            <td class="column0">&nbsp;</td>
            <td class="column1 style140 s style148" colspan="9" rowspan="3">Has sido elegido para participar en el proceso de evaluación de desempeño de la organización. Este proceso es de suma importancia para la organización ya que permite tener una visión general de las fortalezas y áreas de oportunidad de cada uno de sus colaboradores, así como las sugerencias que le permitirán a cada uno alcanzar su máximo potencial.</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row12">
            <td class="column0">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row13">
            <td class="column0">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row14">
            <td class="column0">&nbsp;</td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <!-- <tr class="row15">
            <td class="column0">&nbsp;</td>
            <td class="column1 style55 s style55" colspan="9">Realizada por:</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row16">
            <td class="column0">&nbsp;</td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row17">
            <td class="column0">&nbsp;</td>
            <td class="column7 style2 s">Líder / Supervisor </td>
            <td class="column8"><input  type="radio" id="inlineCheckbox1" name="inlineCheckbox1" value="supervisor" checked>
            
            </div></td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7 style2 s"></td>
            <td class="column8">
              
            </div></td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr> -->
          <tr class="row18">
            <td class="column0">&nbsp;</td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row19">
            <td class="column0">&nbsp;</td>
            <td class="column1 style55 s style55" colspan="9">Datos Generales:</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row20">
            <td class="column0">&nbsp;</td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row21">
            <td class="column0">&nbsp;</td>
            <td class="column1 style3 s">Nombre del empleado:</td>
            <td class="column2 style58 null style58" colspan="8"><?php echo $nombre; ?></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row22">
            <td class="column0">&nbsp;</td>
            <td class="column1 style3 s">Puesto:</td>
            <td class="column2 style58 null style58" colspan="8"><?php echo $posicion; ?></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row23">
            <td class="column0">&nbsp;</td>
            <td class="column1 style3 s">Departamento:</td>
            <td class="column2 style58 null style58" colspan="8"><?php echo $departamento; ?></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row24">
            <td class="column0">&nbsp;</td>
            <td class="column1 style3 s">Dirección:</td>
            <td class="column2 style58 null style58" colspan="8"><?php echo $direccion; ?></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row25">
            <td class="column0">&nbsp;</td>
            <td class="column1 style3 s">Nombre Evaluador:</td>
            <td class="column2 style58 null style58" colspan="8"><?php echo $evaluador; ?></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row26">
            <td class="column0">&nbsp;</td>
            <td class="column1 style3 s">Fecha de Ingreso</td>
            <td class="column2 style58 null style58" colspan="8"><?php echo $fechaingreso; ?></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row27">
            <td class="column0">&nbsp;</td>
            <td class="column1 style3 s" >Período de evaluación:</td>
            <td class="column2 style58 s" colspan="8">Enero 2022 - Junio 2022</td> 
          
  
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row28">
            <td class="column0">&nbsp;</td>
            <td class="column1 style11 null"></td>
            <td class="column2 style12 null"></td>
            <td class="column3 style12 null"></td>
            <td class="column4 style12 null"></td>
            <td class="column5 style12 null"></td>
            <td class="column6 style13 null"></td>
            <td class="column7 style12 null"></td>
            <td class="column8 style12 null"></td>
            <td class="column9 style12 null"></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row29">
            <td class="column0">&nbsp;</td>
            <td class="column1 style11 null"></td>
            <td class="column2 style12 null"></td>
            <td class="column3 style12 null"></td>
            <td class="column4 style12 null"></td>
            <td class="column5 style12 null"></td>
            <td class="column6 style13 null"></td>
            <td class="column7 style12 null"></td>
            <td class="column8 style12 null"></td>
            <td class="column9 style12 null"></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row30">
            <td class="column0">&nbsp;</td>
            <td class="column1 style39 s">Calificación Objetivos</td>
            <td class="column2 style72 f style72" colspan="4"><?php if ($result > 0) { echo $calificacion_objetivos."%"; }?></td>
            <td class="column6 style73 s style73" colspan="2">Calificación Competencias</td>
            <td class="column8 style72 f style72" colspan="2"><?php if ($result > 0) { echo $calific_competencias."%"; }?></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row31">
            <td class="column0">&nbsp;</td>
            <td class="column1 style44 s style46" colspan="5">Calificación Total Evaluación de Desempeño </td>
            <td class="column6 style47 f style49" colspan="4"><?php if ($result > 0) { echo $calific_total_evaluacion_desempeno."%"; }?></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row32">
            <td class="column0">&nbsp;</td>
            <td class="column1 style11 null"></td>
            <td class="column2 style12 null"></td>
            <td class="column3 style12 null"></td>
            <td class="column4 style12 null"></td>
            <td class="column5 style12 null"></td>
            <td class="column6 style12 null"></td>
            <td class="column7 style12 null"></td>
            <td class="column8 style12 null"></td>
            <td class="column9 style12 null"></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row33">
            <td class="column0">&nbsp;</td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row34">
            <td class="column0">&nbsp;</td>
            <td class="column1 style59 s style59" colspan="9"><input size="100%" name="InpObjetivoUno" class="auno"  id="InpObjetivoUno" type="text" <?php if ($result > 0) { ?> value="<?php echo trim($array[0]["objetivo_dec"]); }?>" placeholder="Escribe tu primer objetivo"  ></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row35">
            <td class="column0">&nbsp;</td>
            <td class="column1 style18 s">Peso Objetivo 1: </td>
            <td class="column2 style54 null style54" colspan="2">			
            <input name="InpPesoObjetivoUno" size="19" maxlength="3"  max="100" id="InpPesoObjetivoUno" type="text"  <?php if ($result > 0) { ?> value="<?php  if(trim($arr = json_encode($array[0]["peso_objetivo"]),'"') > 0 ){ echo trim($arr = json_encode($array[0]["peso_objetivo"]),'"'); } else{}  }?>" /> 
             </td>
            <td class="column4 style21 null"></td>
            <td class="column5 style19 null"></td>
            <td class="column6 style19 null"></td>
            <td class="column7 style19 null"></td>
            <td class="column8 style19 null"></td>
            <td class="column9 style20 null"></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row36">
            <td class="column0">&nbsp;</td>
            <td class="column1 style57 s style57" colspan="2">Actividades Clave</td>
            <td class="column4 style5 s">Peso de cada actividad</td>
            <td class="column4 style5 s">Peso ponderado de actividad</td>
            <td class="column4 style5 s"></td> 
            <td class="column6 style17 s">Calificación Actual</td>
            <td class="column7 style5 s">% Cumplimiento de actividad</td>
            <td class="column8 style5 s">Calificación ponderada</td>
            <td class="column9 style5 s">Comentarios</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row37">
            <td class="column0">&nbsp;</td>                                                                                                                                                       
            <td class="column1 style53 s style53" colspan="2"><textarea  cols="38" rows="2"  name="InpObjUnoActClaveUnoUno" id="InpObjUnoActClaveUnoUno" type="text" placeholder="Actividades Clave"><?php if ($result > 0) {  echo trim($array[0]["actividades_clave"]); }?></textarea></td>
            <td class="column3 style23 null"><input size="13" maxlength="3" name="InpObjUnoPesoActUnoUno" id="InpObjUnoPesoActUnoUno" type="text" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[0]["peso_cada_actividad"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57' /></td>
            <td class="column4 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[0]["peso_ponderado_actividad"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column5 style15 null"><input size="13" maxlength="3" name="InpObjUnoMetaActUnoUno" id="InpObjUnoMetaActUnoUno" type="hidden"  <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[0]["meta_esperada_de_actividad"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column6 style17 null"><input size="13" maxlength="3" name="InpObjUnoCalifActUnoUno" id="InpObjUnoCalifActUnoUno" type="text" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[0]["calificacion_actual"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column7 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[0]["porcentaje_cumplimiento_actividad"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column8 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[0]["calificacion_ponderada"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column9 style7 null"><textarea  cols="22" rows="1" name="InpObjUnoComentUnoUno" id="InpObjUnoComentUnoUno" type="text" ><?php if ($result > 0) {  echo trim($array[0]["comentarios"]); }?></textarea></td>
            <td class="column10">&nbsp;</td> 
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row38">
            <td class="column0">&nbsp;</td>
            <td class="column1 style53 s style53" colspan="2"><textarea  cols="38" rows="2"  name="InpObjUnoActClaveDosUno" id="InpObjUnoActClaveDosUno" type="text" placeholder="Actividades Clave"><?php if ($result > 0) {  echo trim($array[1]["actividades_clave"]); }?></textarea></td>
            <td class="column3 style23 null"><input size="13" maxlength="3" name="InpObjUnoPesoActDosUno" id="InpObjUnoPesoActDosUno" type="text" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[1]["peso_cada_actividad"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column4 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[1]["peso_ponderado_actividad"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column5 style15 null"><input size="13" maxlength="3" name="InpObjUnoMetaActDosUno" id="InpObjUnoMetaActDosUno" type="hidden" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[1]["meta_esperada_de_actividad"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column6 style17 null"><input size="13" maxlength="3" name="InpObjUnoCalifActDosUno" id="InpObjUnoCalifActDosUno" type="text" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[1]["calificacion_actual"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td> 
            <td class="column7 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[1]["porcentaje_cumplimiento_actividad"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column8 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[1]["calificacion_ponderada"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column9 style7 null"><textarea cols="22" rows="1"  name="InpObjUnoComentDosUno" id="InpObjUnoComentDosUno" type="text" ><?php if ($result > 0) {  echo trim($array[1]["comentarios"]); }?></textarea></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row39">
            <td class="column0">&nbsp;</td>
            <td class="column1 style53 s style53" colspan="2"><textarea  cols="38" rows="2"  name="InpObjUnoActClaveTresUno" id="InpObjUnoActClaveTresUno" type="text" placeholder="Actividades Clave"><?php if ($result > 0) {  echo trim($array[2]["actividades_clave"]); }?></textarea></td>
            <td class="column3 style23 null"><input size="13" maxlength="3" name="InpObjUnoPesoActTresUno" id="InpObjUnoPesoActTresUno" type="text" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[2]["peso_cada_actividad"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column4 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[2]["peso_ponderado_actividad"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column5 style15 null"><input size="13" maxlength="3" name="InpObjUnoMetaActTresUno" id="InpObjUnoMetaActTresUno" type="hidden" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[2]["meta_esperada_de_actividad"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column6 style17 null"><input size="13" maxlength="3" name="InpObjUnoCalifActTresUno" id="InpObjUnoCalifActTresUno" type="text" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[2]["calificacion_actual"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td> 
            <td class="column7 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[2]["porcentaje_cumplimiento_actividad"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column8 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[2]["calificacion_ponderada"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column9 style7 null"><textarea cols="22" rows="1"  name="InpObjUnoComentTresUno" id="InpObjUnoComentTresUno" type="text" ><?php if ($result > 0) {  echo trim($array[2]["comentarios"]); }?></textarea></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row40">
          <td class="column0">&nbsp;</td>
            <td class="column1 style53 s style53" colspan="2"><textarea  cols="38" rows="2"  name="InpObjUnoActClaveCuatroUno" id="InpObjUnoActClaveCuatroUno" type="text" placeholder="Actividades Clave"><?php if ($result > 0) {  echo trim($array[3]["actividades_clave"]); }?></textarea></td>
            <td class="column3 style23 null"><input size="13" maxlength="3" name="InpObjUnoPesoActCuatroUno" id="InpObjUnoPesoActCuatroUno" type="text" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[3]["peso_cada_actividad"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column4 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[3]["peso_ponderado_actividad"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column5 style15 null"><input size="13" maxlength="3" name="InpObjUnoMetaActCuatroUno" id="InpObjUnoMetaActCuatroUno" type="hidden" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[3]["meta_esperada_de_actividad"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column6 style17 null"><input size="13" maxlength="3" name="InpObjUnoCalifActCuatroUno" id="InpObjUnoCalifActCuatroUno" type="text" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[3]["calificacion_actual"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td> 
            <td class="column7 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[3]["porcentaje_cumplimiento_actividad"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column8 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[3]["calificacion_ponderada"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column9 style7 null"><textarea cols="22" rows="1"  name="InpObjUnoComentCuatroUno" id="InpObjUnoComentCuatroUno" type="text" ><?php if ($result > 0) {  echo trim($array[3]["comentarios"]); }?></textarea></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row41">
            <td class="column0">&nbsp;</td>
            <td class="column1 style50 s style51" colspan="2">Total </td>
            <td class="column3 style22 f"><?php if ($result > 0) { echo trim(((int)$array[0]["peso_cada_actividad"] + (int)$array[1]["peso_cada_actividad"] + (int)$array[2]["peso_cada_actividad"] + (int)$array[3]["peso_cada_actividad"] ) ) ; } ?></td>
            <td class="column4 style10 f"><?php if ($result > 0) { echo trim(((int)$array[0]["peso_ponderado_actividad"] + (int)$array[1]["peso_ponderado_actividad"] + (int)$array[2]["peso_ponderado_actividad"] + (int)$array[3]["peso_ponderado_actividad"] )); } ?></td>
            <td class="column5 style10 null"></td>
            <td class="column6 style10 null"></td>
            <td class="column7 style10 null"></td>
            <td class="column8 style10 f"><?php if ($result > 0) { echo trim(((int)$array[0]["calificacion_ponderada"] + (int)$array[1]["calificacion_ponderada"] + (int)$array[2]["calificacion_ponderada"] + (int)$array[3]["calificacion_ponderada"] ) ); } ?></td>
            <td class="column9 style7 null"></textarea></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row42">
            <td class="column0">&nbsp;</td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row43">
            <td class="column0">&nbsp;</td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row44">
            <td class="column0">&nbsp;</td>
            <td class="column1 style59 s style59" colspan="9"><input size="100%" name="InpObjetivoDos" class="auno"  id="InpObjetivoDos" type="text" <?php if ($result > 0) { ?> value="<?php echo trim($array[4]["objetivo_dec"]); }?>" placeholder="Escribe tu segundo objetivo"></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row45">
            <td class="column0">&nbsp;</td>
            <td class="column1 style18 s">Peso Objetivo 2: </td>       
            <td class="column2 style54 null style54" colspan="2"><input name="InpPesoObjetivoDos" size="19" id="InpPesoObjetivoDos" type="text" <?php if ($result > 0) { ?> value="<?php  if(trim($arr = json_encode($array[4]["peso_objetivo"]),'"') > 0 ){ echo trim($arr = json_encode($array[4]["peso_objetivo"]),'"'); } else{}  }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column4 style21 null"></td>
            <td class="column5 style19 null"></td>
            <td class="column6 style19 null"></td>
            <td class="column7 style19 null"></td>
            <td class="column8 style19 null"></td>
            <td class="column9 style20 null"></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row46">
            <td class="column0">&nbsp;</td>
            <td class="column1 style57 s style57" colspan="2">Actividades Clave</td>
            <td class="column4 style5 s">Peso de cada actividad</td>
            <td class="column4 style5 s">Peso ponderado de actividad</td>
            <td class="column4 style5 s"></td>
            <td class="column6 style17 s">Calificación Actual</td>
            <td class="column7 style5 s">% Cumplimiento de actividad</td>
            <td class="column8 style5 s">Calificación ponderada</td>
            <td class="column9 style5 s">Comentarios</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row47">
            <td class="column0">&nbsp;</td>
            <td class="column1 style53 s style53" colspan="2"><textarea  cols="38" rows="2"  name="InpObjDosActClaveUnoDos" id="InpObjDosActClaveUnoDos" type="text" placeholder="Actividades Clave"><?php if ($result > 0) {  echo trim($array[4]["actividades_clave"]); }?></textarea></td>
            <td class="column3 style23 null"><input size="13" maxlength="3" name="InpObjDosPesoActUnoDos" id="InpObjDosPesoActUnoDos" type="text" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[4]["peso_cada_actividad"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column4 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[4]["peso_ponderado_actividad"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column5 style15 null"><input size="13" maxlength="3" name="InpObjDosMetaActUnoDos" id="InpObjDosMetaActUnoDos" type="hidden" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[4]["meta_esperada_de_actividad"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column6 style17 null"><input size="13" maxlength="3" name="InpObjDosCalifActUnoDos" id="InpObjDosCalifActUnoDos" type="text" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[4]["calificacion_actual"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column7 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[4]["porcentaje_cumplimiento_actividad"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column8 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[4]["calificacion_ponderada"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column9 style7 null"><textarea  cols="22" rows="1" name="InpObjDosComentUnoDos" id="InpObjDosComentUnoDos" type="text" ><?php if ($result > 0) {  echo trim($array[4]["comentarios"]); }?></textarea></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row48">
          <td class="column0">&nbsp;</td>
            <td class="column1 style53 s style53" colspan="2"><textarea  cols="38" rows="2"  name="InpObjDosActClaveDosDos" id="InpObjDosActClaveDosDos" type="text" placeholder="Actividades Clave"><?php if ($result > 0) {  echo trim($array[5]["actividades_clave"]); }?></textarea></td>
            <td class="column3 style23 null"><input size="13" maxlength="3" name="InpObjDosPesoActDosDos" id="InpObjDosPesoActDosDos" type="text" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[5]["peso_cada_actividad"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column4 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[5]["peso_ponderado_actividad"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column5 style15 null"><input size="13" maxlength="3" name="InpObjDosMetaActDosDos" id="InpObjDosMetaActDosDos" type="hidden" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[5]["meta_esperada_de_actividad"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column6 style17 null"><input size="13" maxlength="3" name="InpObjDosCalifActDosDos" id="InpObjDosCalifActDosDos" type="text" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[5]["calificacion_actual"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column7 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[5]["porcentaje_cumplimiento_actividad"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column8 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[5]["calificacion_ponderada"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column9 style7 null"><textarea  cols="22" rows="1" name="InpObjDosComentDosDos" id="InpObjDosComentDosDos" type="text" ><?php if ($result > 0) {  echo trim($array[5]["comentarios"]); }?></textarea></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row49">
            <td class="column0">&nbsp;</td>
            <td class="column1 style53 s style53" colspan="2"><textarea  cols="38" rows="2"  name="InpObjDosActClaveTresDos" id="InpObjDosActClaveTresDos" type="text" placeholder="Actividades Clave"><?php if ($result > 0) {  echo trim($array[6]["actividades_clave"]); }?></textarea></td>
            <td class="column3 style23 null"><input size="13" maxlength="3" name="InpObjDosPesoActTresDos" id="InpObjDosPesoActTresDos" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[6]["peso_cada_actividad"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column4 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[6]["peso_ponderado_actividad"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column5 style15 null"><input size="13" maxlength="3" name="InpObjDosMetaActTresDos" id="InpObjDosMetaActTresDos" type="hidden" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[6]["meta_esperada_de_actividad"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column6 style17 null"><input size="13" maxlength="3" name="InpObjDosCalifActTresDos" id="InpObjDosCalifActTresDos" type="text" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[6]["calificacion_actual"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column7 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[6]["porcentaje_cumplimiento_actividad"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column8 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[6]["calificacion_ponderada"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column9 style7 null"><textarea  cols="22" rows="1" name="InpObjDosComentTresDos" id="InpObjDosComentTresDos" type="text" ><?php if ($result > 0) {  echo trim($array[6]["comentarios"]); }?></textarea></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row50">
            <td class="column0">&nbsp;</td>
            <td class="column1 style53 s style53" colspan="2"><textarea  cols="38" rows="2"  name="InpObjDosActClaveCuatroDos" id="InpObjDosActClaveCuatroDos" type="text" placeholder="Actividades Clave"><?php if ($result > 0) {  echo trim($array[7]["actividades_clave"]); }?></textarea></td>
            <td class="column3 style23 null"><input size="13" maxlength="3" name="InpObjDosPesoActCuatroDos" id="InpObjDosPesoActCuatroDos" type="text" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[7]["peso_cada_actividad"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column4 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[7]["peso_ponderado_actividad"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column5 style15 null"><input size="13" maxlength="3" name="InpObjDosMetaActCuatroDos" id="InpObjDosMetaActCuatroDos" type="hidden" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[7]["meta_esperada_de_actividad"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column6 style17 null"><input size="13" maxlength="3" name="InpObjDosCalifActCuatroDos" id="InpObjDosCalifActCuatroDos" type="text" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[7]["calificacion_actual"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column7 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[7]["porcentaje_cumplimiento_actividad"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column8 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[7]["calificacion_ponderada"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column9 style7 null"><textarea  cols="22" rows="1" name="InpObjDosComentCuatroDos" id="InpObjDosComentCuatroDos" type="text" ><?php if ($result > 0) {  echo trim($array[7]["comentarios"]); }?></textarea></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row51">
            <td class="column0">&nbsp;</td>
            <td class="column1 style50 s style51" colspan="2">Total </td>
            <td class="column3 style22 f"><?php if ($result > 0) { echo trim(((int)$array[4]["peso_cada_actividad"] + (int)$array[5]["peso_cada_actividad"] + (int)$array[6]["peso_cada_actividad"] + (int)$array[7]["peso_cada_actividad"] ) ); } ?></td>
            <td class="column4 style10 f"><?php if ($result > 0) { echo trim(((int)$array[4]["peso_ponderado_actividad"] + (int)$array[5]["peso_ponderado_actividad"] + (int)$array[6]["peso_ponderado_actividad"] + (int)$array[7]["peso_ponderado_actividad"] )); } ?></td>
            <td class="column5 style10 null"></td>
            <td class="column6 style10 null"></td>
            <td class="column7 style10 null"></td>
            <td class="column8 style10 f"><?php if ($result > 0) { echo trim(((int)$array[4]["calificacion_ponderada"] + (int)$array[5]["calificacion_ponderada"] + (int)$array[6]["calificacion_ponderada"] + (int)$array[7]["calificacion_ponderada"] ) ); } ?></td>
            <td class="column9 style7 null"></textarea></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row52">
            <td class="column0">&nbsp;</td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row53">
            <td class="column0">&nbsp;</td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row54">
            <td class="column0">&nbsp;</td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row55">
            <td class="column0">&nbsp;</td>
            <td class="column1 style59 s style59" colspan="9"><input size="100%" name="InpObjetivoTres" class="auno"  id="InpObjetivoTres" type="text" <?php if ($result > 0) { ?> value="<?php echo trim($array[8]["objetivo_dec"]); }?>" placeholder="Escribe tu tercer objetivo"></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row56">
            <td class="column0">&nbsp;</td>
            <td class="column1 style18 s">Peso Objetivo 3: </td>                                               
            <td class="column2 style54 null style54" colspan="2"><input name="InpPesoObjetivoTres" size="19" id="InpPesoObjetivoTres" type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' <?php if ($result > 0) { ?> value="<?php  if(trim($arr = json_encode($array[8]["peso_objetivo"]),'"') > 0 ){ echo trim($arr = json_encode($array[8]["peso_objetivo"]),'"'); } else{}  }?>"/></td>
            <td class="column4 style21 null"></td>
            <td class="column5 style19 null"></td>
            <td class="column6 style19 null"></td>
            <td class="column7 style19 null"></td>
            <td class="column8 style19 null"></td>
            <td class="column9 style20 null"></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row57">
            <td class="column0">&nbsp;</td>
            <td class="column1 style57 s style57" colspan="2">Actividades Clave</td>
            <td class="column4 style5 s">Peso de cada actividad</td>
            <td class="column4 style5 s">Peso ponderado de actividad</td>
            <td class="column4 style5 s"></td>
            <td class="column6 style17 s">Calificación Actual</td>
            <td class="column7 style5 s">% Cumplimiento de actividad</td>
            <td class="column8 style5 s">Calificación ponderada</td>
            <td class="column9 style5 s">Comentarios</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row58">
            <td class="column0">&nbsp;</td>
            <td class="column1 style53 s style53" colspan="2"><textarea  cols="38" rows="2"  name="InpObjTresActClaveUnoTres" id="InpObjTresActClaveUnoTres" type="text" placeholder="Actividades Clave"><?php if ($result > 0) {  echo trim($array[8]["actividades_clave"]); }?></textarea></td>
            <td class="column3 style23 null"><input size="13" maxlength="3" name="InpObjTresPesoActUnoTres" id="InpObjTresPesoActUnoTres" type="text" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[8]["peso_cada_actividad"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column4 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[8]["peso_ponderado_actividad"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column5 style15 null"><input size="13" maxlength="3" name="InpObjTresMetaActUnoTres" id="InpObjTresMetaActUnoTres" type="hidden" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[8]["meta_esperada_de_actividad"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column6 style17 null"><input size="13" maxlength="3" name="InpObjTresCalifActUnoTres" id="InpObjTresCalifActUnoTres" type="text" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[8]["calificacion_actual"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column7 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[8]["porcentaje_cumplimiento_actividad"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column8 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[8]["calificacion_ponderada"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column9 style7 null"><textarea  cols="22" rows="1" name="InpObjTresComentUnoTres" id="InpObjTresComentUnoTres" type="text" ><?php if ($result > 0) {  echo trim($array[8]["comentarios"]); }?></textarea></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row59">
            <td class="column0">&nbsp;</td>
            <td class="column1 style53 s style53" colspan="2"><textarea  cols="38" rows="2"  name="InpObjTresActClaveDosTres" id="InpObjTresActClaveDosTres" type="text" placeholder="Actividades Clave"><?php if ($result > 0) {  echo trim($array[9]["actividades_clave"]); }?></textarea></td>
            <td class="column3 style23 null"><input size="13" maxlength="3" name="InpObjTresPesoActDosTres" id="InpObjTresPesoActDosTres" type="text" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[9]["peso_cada_actividad"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column4 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[9]["peso_ponderado_actividad"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column5 style15 null"><input size="13" maxlength="3" name="InpObjTresMetaActDosTres" id="InpObjTresMetaActDosTres" type="hidden" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[9]["meta_esperada_de_actividad"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column6 style17 null"><input size="13" maxlength="3" name="InpObjTresCalifActDosTres" id="InpObjTresCalifActDosTres" type="text" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[9]["calificacion_actual"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column7 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[9]["porcentaje_cumplimiento_actividad"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column8 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[9]["calificacion_ponderada"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column9 style7 null"><textarea  cols="22" rows="1" name="InpObjTresComentDosTres" id="InpObjTresComentDosTres" type="text" ><?php if ($result > 0) {  echo trim($array[9]["comentarios"]); }?></textarea></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row60">
            <td class="column0">&nbsp;</td>
            <td class="column1 style53 s style53" colspan="2"><textarea  cols="38" rows="2"  name="InpObjTresActClaveTresTres" id="InpObjTresActClaveTresTres" type="text" placeholder="Actividades Clave"><?php if ($result > 0) {  echo trim($array[10]["actividades_clave"]); }?></textarea></td>
            <td class="column3 style23 null"><input size="13" maxlength="3" name="InpObjTresPesoActTresTres" id="InpObjTresPesoActTresTres" type="text" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[10]["peso_cada_actividad"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column4 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[10]["peso_ponderado_actividad"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column5 style15 null"><input size="13" maxlength="3" name="InpObjTresMetaActTresTres" id="InpObjTresMetaActTresTres" type="hidden" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[10]["meta_esperada_de_actividad"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column6 style17 null"><input size="13" maxlength="3" name="InpObjTresCalifActTresTres" id="InpObjTresCalifActTresTres" type="text" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[10]["calificacion_actual"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column7 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[10]["porcentaje_cumplimiento_actividad"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column8 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[10]["calificacion_ponderada"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column9 style7 null"><textarea  cols="22" rows="1" name="InpObjTresComentTresTres" id="InpObjTresComentTresTres" type="text" ><?php if ($result > 0) {  echo trim($array[10]["comentarios"]); }?></textarea></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row61">
            <td class="column0">&nbsp;</td>
            <td class="column1 style53 s style53" colspan="2"><textarea  cols="38" rows="2"  name="InpObjTresActClaveCuatroTres" id="InpObjTresActClaveCuatroTres" type="text" placeholder="Actividades Clave"><?php if ($result > 0) {  echo trim($array[11]["actividades_clave"]); }?></textarea></td>
            <td class="column3 style23 null"><input size="13" maxlength="3" name="InpObjTresPesoActCuatroTres" id="InpObjTresPesoActCuatroTres" type="text" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[11]["peso_cada_actividad"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column4 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[11]["peso_ponderado_actividad"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column5 style15 null"><input size="13" maxlength="3" name="InpObjTresMetaActCuatroTres" id="InpObjTresMetaActCuatroTres" type="hidden" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[11]["meta_esperada_de_actividad"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column6 style17 null"><input size="13" maxlength="3" name="InpObjTresCalifActCuatroTres" id="InpObjTresCalifActCuatroTres" type="text" <?php if ($result > 0) { ?> value="<?php echo trim($arr = json_encode($array[11]["calificacion_actual"]),'"'); }?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/></td>
            <td class="column7 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[11]["porcentaje_cumplimiento_actividad"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column8 style9 f"><?php if ($result > 0) {  echo trim($arr = json_encode($array[11]["calificacion_ponderada"]),'"')."%"; } else{ echo "0%"; } ?></td>
            <td class="column9 style7 null"><textarea  cols="22" rows="1" name="InpObjTresComentCuatroTres" id="InpObjTresComentCuatroTres" type="text" ><?php if ($result > 0) {  echo trim($array[11]["comentarios"]); }?></textarea></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row62">
            <td class="column0">&nbsp;</td>
            <td class="column1 style50 s style51" colspan="2">Total </td>
            <td class="column3 style22 f"><?php if ($result > 0) { echo trim(((int)$array[8]["peso_cada_actividad"] + (int)$array[9]["peso_cada_actividad"] + (int)$array[10]["peso_cada_actividad"] + (int)$array[11]["peso_cada_actividad"] ) ); } ?></td>
            <td class="column4 style10 f"><?php if ($result > 0) { echo trim(((int)$array[8]["peso_ponderado_actividad"] + (int)$array[9]["peso_ponderado_actividad"] + (int)$array[10]["peso_ponderado_actividad"] + (int)$array[11]["peso_ponderado_actividad"] )); } ?></td> 
            <td class="column5 style10 null"></td>
            <td class="column6 style10 null"></td>
            <td class="column7 style10 null"></td>
            <td class="column8 style10 f"><?php if ($result > 0) { echo trim(((int)$array[8]["calificacion_ponderada"] + (int)$array[9]["calificacion_ponderada"] + (int)$array[10]["calificacion_ponderada"] + (int)$array[11]["calificacion_ponderada"] ) ); } ?></td>
            <td class="column9 style7 null"></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row63">
            <td class="column0">&nbsp;</td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row64">
            <td class="column0">&nbsp;</td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row65">
            <td class="column0">&nbsp;</td>
            <td class="column1 style52 s style52" colspan="5">Áreas a mejorar </td>
            <td class="column6 style52 s style52" colspan="4">Fortalezas </td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row66">
            <td class="column0">&nbsp;</td>
            <td class="column1 style43 null style43" colspan="5" rowspan="5"><textarea cols="86" rows="6"  name="InpAreasMejorar" id="InpAreasMejorar" type="text" ><?php if ($result > 0) { echo $areas_a_mejorar; }?></textarea></td>
            <td class="column6 style53 null style53" colspan="4" rowspan="5"><textarea cols="86" rows="6"  name="InpFortalezas" id="InpFortalezas" type="text" ><?php if ($result > 0) { echo $fortalezas; }?></textarea></td> 
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row67">
            <td class="column0">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row68">
            <td class="column0">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row69">
            <td class="column0">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row70">
            <td class="column0">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row71">
            <td class="column0">&nbsp;</td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row72">
            <td class="column0">&nbsp;</td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr> 
          <tr class="row73">
            <td class="column0">&nbsp;</td>
            <td class="column1 style40 s style42" colspan="9">Compromisos para revisar en la próxima evaluación</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row74">
            <td class="column0">&nbsp;</td>
            <td class="column1 style43 null style43" colspan="9" rowspan="5"><textarea cols="175" rows="6"  name="InpCompRevProxEvalue" id="InpCompRevProxEvalue" type="text" ><?php if ($result > 0) { echo $comp_revisar_prox_evaluacion; }?></textarea></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row75">
            <td class="column0">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row76">
            <td class="column0">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row77">
            <td class="column0">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>
          <tr class="row78">
            <td class="column0">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
          </tr>

          
        </tbody>
    </table>
    <br>
    </form>  
   
    <?php if ($result > 0) { ?>
      
      Comentarios <button  type="button" style='font-size:15px' data-bs-toggle="modal" data-bs-target="#exampleModal" class='fas fa-exclamation-circle'>  </button>
      <form action="coment_eval.php" method="POST" >
      <textarea cols="175" rows="6"  name="InpComEvalu" id="InpComEvalu" type="text" ><?php echo $comentarioevaluado; ?></textarea> 
      <button type="submit" class="btn btn-secondary" >Guardar</button>
      </form>
    <?php }?> 

  <span id="resultado"></span>
  <br>
  
  
  <br>

</center>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">

      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <h4>Estimado Colaborador <br>
Es importante revisar las calificaciones de tu evaluación de desempeño, si estás de acuerdo con los resultados escribe en el apartado de comentarios: <b>"Estoy de acuerdo"</b>.<br>
En caso de tener alguna inconformidad en algún resultado, objetivos, actividad clave y competencias, escríbelas para que tu evaluador pueda revisarlas. <br><br>


    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
 
    </div>
  </div>
</div>
</div>

</body>
</html>
