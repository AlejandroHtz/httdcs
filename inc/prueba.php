<?php
$inpnombreresp = $_POST['inpnombreresp']; 
$marca = $_POST['inpmarca']; 
$modelo = $_POST['inpmodelo']; 
$serial = $_POST['inpserial'];
$inptipo = $_POST['inptipo'];
require('Classes/fpdf.php');


class PDF extends FPDF
{
    
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('img/netsoft.png',160,11,34);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(120);
    // Título
  
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}


// function ImprovedTable($data)
// {
//         $this->setY(31);
//         $this->setX(20);
//         $this->SetFont('Arial','B',8);
//         $this->setY(33);
//         $this->setX(20);
    
//         $this->setY(60);
//         $this->setX(10);
//         $this->SetFont('Arial','B',8);
//          $this->Cell(0,35,"",1);
//         $this->setY(38);
//         $this->setX(20);
      

      
// }


}


// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Cell(307,10,'Fecha________________________',0,0,'C');
$pdf->SetXY(10, 40);
$pdf->SetFont('Arial','',9);
$pdf->Cell(10,20,utf8_decode('Yo, '.$_POST['inpnombreresp'].', recibí de Netsoft el equipo que se menciona a continuación:'),0,0);

$pdf->Ln(20);
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,6,'Equipo',1,0,'C',10);
$pdf->Cell(35,6,'Marca',1,0,'C',1);
$pdf->Cell(75,6,'Modelo',1,0,'C',1);
$pdf->Cell(50,6,'No.Serie',1,0,'C',1);
$pdf->Ln(6);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(25,20,$inptipo,1,0,'C',1);
$pdf->Cell(35,20,$marca,1,0,'C',2);
$pdf->Cell(75,20,$modelo,1,0,'C',3);
$pdf->Cell(50,20,$serial,1,0,'C',3);

$pdf->SetFont('Arial','',9);
$pdf->SetXY(10, 40);
$pdf->Cell(10,110,utf8_decode('El cual me comprometo a cuidar, mantener en buen estado y utilizarla única y exclusivamente para asuntos relacionados con'),0,0);
$pdf->SetXY(10, 45);
$pdf->Cell(10,110,utf8_decode('mi actividad  laboral. En caso  de su extravío,  daño o uso inadecuado,  me responsabilizo a pagar el costo de reparación o la'),0,0);
$pdf->SetXY(10, 50);
$pdf->Cell(10,110,utf8_decode('reposición del equipo.'),0,0);

$pdf->SetXY(10, 80);
$pdf->Cell(10,110,utf8_decode('Nombre y firma del colaborador: __________________________________'),0,0);
// $pdf->ImprovedTable("hola");
$pdf->Output();
?>