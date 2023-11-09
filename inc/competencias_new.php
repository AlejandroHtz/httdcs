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
            <td class="column1 style12 s style14" colspan="13">TRABAJO EN EQUIPO</td>
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
            <td class="column2 style16 s style18" colspan="10">El colaborador cuando tiene reuniones con su equipo muestra una actitud positiva alentando y
fomentando la integración de su equipo ante dificultades.</td>
            <td class="column12 style19 null style20" colspan="2">
            <select type="text" name="InpTrabEquipoUno" id="InpTrabEquipoUno">
            <?php if ($resultss > 0) { 
              if ($te_uno == '0') { ?> 
              <option value="0">0: No Aplica</option>
            <?php } 
            elseif ($te_uno == '1') { ?>
              <option value="1">1: No Cumple</option>
            <?php } 
            elseif ($te_uno == '2') { ?>
              <option value="2">2: Cumple Medianamente</option>
            <?php } 
            elseif ($te_uno == '3') { ?>
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
            <td class="column2 style22 s style24" colspan="10">Apoya en el desempeño de otros departamentos y da su punto de vista a favor de que se cumpla
con el objetivo.</td>
            <td class="column3 style19 null style20" colspan="2">
            <select type="text" name="InpTrabEquipoDos" id="InpTrabEquipoDos">
            <?php if ($resultss > 0) { 
              if ($te_dos == '0') { ?>
              <option value="0">0: No Aplica</option>
            <?php } 
            elseif ($te_dos == '1') { ?>
              <option value="1">1: No Cumple</option>
            <?php } 
            elseif ($te_dos == '2') { ?>
              <option value="2">2: Cumple Medianamente</option>
            <?php } 
            elseif ($te_dos == '3') { ?>
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
          <tr class="row7">
            <td class="column0">&nbsp;</td>
            <td class="column1 style25 n">3</td>
            <td class="column2 style22 s style24" colspan="10">En las reuniones escucha a los demás integrantes del equipo y resuelve los conflictos de su
equipo.</td>
            <td class="column3 style19 null style20" colspan="2">
            <select type="text" name="InpTrabEquipoTres" id="InpTrabEquipoTres">
            <?php if ($resultss > 0) { 
              if ($te_tres == '0') { ?>
              <option value="0">0: No Aplica</option>
            <?php } 
            elseif ($te_tres == '1') { ?>
              <option value="1">1: No Cumple</option>
            <?php } 
            elseif ($te_tres == '2') { ?>
              <option value="2">2: Cumple Medianamente</option>
            <?php } 
            elseif ($te_tres == '3') { ?>
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
            <td class="column1 style12 s style14" colspan="13">CENTRADO EN EL CLIENTE</td>
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
            <td class="column1 style25 n">4</td>
            <td class="column2 style16 s style18" colspan="10">El cliente externo manda un correo electrónico o comunica directamente con el líder inmediato
sobre el éxito demostrado por el colaborador.</td>
            <td class="column12 style19 null style20" colspan="2">
            <select type="text" name="InpCentClienteUno" id="InpCentClienteUno">
            <?php if ($resultss > 0) { 
              if ($cec_uno == '0') { ?>
              <option value="0">0: No Aplica</option>
            <?php } 
            elseif ($cec_uno == '1') { ?>
              <option value="1">1: No Cumple</option>
            <?php } 
            elseif ($cec_uno == '2') { ?>
              <option value="2">2: Cumple Medianamente</option>
            <?php } 
            elseif ($cec_uno == '3') { ?>
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
            <td class="column1 style26 n">5</td>
            <td class="column2 style22 s style24" colspan="10">Indaga e informa sobre las necesidades actuales y potenciales de clientes internos, externos y
proveedores.</td>
            <td class="column12 style19 null style20" colspan="2">
            <select type="text" name="InpCentClienteDos" id="InpCentClienteDos">
            <?php if ($resultss > 0) { 
              if ($cec_dos == '0') { ?>
              <option value="0">0: No Aplica</option>
            <?php } 
            elseif ($cec_dos == '1') { ?>
              <option value="1">1: No Cumple</option>
            <?php } 
            elseif ($cec_dos == '2') { ?>
              <option value="2">2: Cumple Medianamente</option>
            <?php } 
            elseif ($cec_dos == '3') { ?>
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
            <td class="column1 style26 n">6</td>
            <td class="column2 style22 s style24" colspan="10">Comunica al cliente (sin necesidad de que el cliente se lo solicite o realice una llamada) sobre el
conocimiento del proceso, etapas e información de los resultados positivos como negativos.</td>
            <td class="column12 style19 null style20" colspan="2">
            <select type="text" name="InpCentClienteTres" id="InpCentClienteTres">
            <?php if ($resultss > 0) { 
              if ($cec_tres == '0') { ?>
              <option value="0">0: No Aplica</option>
            <?php } 
            elseif ($cec_tres == '1') { ?>
              <option value="1">1: No Cumple</option>
            <?php } 
            elseif ($cec_tres == '2') { ?>
              <option value="2">2: Cumple Medianamente</option> 
            <?php } 
            elseif ($cec_tres == '3') { ?>
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
            <td class="column1 style27 s style29" colspan="13">INTEGRIDAD</td>
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
            <td class="column1 style26 n">7</td>
            <td class="column2 style16 s style18" colspan="10">Sus acciones son congruentes con lo que dice.</td>
            <td class="column12 style19 null style20" colspan="2">
            <select type="text" name="InpIntegridadUno" id="InpIntegridadUno">
            <?php if ($resultss > 0) { 
              if ($i_uno == '0') { ?>
              <option value="0">0: No Aplica</option>
            <?php } 
            elseif ($i_uno == '1') { ?>
              <option value="1">1: No Cumple</option>
            <?php } 
            elseif ($i_uno == '2') { ?>
              <option value="2">2: Cumple Medianamente</option>
            <?php } 
            elseif ($i_uno == '3') { ?>
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
            <td class="column1 style30 n">8</td>
            <td class="column2 style31 s style33" colspan="10">Establece relaciones laborales o comerciales sobre la base de sus principios y del respeto.</td>
            <td class="column12 style19 null style20" colspan="2">
            <select type="text" name="InpIntegridadDos" id="InpIntegridadDos">
            <?php if ($resultss > 0) { 
              if ($i_dos == '0') { ?>
              <option value="0">0: No Aplica</option>
            <?php } 
            elseif ($i_dos == '1') { ?>
              <option value="1">1: No Cumple</option>
            <?php } 
            elseif ($i_dos == '2') { ?>
              <option value="2">2: Cumple Medianamente</option>
            <?php } 
            elseif ($i_dos == '3') { ?>
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
            <td class="column1 style30 n">9</td>
            <td class="column2 style31 s style33" colspan="10">Sigue las reglas que se ajustan a su criterio ético, y no obedece aquellas que no lo hacen.</td>
            <td class="column12 style19 null style20" colspan="2">
            <select type="text" name="InpIntegridadTres" id="InpIntegridadTres">
            <?php if ($resultss > 0) { 
              if ($i_tres == '0') { ?>
              <option value="0">0: No Aplica</option>
            <?php } 
            elseif ($i_tres == '1') { ?>
              <option value="1">1: No Cumple</option>
            <?php } 
            elseif ($i_tres == '2') { ?>
              <option value="2">2: Cumple Medianamente</option>
            <?php } 
            elseif ($i_tres == '3') { ?>
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
            <td class="column1 style12 s style14" colspan="13">COMPROMISO</td>
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
            <td class="column2 style16 s style18" colspan="10">Diseña y crea herramientas de seguimiento y control de las acciones planeadas, a fin de controlar
la marcha de sus procesos con la finalidad del logro de los objetivos.</td>
            <td class="column12 style19 null style20" colspan="2">
            <select type="text" name="InpCompromisoUno" id="InpCompromisoUno">
            <?php if ($resultss > 0) { 
              if ($c_uno == '0') { ?>
              <option value="0">0: No Aplica</option>
            <?php } 
            elseif ($c_uno == '1') { ?>
              <option value="1">1: No Cumple</option>
            <?php } 
            elseif ($c_uno == '2') { ?>
              <option value="2">2: Cumple Medianamente</option>
            <?php } 
            elseif ($c_uno == '3') { ?>
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
            <td class="column2 style22 s style24" colspan="10">Es reconocido interna y externamente por cumplir siempre con los tiempos de entrega, personales
y profesionales.</td>
            <td class="column12 style19 null style20" colspan="2">
            <select type="text" name="InpCompromisoDos" id="InpCompromisoDos">
            <?php if ($resultss > 0) { 
              if ($c_dos == '0') { ?>
              <option value="0">0: No Aplica</option>
            <?php } 
            elseif ($c_dos == '1') { ?>
              <option value="1">1: No Cumple</option>
            <?php } 
            elseif ($c_dos == '2') { ?>
              <option value="2">2: Cumple Medianamente</option>
            <?php } 
            elseif ($c_dos == '3') { ?>
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
            <td class="column1 style30 n">12</td>
            <td class="column2 style22 s style24" colspan="10">Se mantiene motivado y motiva a sus compañeros de trabajo, para guiar su accionar según los
objetivos pautados.</td>
            <td class="column12 style19 null style20" colspan="2">
            <select type="text" name="InpCompromisoTres" id="InpCompromisoTres">
            <?php if ($resultss > 0) { 
              if ($c_tres == '0') { ?>
              <option value="0">0: No Aplica</option>
            <?php } 
            elseif ($c_tres == '1') { ?>
              <option value="1">1: No Cumple</option>
            <?php } 
            elseif ($c_tres == '2') { ?>
              <option value="2">2: Cumple Medianamente</option>
            <?php } 
            elseif ($c_tres == '3') { ?>
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
            <td class="column1 style12 s style14" colspan="13">EMPATÍA</td>
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
            <td class="column1 style25 n">13</td>
            <td class="column2 style16 s style18" colspan="10">Ante situaciones de desacuerdo con el equipo, observa el punto de vista de los demás antes de
tomar una decisión.</td>
            <td class="column12 style19 null style20" colspan="2">
            <select type="text" name="InpEmpatiaUno" id="InpEmpatiaUno">
            <?php if ($resultss > 0) { 
              if ($e_uno == '0') { ?>
              <option value="0">0: No Aplica</option>
            <?php } 
            elseif ($e_uno == '1') { ?>
              <option value="1">1: No Cumple</option>
            <?php } 
            elseif ($e_uno == '2') { ?>
              <option value="2">2: Cumple Medianamente</option>
            <?php } 
            elseif ($e_uno == '3') { ?>
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
            <td class="column1 style30 n">14</td>
            <td class="column2 style22 s style24" colspan="10">Es reconocido interna y externamente por cumplir siempre con los tiempos de entrega, personales
y profesionales.</td>
            <td class="column12 style19 null style20" colspan="2">
            <select type="text" name="InpEmpatiaDos" id="InpEmpatiaDos">
            <?php if ($resultss > 0) { 
              if ($e_dos == '0') { ?>
              <option value="0">0: No Aplica</option>
            <?php } 
            elseif ($e_dos == '1') { ?>
              <option value="1">1: No Cumple</option>
            <?php } 
            elseif ($e_dos == '2') { ?>
              <option value="2">2: Cumple Medianamente</option>
            <?php } 
            elseif ($e_dos == '3') { ?>
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
            <td class="column1 style30 n">15</td>
            <td class="column2 style22 s style24" colspan="10">Se mantiene motivado y motiva a sus compañeros de trabajo, para guiar su accionar según los
objetivos pautados.</td>
            <td class="column12 style19 null style20" colspan="2">
            <select type="text" name="InpEmpatiaTres" id="InpEmpatiaTres">
            <?php if ($resultss > 0) { 
              if ($e_tres == '0') { ?>
              <option value="0">0: No Aplica</option>
            <?php } 
            elseif ($e_tres == '1') { ?>
              <option value="1">1: No Cumple</option>
            <?php } 
            elseif ($e_tres == '2') { ?>
              <option value="2">2: Cumple Medianamente</option>
            <?php } 
            elseif ($e_tres == '3') { ?>
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
            <td class="column1 style12 s style14" colspan="13">RESPONSABILIDAD</td>
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
            <td class="column1 style25 n">16</td>
            <td class="column2 style16 s style18" colspan="10">Se fija altos objetivos que siempre cumple, autoexigiéndose con plazos y mejorando la calidad del
trabajo o proyecto asignado.</td>
            <td class="column12 style19 null style20" colspan="2">
            <select type="text" name="InpResponsabilidadUno" id="InpResponsabilidadUno">
            <?php if ($resultss > 0) { 
              if ($r_uno == '0') { ?>
              <option value="0">0: No Aplica</option>
            <?php } 
            elseif ($r_uno == '1') { ?>
              <option value="1">1: No Cumple</option>
            <?php } 
            elseif ($r_uno == '2') { ?>
              <option value="2">2: Cumple Medianamente</option>
            <?php } 
            elseif ($r_uno == '3') { ?>
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
            <td class="column1 style30 n">17</td>
            <td class="column2 style22 s style24" colspan="10">Prefiere organizar, en primer lugar, sus tareas, y luego distribuir el tiempo libre que pueda quedar-
le para dedicarse a otras actividades.</td>
            <td class="column12 style19 null style20" colspan="2">
            <select type="text" name="InpResponsabilidadDos" id="InpResponsabilidadDos">
            <?php if ($resultss > 0) { 
              if ($r_dos == '0') { ?>
              <option value="0">0: No Aplica</option>
            <?php } 
            elseif ($r_dos == '1') { ?>
              <option value="1">1: No Cumple</option>
            <?php } 
            elseif ($r_dos == '2') { ?>
              <option value="2">2: Cumple Medianamente</option>
            <?php } 
            elseif ($r_dos == '3') { ?>
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
            <td class="column1 style30 n">18</td>
            <td class="column2 style22 s style24" colspan="10">Antepone el trabajo a las actividades personales, aun sin que se le pida, y evalúa atinadamente
las ocasiones en que se requiere de su esfuerzo extra.</td>
            <td class="column12 style19 null style20" colspan="2">
            <select type="text" name="InpResponsabilidadTres" id="InpResponsabilidadTres">
            <?php if ($resultss > 0) { 
              if ($r_tres == '0') { ?>
              <option value="0">0: No Aplica</option>
            <?php } 
            elseif ($r_tres == '1') { ?>
              <option value="1">1: No Cumple</option>
            <?php } 
            elseif ($r_tres == '2') { ?>
              <option value="2">2: Cumple Medianamente</option>
            <?php } 
            elseif ($r_tres == '3') { ?>
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
            <td class="column1 style42 s style1" colspan="4">18 - 31 Pts, Desempeño Malo</td>
            <td class="column5 style43 s style45" colspan="3">32 - 45 Pts, Desempeño Regular</td>
            <td class="column8 style43 s style45" colspan="3">46 - 59 Pts, Desempeño Bueno</td>
            <td class="column9 style1 s style46" colspan="3">60 - 72 Pts, Desempeño Excelente</td>
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
            <td class="column1 style50 s style67" colspan="6" rowspan="2">Competencias fuertes:</td>
            <td class="column7 style63 s style70" colspan="7" rowspan="2">Competencias a desarrollar a:</td>
            
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
            <td class="column1 style71 null style82" colspan="6" rowspan="2"><textarea cols="86" rows="6"  name="InpCompetencias_fuertes" id="InpCompetencias_fuertes" type="text" ><?php if ($resultss > 0) { echo $competencias_fuertes; }?></textarea></td>
            <td class="column7 style71 null style83" colspan="7" rowspan="2"><textarea cols="93" rows="6"  name="InpCompetencias_desarrollar" id="InpCompetencias_desarrollar" type="text" ><?php if ($resultss > 0) { echo $competencias_desarrollar; }?></textarea></td>
      
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

<?php }else{ ?>

<?php } ?>
<span id="resultadocomp"></span>
    </center>
    
  </body>
</html>
<script>
  

  </script> 