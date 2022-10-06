<?php
include "../../conf/conn.php";
$id = $_GET['id'];
$query = ("DELETE FROM pegawai WHERE nomor='$id'");
if(!mysqli_query($con,$query)){
die(mysql_error);
}else{
echo '<script>alert("Data Berhasil Dihapus !!!");
window.location.href="../../pages/halaman/pegawai.php?page=data_pegawai"</script>';
}
?>