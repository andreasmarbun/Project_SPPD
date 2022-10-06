<?php
include "../../conf/conn.php";
if($_POST)
{
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$tanggal_berangkat = $_POST['tanggal_berangkat'];
$tanggal_kembali = $_POST['tanggal_kembali'];
$uang_saku = $_POST['uang_saku'];
$tujuan = $_POST['tujuan'];
$jenis_kendaraan = $_POST['jenis_kendaraan'];
$keperluan = $_POST['keperluan'];
$query = ("INSERT INTO pegawai(nomor,nip,nama,no_hp,tanggal_berangkat,tanggal_kembali,uang_saku,tujuan,jenis_kendaraan,keperluan) VALUES ('','".$nip."','".$nama."','".$no_hp."','".$tanggal_berangkat."','".$tanggal_kembali."','".$uang_saku."','".$tujuan."','".$jenis_kendaraan."','".$keperluan."')");
if(!mysqli_query($con,$query)){
die(mysql_error);
}else{
echo '<script>alert("Data Berhasil Ditambahkan !!!");
window.location.href="../../pages/halaman/pegawai.php?pages=data_pegawai"</script>';
}
}
?>