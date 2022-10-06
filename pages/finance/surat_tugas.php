
<?php
 // Define relative path from this script to mPDF
 $dokumen='SURAT TUGAS'; //Nama Dokumen
 require_once "../../mpdf_v8.0.3-master/vendor/autoload.php";
 $mpdf = new \Mpdf\Mpdf();
 // membuat halaman baru
 $mpdf->AddPage();
//Beginning Buffer to save PHP variables and HTML tags
ob_start();
?>
<!--Koding mulai, Anda bisa jalankan kode php,html, css pada baris ini.-->
<?php

include "../../conf/conn.php";


$detail=mysqli_real_escape_string($con, htmlentities($_GET['id']));
$query="SELECT * from pegawai where nomor='$detail'";
$perintah=mysqli_query ($con, $query) 
or die ("Gagal konek".mysqli_error());
$dta_sws=mysqli_fetch_array($perintah);
$dta_id=$dta_sws['id'];
$dta_nama=$dta_sws['nama'];
$dta_nip=$dta_sws['nip'];
$dta_nohp=$dta_sws['no_hp'];
$dta_tujuan=$dta_sws['tujuan'];
$dta_keperluan=$dta_sws['keperluan'];
$dta_kendaraan=$dta_sws['jenis_kendaraan'];
$dta_berangkat=$dta_sws['tanggal_berangkat'];
$dta_kembali=$dta_sws['tanggal_kembali'];
$dta_hasil=$dta_sws['hasil'];
$dta_permasalahan=$dta_sws['permasalahan'];
$dta_saran=$dta_sws['saran'];







?>
<html>
<head>
<title>SURAT TUGAS</title>
</head>
<body>
<table border="0">

<tr>
    <td colspan="2" align="center"><strong><H2><u>SURAT TUGAS PERJALANAN DINAS</u></H2></strong></td>
  </tr>
  <tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
  <tr>
    <td colspan="3" align="left">Yang Bertanda Tangan dibawah ini Kepala Atasan , Dengan ini menugaskan Kepada : </td>
  </tr>
  <tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr> 

    <td width="200">&emsp;&emsp;&emsp;&emsp;Nama</td>
    <td width="406">: <?php echo "$dta_nama"; ?></td>
  </tr>
  <tr>
    <td> &emsp;&emsp;&emsp;&emsp;NIP </td>
    <td>: <?php echo "$dta_nip"; ?></td>
  </tr>
  <tr>
    <td> Tempat Tujuan </td>
    <td>: <?php echo "$dta_tujuan"; ?></td>
  </tr>
  
  <tr>        
    <td>Tanggal Berangkat</td>
    <td>: <?php echo "$dta_berangkat"; ?></td>
  </tr>
  <tr>
    <td> Tanggal Kembali </td>
    <td>: <?php echo "$dta_kembali"; ?></td>
  </tr>
  <tr>        
    <td>Maksud Perjalanan Dinas</td>
    <td>: <?php echo "$dta_keperluan"; ?></td>
  </tr>
  <tr>
    <td> Kendaraan Yang Digunakan </td>
    <td>: <?php echo "$dta_kendaraan"; ?></td>
  </tr>
  <tr>
    <td> Hasil </td>
    <td>: <?php echo "$dta_hasil"; ?></td>
  </tr>
  <tr>
    <td> Permasalahan</td>
    <td>: <?php echo "$dta_permasalahan"; ?></td>
  </tr>
  <tr>
    <td> SARAN </td>
    <td>: <?php echo "$dta_saran"; ?></td>
  </tr>
  <tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
  <tr>
    <td colspan="2" align="left">Demikianlah Surat Tugas ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagaimana semestinya </td>
  </tr>


  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
 
</table>
</body>
</html>
<?php
//batas kodingan 
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);


$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>