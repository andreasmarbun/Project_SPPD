<?php
include "../../conf/conn.php";
if($_POST)
{
    $id = $_POST['id'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $tanggal_berangkat = $_POST['tanggal_berangkat'];
    $tanggal_kembali = $_POST['tanggal_kembali'];
    $uang_saku = $_POST['uang_saku'];
    $tujuan = $_POST['tujuan'];
    $jenis_kendaraan = $_POST['jenis_kendaraan'];
    $keperluan = $_POST['keperluan'];

$query = ("UPDATE pegawai SET nip='$nip',nama='$nama',no_hp='$no_hp',tanggal_berangkat='$tanggal_berangkat',tanggal_kembali='$tanggal_kembali',uang_saku='$uang_saku',tujuan='$tujuan',jenis_kendaraan='$jenis_kendaraan',keperluan='$keperluan'  WHERE nomor = '$id'");
if(!mysqli_query($con,$query)){
die(mysql_error);
}
}
?>
