<?php
// memanggil library FPDF
require ("../../fpdf16/fpdf.php");
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A4');
// membuat halaman baru
$pdf->AddPage();
$pdf->SetFont('Arial','B',19);
$pdf->Cell(250,7,'LAPORAN PERJALANAN DINAS',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Ln();
$pdf->Cell(100,30,'NAMA',0,1,'C');



$pdf->SetFont('Arial','',10);

include "../../conf/conn.php";
$pegawai = mysqli_query($con , "SELECT * FROM pegawai WHERE nomor='".$_GET['id']."'");
while ($row = mysqli_fetch_array($pegawai)){
    $pdf->Cell(100,30,$row['nama'],0,1,'C');
    
    
}


$pdf->Output();
?>