<?php
require("pdfjs.php");
require("functIn2.php");
date_default_timezone_set('America/Bogota');
extract($_POST);

/********************* CONSTRUIMOS LA FACTURA **********************************/
$pdf = new PDF_AutoPrint();
$pdf->SetFont('courier','',8);
$pdf->SetAutoPageBreak(true, 1);
$pdf->SetLeftMargin(1);
$pdf->SetTopMargin(2);
$pdf->AddPage('P', array(65,65));

    /*CABECERA DE LA FACTURA (FIJA)*/
$pdf->SetFont('Courier', 'B', 14);
$pdf->Cell(0,4,"PARQUEADERO FORERO PAEZ",0);
$pdf->Ln();
$pdf->SetFont('Courier', '', 6);
$pdf->Cell(0,5,"Leidy Johana Forero Paez. - Nit. #.###.###.###-#",0);
$pdf->Ln(3);
$pdf->SetFont('Courier', '', 7);
$pdf->Cell(0,5,"Direccion - Cel. ##########",0);
$pdf->Ln(3);
$pdf->Cell(20,5,"Atendido por:",0);
$pdf->SetFont('Courier', 'B', 7);
$pdf->Cell(25,5,"########## #######",0);
    /******************************/

$pdf->Ln();
$pdf->SetFont('Courier', '', 10);
$pdf->Cell(31,5,"Placa: ",0);
$pdf->Cell(32,5,$placa2,0);
$pdf->Ln(3);
$pdf->Cell(31,5,"Hora Entrada: ",0);
$pdf->Cell(32,5,$horai,0);
$pdf->Ln(3);
$pdf->Cell(31,5,"Hora Salida: ",0);
$pdf->Cell(32,5,date("H:i:s", time()),0);
$pdf->Ln(3);
$pdf->Cell(31,5,"Fecha Entrada: ",0);
$pdf->Cell(32,5,$fechai,0);
$pdf->Ln(3);
$pdf->Cell(31,5,"Fecha: ",0);
$pdf->Cell(32,5,date('Y-m-d'),0);
$pdf->Ln(3);
$pdf->Cell(31,5,"Total a Pagar: ",0);
$pdf->Cell(32,5,$pago,0);
$pdf->Ln(3);
$pdf->SetFont('Courier', 'B', 11);
$pdf->Cell(2,10,"",0);
$pdf->Cell(31,10,"GRACIAS POR SU VISITA!!",0);
$pdf->Output("factura-parking.pdf","I");

#$pdf->AutoPrint(true);
#$pdf->Output();
factent2($placa2, $estado, $horai, $horas, $pago, $cascos, $fechai, $fechas, $diario2, $tipo);
          #se agrego la variable tipo como parametro
#header("refresh: 2; url=../ConsultaPlaca.php");
?>
