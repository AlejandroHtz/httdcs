<?php $id_slack;
$id_user = $_SESSION['id'];   ?>
 
 
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
      td.style1 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style1 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style2 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style2 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      /* td.style3 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style3 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:white } */
      td.style4 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style4 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      /* td.style5 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style5 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white } */
      td.style6 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style6 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      /* td.style7 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style7 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white } */
      td.style8 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style8 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style9 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style9 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style10 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style10 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style11 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style11 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      /* td.style12 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      th.style12 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 } */
      /* td.style13 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      th.style13 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 } */
      td.style14 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      th.style14 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      /* td.style15 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      th.style15 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF } */
      td.style16 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style16 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      /* td.style17 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style17 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white } */
      /* td.style18 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style18 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white } */
      /* td.style19 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style19 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white } */
      /* td.style20 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style20 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white } */
      /* td.style21 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      th.style21 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF } */
      td.style22 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style22 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      /* td.style23 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style23 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white } */
      td.style24 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style24 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style25 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      th.style25 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      td.style26 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      th.style26 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      td.style27 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      th.style27 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      td.style28 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      th.style28 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      td.style29 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      th.style29 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      td.style30 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      th.style30 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      td.style31 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style31 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style32 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style32 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style33 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style33 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style34 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style34 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style35 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style35 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style36 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style36 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style37 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      th.style37 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      td.style38 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      th.style38 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      /* td.style39 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      th.style39 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 } */
      td.style40 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      th.style40 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      td.style41 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      th.style41 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#002060 }
      td.style42 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style42 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style43 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style43 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      /* td.style44 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style44 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white } */
      td.style45 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style45 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      /* td.style46 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style46 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white } */
      /* td.style47 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      th.style47 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF } */
      td.style48 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      th.style48 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#FFFFFF }
      /* td.style49 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style49 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white } */
      /* td.style50 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      th.style50 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 } */
      /* td.style51 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      th.style51 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 } */
      td.style52 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      th.style52 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      td.style5300 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#00B0F0 }
      th.style5300 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#00B0F0 }
      /* td.style54 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#00B0F0 }
      th.style54 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#00B0F0 } */
      /* td.style55 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#00B0F0 }
      th.style55 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#00B0F0 } */
      td.style56 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      th.style56 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      /* td.style57 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      th.style57 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 } */
      td.style5800 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      th.style5800 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      /* td.style59 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#00B0F0 }
      th.style59 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#00B0F0 } */
      /* td.style60 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#00B0F0 }
      th.style60 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#00B0F0 } */
      td.style6100 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#00B0F0 }
      th.style6100 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#00B0F0 }
      td.style62 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      th.style62 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      td.style63 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      th.style63 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      td.style64 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      th.style64 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      /* td.style65 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      th.style65 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 } */
      td.style66 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style66 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style67 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      th.style67 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      td.style68 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      th.style68 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      td.style69 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      th.style69 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      td.style70 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      th.style70 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:#002060 }
      td.style71 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style71 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      /* td.style72 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style72 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white } */
      /* td.style73 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style73 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white } */
      td.style74 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style74 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style75 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style75 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style76 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style76 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style77 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style77 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style78 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style78 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style79 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style79 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style80 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style80 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style81 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style81 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style82 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style82 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style83 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style83 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style84 { vertical-align:top; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:#FFFFFF }
      th.style84 { vertical-align:top; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:#FFFFFF }
      table.sheet0 col.col0 { width:13.5555554pt }
      table.sheet0 col.col1 { width:54.2222216pt }
      table.sheet0 col.col2 { width:54.2222216pt }
      table.sheet0 col.col3 { width:54.2222216pt }
      table.sheet0 col.col4 { width:54.2222216pt }
      table.sheet0 col.col5 { width:54.2222216pt }
      table.sheet0 col.col6 { width:54.2222216pt }
      table.sheet0 col.col7 { width:54.2222216pt }
      table.sheet0 col.col8 { width:54.2222216pt }
      table.sheet0 col.col9 { width:54.2222216pt }
      table.sheet0 col.col10 { width:54.2222216pt }
      table.sheet0 col.col11 { width:54.2222216pt }
      table.sheet0 col.col12 { width:54.2222216pt }
      table.sheet0 col.col13 { width:54.2222216pt }
      table.sheet0 col.col14 { width:54.2222216pt }
      table.sheet0 col.col15 { width:0pt }
      table.sheet0 col.col16 { width:0pt }
      table.sheet0 col.col17 { width:0pt }
      table.sheet0 col.col18 { width:0pt }
      table.sheet0 col.col19 { width:0pt }
      table.sheet0 col.col20 { width:0pt }
      table.sheet0 col.col21 { width:0pt }
      table.sheet0 col.col22 { width:0pt }
      table.sheet0 col.col23 { width:0pt }
      table.sheet0 col.col24 { width:0pt }
      table.sheet0 col.col25 { width:0pt }
      table.sheet0 col.col26 { width:0pt }
      table.sheet0 col.col27 { width:0pt }
      table.sheet0 col.col28 { width:0pt }
      table.sheet0 col.col29 { width:0pt }
      table.sheet0 col.col30 { width:54.2222216pt }
      table.sheet0 .column15 { visibility:collapse; display:none }
      table.sheet0 .column16 { visibility:collapse; display:none }
      table.sheet0 .column17 { visibility:collapse; display:none }
      table.sheet0 .column18 { visibility:collapse; display:none }
      table.sheet0 .column19 { visibility:collapse; display:none }
      table.sheet0 .column20 { visibility:collapse; display:none }
      table.sheet0 .column21 { visibility:collapse; display:none }
      table.sheet0 .column22 { visibility:collapse; display:none }
      table.sheet0 .column23 { visibility:collapse; display:none }
      table.sheet0 .column24 { visibility:collapse; display:none }
      table.sheet0 .column25 { visibility:collapse; display:none }
      table.sheet0 .column26 { visibility:collapse; display:none }
      table.sheet0 .column27 { visibility:collapse; display:none }
      table.sheet0 .column28 { visibility:collapse; display:none }
      table.sheet0 .column29 { visibility:collapse; display:none }
      table.sheet0 .column30 { visibility:collapse; display:none }
      table.sheet0 tr { height:12.75pt }
      table.sheet0 tr.row0 { height:15.75pt }
      table.sheet0 tr.row1 { height:13.5pt }
      table.sheet0 tr.row4 { height:13.5pt }
      table.sheet0 tr.row5 { height:13.5pt }
      table.sheet0 tr.row7 { height:13.5pt }
      table.sheet0 tr.row8 { height:13.5pt }
      table.sheet0 tr.row10 { height:13.5pt }
      table.sheet0 tr.row11 { height:13.5pt }
      table.sheet0 tr.row14 { height:15pt }
      table.sheet0 tr.row15 { height:15pt }
      table.sheet0 tr.row17 { height:13.5pt }
      table.sheet0 tr.row18 { height:13.5pt }
      table.sheet0 tr.row20 { height:13.5pt }
      table.sheet0 tr.row21 { height:13.5pt }
      table.sheet0 tr.row23 { height:13.5pt }
      table.sheet0 tr.row24 { height:15pt }
      table.sheet0 tr.row25 { height:15.75pt }
      table.sheet0 tr.row26 { height:13.5pt }
      table.sheet0 tr.row27 { height:13.5pt }
      table.sheet0 tr.row28 { height:13.5pt }
      table.sheet0 tr.row29 { height:13.5pt }
      table.sheet0 tr.row30 { height:13.5pt }
      table.sheet0 tr.row32 { height:13.5pt }
      table.sheet0 tr.row33 { height:13.5pt }
      table.sheet0 tr.row35 { height:13.5pt }
      table.sheet0 tr.row40 { height:13.5pt }
    </style>
  </head>

  <body>
<style>
@page { margin-left: 0.7in; margin-right: 0.7in; margin-top: 0.75in; margin-bottom: 0.75in; }
/* body { margin-left: 0.7in; margin-right: 0.7in; margin-top: 0.75in; margin-bottom: 0.75in; } */
</style>

<center> 
<form id="insformComp">
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
        <col class="col12">
        <col class="col13">
        <col class="col14">
        <col class="col15">
        <col class="col16">
        <col class="col17">
        <col class="col18">
        <col class="col19">
        <col class="col20">
        <col class="col21">
        <col class="col22">
        <col class="col23">
        <col class="col24">
        <col class="col25">
        <col class="col26">
        <col class="col27">
        <col class="col28">
        <col class="col29">
        <col class="col30">
        <tbody>
          <tr class="row0">
            <td class="column0">&nbsp;</td>
            <td class="column1 style1 null style1" colspan="13"></td>
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27 style3 n">1</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row1">
            <td class="column0">&nbsp;</td>
            <td class="column1 style4 s style5" colspan="2">Instrucciones: </td>
            <td class="column3 style6 s style8" colspan="11">Marque la calificación que corresponda al desempeño de cada punto con base a fundamentos, datos y hechos, favor de no omitir ningún inciso.</td>
            
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27 style3 n">2</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row2">
            <td class="column0">&nbsp;</td>
            <td class="column1 style10 null style10" colspan="13"></td>
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27 style3 n">3</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row3">
            <td class="column0">&nbsp;</td>
            <td class="column1 style11 s">1: No Cumple</td>
            <td class="column2 style11 null"></td>
            <td class="column3 style11 s">2: Cumple Medianamente</td>
            <td class="column4 style11 null"></td>
            <td class="column5 style11 null"></td>
            <td class="column6 style11 s">3: Cumple Satisfactoriamente</td>
            <td class="column7 style11 null"></td>
            <td class="column8 style11 null"></td>
            <td class="column9 style11 s">4: Cumple y Excede</td>
            <td class="column10 style11 null"></td>
            <td class="column11 style11 s">N/A (0): No Aplica</td>
            <td class="column12 style11 null"></td>
            <td class="column13">&nbsp;</td>
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27 style3 n">4</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row4">
            <td class="column0">&nbsp;</td>
            <td class="column1 style1 null style1" colspan="13"></td>
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27 style3 n">0</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row5">
            <td class="column0">&nbsp;</td>
            <td class="column1 style12 s style14" colspan="13">SERVICIO AL CLIENTE</td>
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row6">
            <td class="column0">&nbsp;</td>
            <td class="column1 style25 n">1</td>
            <td class="column2 style16 s style18" colspan="10">Realiza su trabajo con enfoque de empatía hacia sus clientes (Internos o Externos)</td>
            <td class="column12 style19 null style20" colspan="2">
            <select type="text" name="InpServClienteUno" id="InpServClienteUno">
            <?php if ($resultss > 0) { 
              if ($sc_uno == '0') { ?>
              <option value="0">0: No Aplica</option>
            <?php } 
            elseif ($sc_uno == '1') { ?>
              <option value="1">1: No Cumple</option>
            <?php } 
            elseif ($sc_uno == '2') { ?>
              <option value="2">2: Cumple Medianamente</option>
            <?php } 
            elseif ($sc_uno == '3') { ?>
              <option value="3">3: Cumple Satisfactoriamente</option>
            <?php } 
            else { ?>
              <option value="4">4: Cumple y Excede</option>
            <?php } 
            }?>

<?php if ($resultss > 0) { } else { ?><option value="">Selecciona</option> <?php } ?>
                            <option value="1">1: No Cumple</option>
              <option value="2">2: Cumple Medianamente</option>
              <option value="3">3: Cumple Satisfactoriamente</option>
              <option value="4">4: Cumple y Excede</option>
            </select>   </td>
            
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row7">
            <td class="column0">&nbsp;</td>
            <td class="column1 style25 n">2</td>
            <td class="column2 style22 s style24" colspan="10">Demuestra actitud de servicio superando frecuentemente su desempeño requerido, generando valor agregado.</td>
            <td class="column3 style19 null style20" colspan="2">
            <select type="text" name="InpServClienteDos" id="InpServClienteDos">
            <?php if ($resultss > 0) { 
              if ($sc_dos == '0') { ?>
              <option value="0">0: No Aplica</option>
            <?php } 
            elseif ($sc_dos == '1') { ?>
              <option value="1">1: No Cumple</option>
            <?php } 
            elseif ($sc_dos == '2') { ?>
              <option value="2">2: Cumple Medianamente</option>
            <?php } 
            elseif ($sc_dos == '3') { ?>
              <option value="3">3: Cumple Satisfactoriamente</option>
            <?php } 
            else { ?>
              <option value="4">4: Cumple y Excede</option>
            <?php } 
            }?>

<?php if ($resultss > 0) { } else { ?><option value="">Selecciona</option> <?php } ?>
                            <option value="1">1: No Cumple</option>
              <option value="2">2: Cumple Medianamente</option>
              <option value="3">3: Cumple Satisfactoriamente</option>
              <option value="4">4: Cumple y Excede</option>
            </select>  </td>
            
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row8">
            <td class="column0">&nbsp;</td>
            <td class="column1 style12 s style14" colspan="13">COMPROMISO Y VALOR AGREGADO</td>
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row9">
            <td class="column0">&nbsp;</td>
            <td class="column1 style25 n">3</td>
            <td class="column2 style16 s style18" colspan="10">Es eficaz al afrontar situaciones y problemas frecuentes.</td>
            <td class="column12 style19 null style20" colspan="2">
            <select type="text" name="InpCompValAgreUno" id="InpCompValAgreUno">
            <?php if ($resultss > 0) { 
              if ($cva_uno == '0') { ?>
              <option value="0">0: No Aplica</option>
            <?php } 
            elseif ($cva_uno == '1') { ?>
              <option value="1">1: No Cumple</option>
            <?php } 
            elseif ($cva_uno == '2') { ?>
              <option value="2">2: Cumple Medianamente</option>
            <?php } 
            elseif ($cva_uno == '3') { ?>
              <option value="3">3: Cumple Satisfactoriamente</option>
            <?php } 
            else { ?>
              <option value="4">4: Cumple y Excede</option>
            <?php } 
            }?>

<?php if ($resultss > 0) { } else { ?><option value="">Selecciona</option> <?php } ?>
                            <option value="1">1: No Cumple</option>
              <option value="2">2: Cumple Medianamente</option>
              <option value="3">3: Cumple Satisfactoriamente</option>
              <option value="4">4: Cumple y Excede</option>
            </select>  </td>
            
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row10">
            <td class="column0">&nbsp;</td>
            <td class="column1 style26 n">4</td>
            <td class="column2 style22 s style24" colspan="10">Realiza sus funciones y deberes propios del cargo sin que se requiera supervisión permanente.</td>
            <td class="column12 style19 null style20" colspan="2">
            <select type="text" name="InpCompValAgreDos" id="InpCompValAgreDos">
            <?php if ($resultss > 0) { 
              if ($cva_dos == '0') { ?>
              <option value="0">0: No Aplica</option>
            <?php } 
            elseif ($cva_dos == '1') { ?>
              <option value="1">1: No Cumple</option>
            <?php } 
            elseif ($cva_dos == '2') { ?>
              <option value="2">2: Cumple Medianamente</option>
            <?php } 
            elseif ($cva_dos == '3') { ?>
              <option value="3">3: Cumple Satisfactoriamente</option>
            <?php } 
            else { ?>
              <option value="4">4: Cumple y Excede</option>
            <?php } 
            }?>

<?php if ($resultss > 0) { } else { ?><option value="">Selecciona</option> <?php } ?>
                            <option value="1">1: No Cumple</option>
              <option value="2">2: Cumple Medianamente</option>
              <option value="3">3: Cumple Satisfactoriamente</option>
              <option value="4">4: Cumple y Excede</option>
            </select>  </td>
            
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row10">
            <td class="column0">&nbsp;</td>
            <td class="column1 style26 n">4</td>
            <td class="column2 style22 s style24" colspan="10">Da cumplimiento con las actividades en tiempo y forma</td>
            <td class="column12 style19 null style20" colspan="2">
            <select type="text" name="InpCompValAgreTres" id="InpCompValAgreTres">
            <?php if ($resultss > 0) { 
              if ($valagre_tres == '0') { ?>
              <option value="0">0: No Aplica</option>
            <?php } 
            elseif ($valagre_tres == '1') { ?>
              <option value="1">1: No Cumple</option>
            <?php } 
            elseif ($valagre_tres == '2') { ?>
              <option value="2">2: Cumple Medianamente</option> 
            <?php } 
            elseif ($valagre_tres == '3') { ?>
              <option value="3">3: Cumple Satisfactoriamente</option>
            <?php } 
            else { ?>
              <option value="4">4: Cumple y Excede</option>
            <?php } 
            }?>

<?php if ($resultss > 0) { } else { ?><option value="">Selecciona</option> <?php } ?>
                            <option value="1">1: No Cumple</option>
              <option value="2">2: Cumple Medianamente</option>
              <option value="3">3: Cumple Satisfactoriamente</option>
              <option value="4">4: Cumple y Excede</option>
            </select>  </td>
            
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row11">
            <td class="column0">&nbsp;</td>
            <td class="column1 style27 s style29" colspan="13">TRABAJO EN EQUIPO y COMUNICACIÓN</td>
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row12">
            <td class="column0">&nbsp;</td>
            <td class="column1 style26 n">5</td>
            <td class="column2 style16 s style18" colspan="10">Soluciona de manera conjunta los problemas comunes de su área.</td>
            <td class="column12 style19 null style20" colspan="2">
            <select type="text" name="InpTrabEquipComunicUno" id="InpTrabEquipComunicUno">
            <?php if ($resultss > 0) { 
              if ($tec_uno == '0') { ?>
              <option value="0">0: No Aplica</option>
            <?php } 
            elseif ($tec_uno == '1') { ?>
              <option value="1">1: No Cumple</option>
            <?php } 
            elseif ($tec_uno == '2') { ?>
              <option value="2">2: Cumple Medianamente</option>
            <?php } 
            elseif ($tec_uno == '3') { ?>
              <option value="3">3: Cumple Satisfactoriamente</option>
            <?php } 
            else { ?>
              <option value="4">4: Cumple y Excede</option>
            <?php } 
            }?>

<?php if ($resultss > 0) { } else { ?><option value="">Selecciona</option> <?php } ?>
                            <option value="1">1: No Cumple</option>
              <option value="2">2: Cumple Medianamente</option>
              <option value="3">3: Cumple Satisfactoriamente</option>
              <option value="4">4: Cumple y Excede</option>
            </select>  </td>
            
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row13">
            <td class="column0">&nbsp;</td>
            <td class="column1 style30 n">6</td>
            <td class="column2 style31 s style33" colspan="10">Trasmite mensajes asertivamente (en tiempo, lugar y forma)</td>
            <td class="column12 style19 null style20" colspan="2">
            <select type="text" name="InpTrabEquipComunicDos" id="InpTrabEquipComunicDos">
            <?php if ($resultss > 0) { 
              if ($tec_dos == '0') { ?>
              <option value="0">0: No Aplica</option>
            <?php } 
            elseif ($tec_dos == '1') { ?>
              <option value="1">1: No Cumple</option>
            <?php } 
            elseif ($tec_dos == '2') { ?>
              <option value="2">2: Cumple Medianamente</option>
            <?php } 
            elseif ($tec_dos == '3') { ?>
              <option value="3">3: Cumple Satisfactoriamente</option>
            <?php } 
            else { ?>
              <option value="4">4: Cumple y Excede</option>
            <?php } 
            }?>

<?php if ($resultss > 0) { } else { ?><option value="">Selecciona</option> <?php } ?>
                            <option value="1">1: No Cumple</option>
              <option value="2">2: Cumple Medianamente</option>
              <option value="3">3: Cumple Satisfactoriamente</option>
              <option value="4">4: Cumple y Excede</option>
            </select> </td>
            
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row13">
            <td class="column0">&nbsp;</td>
            <td class="column1 style30 n">6</td>
            <td class="column2 style31 s style33" colspan="10">Muestra actitud positiva cuando se le da una retroalimentación de su trabajo</td>
            <td class="column12 style19 null style20" colspan="2">
            <select type="text" name="InpTrabEquipComunicCuatro" id="InpTrabEquipComunicCuatro">
            <?php if ($resultss > 0) { 
              if ($valagre_cuatro == '0') { ?>
              <option value="0">0: No Aplica</option>
            <?php } 
            elseif ($valagre_cuatro == '1') { ?>
              <option value="1">1: No Cumple</option>
            <?php } 
            elseif ($valagre_cuatro == '2') { ?>
              <option value="2">2: Cumple Medianamente</option>
            <?php } 
            elseif ($valagre_cuatro == '3') { ?>
              <option value="3">3: Cumple Satisfactoriamente</option>
            <?php } 
            else { ?>
              <option value="4">4: Cumple y Excede</option>
            <?php } 
            }?>

<?php if ($resultss > 0) { } else { ?><option value="">Selecciona</option> <?php } ?>
                            <option value="1">1: No Cumple</option>
              <option value="2">2: Cumple Medianamente</option>
              <option value="3">3: Cumple Satisfactoriamente</option>
              <option value="4">4: Cumple y Excede</option>
            </select> </td>
            
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row14">
            <td class="column0">&nbsp;</td>
            <td class="column1 style30 n">7</td>
            <td class="column2 style22 s style24" colspan="10">Muestra una actitud positiva con sus compañeros, comunicándose con respeto Y trabajando de manera armoniosa</td>
            <td class="column12 style19 null style20" colspan="2">
            <select type="text" name="InpTrabEquipComunicTres" id="InpTrabEquipComunicTres">
            <?php if ($resultss > 0) { 
              if ($tec_tres == '0') { ?>
              <option value="0">0: No Aplica</option>
            <?php } 
            elseif ($tec_tres == '1') { ?>
              <option value="1">1: No Cumple</option>
            <?php } 
            elseif ($tec_tres == '2') { ?>
              <option value="2">2: Cumple Medianamente</option>
            <?php } 
            elseif ($tec_tres == '3') { ?>
              <option value="3">3: Cumple Satisfactoriamente</option>
            <?php } 
            else { ?>
              <option value="4">4: Cumple y Excede</option>
            <?php } 
            }?>

<?php if ($resultss > 0) { } else { ?><option value="">Selecciona</option> <?php } ?>
                            <option value="1">1: No Cumple</option>
              <option value="2">2: Cumple Medianamente</option>
              <option value="3">3: Cumple Satisfactoriamente</option>
              <option value="4">4: Cumple y Excede</option>
            </select> </td>
            
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
          </tr>
          
          <tr class="row18">
            <td class="column0">&nbsp;</td>
            <td class="column1 style12 s style14" colspan="13">PLANEACIÓN Y ORGANIZACIÓN</td>
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row19">
            <td class="column0">&nbsp;</td>
            <td class="column1 style25 n">10</td>
            <td class="column2 style16 s style18" colspan="10">Programa su trabajo afín de cumplir con sus compromisos en cuanto a calidad y plazo.</td>
            <td class="column12 style19 null style20" colspan="2">
            <select type="text" name="InpPlaneaOrganizUno" id="InpPlaneaOrganizUno">
            <?php if ($resultss > 0) { 
              if ($po_uno == '0') { ?>
              <option value="0">0: No Aplica</option>
            <?php } 
            elseif ($po_uno == '1') { ?>
              <option value="1">1: No Cumple</option>
            <?php } 
            elseif ($po_uno == '2') { ?>
              <option value="2">2: Cumple Medianamente</option>
            <?php } 
            elseif ($po_uno == '3') { ?>
              <option value="3">3: Cumple Satisfactoriamente</option>
            <?php } 
            else { ?>
              <option value="4">4: Cumple y Excede</option>
            <?php } 
            }?>

<?php if ($resultss > 0) { } else { ?><option value="">Selecciona</option> <?php } ?>
                            <option value="1">1: No Cumple</option>
              <option value="2">2: Cumple Medianamente</option>
              <option value="3">3: Cumple Satisfactoriamente</option>
              <option value="4">4: Cumple y Excede</option>
            </select> </td>
            
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row20">
            <td class="column0">&nbsp;</td>
            <td class="column1 style30 n">11</td>
            <td class="column2 style22 s style24" colspan="10">Administra de manera efectiva los recursos con los cuales cuenta, evitando desperdicios de cualquier índole.</td>
            <td class="column12 style19 null style20" colspan="2">
            <select type="text" name="InpPlaneaOrganizDos" id="InpPlaneaOrganizDos">
            <?php if ($resultss > 0) { 
              if ($po_dos == '0') { ?>
              <option value="0">0: No Aplica</option>
            <?php } 
            elseif ($po_dos == '1') { ?>
              <option value="1">1: No Cumple</option>
            <?php } 
            elseif ($po_dos == '2') { ?>
              <option value="2">2: Cumple Medianamente</option>
            <?php } 
            elseif ($po_dos == '3') { ?>
              <option value="3">3: Cumple Satisfactoriamente</option>
            <?php } 
            else { ?>
              <option value="4">4: Cumple y Excede</option>
            <?php } 
            }?>

<?php if ($resultss > 0) { } else { ?><option value="">Selecciona</option> <?php } ?>
                            <option value="1">1: No Cumple</option>
              <option value="2">2: Cumple Medianamente</option>
              <option value="3">3: Cumple Satisfactoriamente</option>
              <option value="4">4: Cumple y Excede</option>
            </select> </td>
            
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
          </tr>
          
          <tr class="row24">
            <td class="column0">&nbsp;</td>
            <td class="column1 style1 null style1" colspan="13"></td>
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row25">
            <td class="column0">&nbsp;</td>
            <td class="column1 style39 s style41" colspan="13">PARAMETRO DE EVALUACIÓN</td>
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
          </tr> 
          <tr class="row26">
            <td class="column0">&nbsp;</td>
            <td class="column1 style42 s style1" colspan="4">0-11 Pts, Desempeño Malo</td>
            <td class="column5 style43 s style45" colspan="3">12 - 22 Pts, Desempeño Regular</td>
            <td class="column8 style43 s style45" colspan="3">23-36 Pts, Desempeño Bueno</td>
            <td class="column9 style1 s style46" colspan="3">37 Pts, Desempeño Excelente</td>
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row27">
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
            <td class="column12">&nbsp;</td>
            <td class="column13">&nbsp;</td>
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row28">
            <td class="column0">&nbsp;</td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6 style39 s style41" colspan="4">PUNTAJE OBTENIDO:</td>
           
            <td class="column15 style48 null"></td>
            <td class="column16 style47 null"></td>
            <td class="column17">&nbsp;</td>
            <td class="column18 style47 null"></td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row29">
            <td class="column0">&nbsp;</td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6 style42 f style46" colspan="4"><?php if ($resultss > 0) { echo $puntaje_obtenido; }?></td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
            <td class="column13">&nbsp;</td>
            <td class="column14">&nbsp;</td>
            <td class="column15 style49 null"></td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row30">
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
            <td class="column12">&nbsp;</td>
            <td class="column13">&nbsp;</td>
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row31"> 
            <td class="column0">&nbsp;</td>
            <td class="column1 style50 s style5800" colspan="5" rowspan="2">Nivel de desempeño</td>
            <td class="column6 style5300 f style6100" colspan="8" rowspan="2"><?php if ($resultss > 0) { echo $nivel_de_desempeno; }?></td>
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td> 
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row32">
            <td class="column0">&nbsp;</td>
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
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
            <td class="column12">&nbsp;</td>
            <td class="column13">&nbsp;</td>
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row34">
            <td class="column0">&nbsp;</td>
            <td class="column1 style50 s style67" colspan="6" rowspan="2">Habilidades y características actuales fuertes de la persona:</td>
            <td class="column7 style63 s style70" colspan="7" rowspan="2">Habilidades y características actuales a desarrollar de la persona:</td>
            
            <td class="column15 style66 null"></td>
            <td class="column16 style66 null"></td>
            <td class="column17 style66 null"></td>
            <td class="column18 style66 null"></td>
            <td class="column19 style66 null"></td>
            <td class="column20 style66 null"></td>
            <td class="column21 style66 null"></td>
            <td class="column22 style66 null"></td>
            <td class="column23 style66 null"></td>
            <td class="column24 style66 null"></td>
            <td class="column25 style66 null"></td>
            <td class="column26 style66 null"></td>
            <td class="column27 style66 null"></td>
            <td class="column28 style66 null"></td>
            <td class="column29 style66 null"></td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row35">
            <td class="column0">&nbsp;</td>
       
            <td class="column15 style66 null"></td>
            <td class="column16 style66 null"></td>
            <td class="column17 style66 null"></td>
            <td class="column18 style66 null"></td>
            <td class="column19 style66 null"></td>
            <td class="column20 style66 null"></td>
            <td class="column21 style66 null"></td>
            <td class="column22 style66 null"></td>
            <td class="column23 style66 null"></td>
            <td class="column24 style66 null"></td>
            <td class="column25 style66 null"></td>
            <td class="column26 style66 null"></td>
            <td class="column27 style66 null"></td>
            <td class="column28 style66 null"></td>
            <td class="column29 style66 null"></td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row36">
            <td class="column0">&nbsp;</td>
            <td class="column1 style71 null style82" colspan="6" rowspan="2"><textarea cols="86" rows="6"  name="InpHabCaractActFuerPerso" id="InpHabCaractActFuerPerso" type="text" ><?php if ($resultss > 0) { echo $Hab_caracteristic_act_fuertes_persona; }?></textarea></td>
            <td class="column7 style71 null style83" colspan="7" rowspan="2"><textarea cols="93" rows="6"  name="InpHabCaractActDesaPerson" id="InpHabCaractActDesaPerson" type="text" ><?php if ($resultss > 0) { echo $Hab_característic_act_desarrollar_persona; }?></textarea></td>
      
            <td class="column15 style75 null"></td>
            <td class="column16 style75 null"></td>
            <td class="column17 style75 null"></td>
            <td class="column18 style75 null"></td>
            <td class="column19 style75 null"></td>
            <td class="column20 style75 null"></td>
            <td class="column21 style75 null"></td>
            <td class="column22 style75 null"></td>
            <td class="column23 style75 null"></td>
            <td class="column24 style75 null"></td>
            <td class="column25 style75 null"></td>
            <td class="column26 style75 null"></td>
            <td class="column27 style75 null"></td>
            <td class="column28 style75 null"></td>
            <td class="column29 style75 null"></td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr >
          
          </tr>
          <tr class="row37">
            <td class="column0">&nbsp;</td>
         
            <td class="column15 style75 null"></td>
            <td class="column16 style75 null"></td>
            <td class="column17 style75 null"></td>
            <td class="column18 style75 null"></td>
            <td class="column19 style75 null"></td>
            <td class="column20 style75 null"></td>
            <td class="column21 style75 null"></td>
            <td class="column22 style75 null"></td>
            <td class="column23 style75 null"></td>
            <td class="column24 style75 null"></td>
            <td class="column25 style75 null"></td>
            <td class="column26 style75 null"></td>
            <td class="column27 style75 null"></td>
            <td class="column28 style75 null"></td>
            <td class="column29 style75 null"></td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row38">
            <td class="column0">&nbsp;</td>
         
            <td class="column15 style75 null"></td>
            <td class="column16 style75 null"></td>
            <td class="column17 style75 null"></td>
            <td class="column18 style75 null"></td>
            <td class="column19 style75 null"></td>
            <td class="column20 style75 null"></td>
            <td class="column21 style75 null"></td>
            <td class="column22 style75 null"></td>
            <td class="column23 style75 null"></td>
            <td class="column24 style75 null"></td>
            <td class="column25 style75 null"></td>
            <td class="column26 style75 null"></td>
            <td class="column27 style75 null"></td>
            <td class="column28 style75 null"></td>
            <td class="column29 style75 null"></td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row39">
            <td class="column0">&nbsp;</td>
          
            <td class="column15 style75 null"></td>
            <td class="column16 style75 null"></td>
            <td class="column17 style75 null"></td>
            <td class="column18 style75 null"></td>
            <td class="column19 style75 null"></td>
            <td class="column20 style75 null"></td>
            <td class="column21 style75 null"></td>
            <td class="column22 style75 null"></td>
            <td class="column23 style75 null"></td>
            <td class="column24 style75 null"></td>
            <td class="column25 style75 null"></td>
            <td class="column26 style75 null"></td>
            <td class="column27 style75 null"></td>
            <td class="column28 style75 null"></td>
            <td class="column29 style75 null"></td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row40">
            <td class="column0">&nbsp;</td>
         
            <td class="column15 style75 null"></td>
            <td class="column16 style75 null"></td>
            <td class="column17 style75 null"></td>
            <td class="column18 style75 null"></td>
            <td class="column19 style75 null"></td>
            <td class="column20 style75 null"></td>
            <td class="column21 style75 null"></td>
            <td class="column22 style75 null"></td>
            <td class="column23 style75 null"></td>
            <td class="column24 style75 null"></td>
            <td class="column25 style75 null"></td>
            <td class="column26 style75 null"></td>
            <td class="column27 style75 null"></td>
            <td class="column28 style75 null"></td>
            <td class="column29 style75 null"></td>
            <td class="column30">&nbsp;</td>
          </tr>
          <tr class="row41">
            <td class="column0">&nbsp;</td>
            <input type="hidden" name="id_slack" id="id_slack" value="<?php echo $id_slack ?>">
            <input type="hidden" name="id_user" id="id_user" value="<?php echo $id_user ?>">
            <td class="column15 style84 null"></td>
            <td class="column16 style84 null"></td>
            <td class="column17 style84 null"></td>
            <td class="column18 style84 null"></td>
            <td class="column19 style84 null"></td>
            <td class="column20 style84 null"></td>
            <td class="column21 style84 null"></td>
            <td class="column22 style84 null"></td>
            <td class="column23 style84 null"></td>
            <td class="column24 style84 null"></td>
            <td class="column25 style84 null"></td>
            <td class="column26 style84 null"></td>
            <td class="column27 style84 null"></td>
            <td class="column28 style84 null"></td>
            <td class="column29 style84 null"></td>
            <td class="column30">&nbsp;</td>
          </tr>
        </tbody>
    </table>
</form>
<?php if ($resultss > 0) { ?>
  <center><button id="btnactualizar" name="btnactualizar" class="btn btn-primary" onclick="realizaProcesoActuComp();">Actualizar</button></center> <br>
      <center>

<?php }else{ ?>
<button id="btnguardarcomp" name="btnguardarcomp" class="btn btn-primary" onclick="realizaProcesoComp();">Registrar</button>
<?php } ?>
<span id="resultadocomp"></span>
    </center>
    
  </body>
</html>
<script>
  
function realizaProcesoComp(){
  var datoss = $('#insformComp').serialize();

      
      $.ajax({  
        type: "POST", 
        url: "ins_comp.php", 
        data: datoss,
        beforeSend: function () {
                    $("#resultadocomp").html("Procesando, espere por favor...");
            }, 
            success:  function (responses) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                    $("#resultadocomp").html(responses);
                    alert(responses);
                    if(responses ==="Insertado"){
                      location.reload();
                    }
            }
      });

  };

  function realizaProcesoActuComp(){
  var datoss = $('#insformComp').serialize();

      
      $.ajax({ 
        type: "POST", 
        url: "ins_comp_act.php", 
        data: datoss, 
        beforeSend: function () {
                    $("#resultadocomp").html("Procesando, espere por favor...");
            }, 
            success:  function (responses) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                    $("#resultadocomp").html(responses);
                    alert(responses);
                    if(responses ==="Actualizado"){
                      location.reload();
                    }
            }
      });

  };
  </script> 