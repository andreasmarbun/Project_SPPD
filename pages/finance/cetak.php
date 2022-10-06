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
<title>LAPORAN</title>
</head>
<body>
<table border="0">

</tr>
  <tr>
    <td colspan="1" align="left">Kepada Yth</td>
  </tr>
  <tr>
    <td colspan="2" align="left">Bapak Manager</td>

  </tr>
  <tr>
    <td colspan="1" align="left">ditempat</td>
  </tr>

<tr>
    <td colspan="5" align="center"><strong><H2><u>LAPORAN HASIL PERJALANAN DINAS</u></H2></strong></td>
  </tr>
  <tr>
  <td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
    <td width="300">&emsp;&emsp;&emsp;1. Nama</td>
    <td width="406">: <?php echo "$dta_nama"; ?></td>
  </tr>
  <tr>
  <td>&nbsp;</td>
</tr>
   <tr>
    <td>&emsp;&emsp;&emsp;2.Tempat Tujuan </td>
    <td>: <?php echo "$dta_tujuan"; ?></td>
  </tr>
  <tr>
  <td>&emsp;</td>
</tr>
  <tr>
    <td>&emsp;&emsp;&emsp;3. NIP </td>
    <td>: <?php echo "$dta_nip"; ?></td>
  </tr>
  <tr>
  <td>&emsp;</td>
</tr>
  <tr>        
    <td>&emsp;&emsp;&emsp;4. Tanggal Pelaksanaan Tugas </td>
    <td>: <?php echo "$dta_berangkat"; ?></td>
  </tr>
  <tr>
  <td>&emsp;</td>
</tr>
  <tr>
    <td>&emsp;&emsp;&emsp;5. Tanggal Kembali </td>
    <td>: <?php echo "$dta_kembali"; ?></td>
  </tr>
  <tr>
  <td>&emsp;</td>
</tr>
  <tr>        
    <td>&emsp;&emsp;&emsp;6. Tugas Yang Dilaksanakan</td>
    <td>: <?php echo "$dta_keperluan"; ?></td>
  </tr>
  <tr>
  <td>&emsp;</td>
</tr>
  <tr>
    <td>&emsp;&emsp;&emsp;7. Lokasi </td>
    <td>: <?php echo "$dta_kendaraan"; ?></td>
  </tr>
  <tr>
  <td>&emsp;</td>
</tr>
  <tr>
    <td>&emsp;&emsp;&emsp;8. Tempat Tujuan </td>
    <td>: <?php echo "$dta_tujuan"; ?></td>
  </tr>
  <tr>
    <td>&emsp;&emsp;&emsp;9. Hasil </td>
    <td>: <?php echo "$dta_hasil"; ?></td>
  </tr><tr>
    <td>&emsp;&emsp;&emsp;10. Permasalahan </td>
    <td>: <?php echo "$dta_permasalahan"; ?></td>
  </tr>
  <tr>
    <td>&emsp;&emsp;&emsp;11. saran </td>
    <td>: <?php echo "$dta_tujuan"; ?></td>
  </tr>
  
  
  <tr>
  <td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
  <tr>
    <td colspan="3" align="right">tanda tangan</td>
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