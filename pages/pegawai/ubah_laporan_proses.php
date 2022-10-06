<?php
include "../../conf/conn.php";
if($_POST)
{
    $id = $_POST['id'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $hasil = $_POST['hasil'];
    $permasalahan = $_POST['permasalahan'];
    $saran = $_POST['saran'];



$query = ("UPDATE pegawai SET nip='$nip',nama='$nama',hasil='$hasil',permasalahan='$permasalahan',saran='$saran'  WHERE nomor = '$id'");
if(!mysqli_query($con,$query)){
die(mysql_error);
}else{
echo '<script>
window.location.href="../../pages/halaman/pegawai.php?page=data_laporan"</script>';
}
}
?>
