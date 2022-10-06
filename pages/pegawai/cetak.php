<?php
// memanggil library FPDF
require ("../../fpdf16/fpdf.php");
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'daftarrrrrrrrrrr',0,1,'C');
$pdf->SetFont('Arial','B',19);
$pdf->Cell(190,7,'DAFTAR REKAYASA PERANGKAT LUNAK',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(27,6,'nip',1,0);
$pdf->Cell(44,6,'nama',1,0);
$pdf->Cell(27,6,'no_hp',1,0);
$pdf->Cell(27,6,'tanggal_berangkat',1,0);
$pdf->Cell(27,6,'tanggal_kembali',1,0);
$pdf->Cell(27,6,'uang_saku',1,0);
$pdf->Cell(27,6,'tujuan',1,0);
$pdf->Cell(27,6,'jenis_kendaraan',1,0);
$pdf->Cell(30,6,'keperluan',1,1);


$pdf->SetFont('Arial','',10);

include "../../conf/conn.php";
$pegawai = mysqli_query($con , "SELECT * FROM pegawai WHERE nomor='".$_GET['id']."'");
while ($row = mysqli_fetch_array($pegawai)){
    $pdf->Cell(27,6,$row['nip'],1,0);
    $pdf->Cell(44,6,$row['nama'],1,0);
    $pdf->Cell(27,6,$row['no_hp'],1,0);
    $pdf->Cell(27,6,$row['tanggal_berangkat'],1,0); 
    $pdf->Cell(27,6,$row['tanggal_kembali'],1,0);
    $pdf->Cell(27,6,$row['uang_saku'],1,0);
    $pdf->Cell(27,6,$row['tujuan'],1,0);
    $pdf->Cell(27,6,$row['jenis_kendaraan'],1,0);
    $pdf->Cell(30,6,$row['keperluan'],1,1);
    
}


$pdf->Output();
?>