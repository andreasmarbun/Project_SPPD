<?php
include "../conf/conn.php";
if($_POST)
{
    $password = $_POST['password'];

$query = ("UPDATE pegawai SET password='$password' WHERE id_user = '$id_user'");
if(!mysqli_query($con,$query)){
die(mysql_error);
}else{
echo '<script>alert("Data Berhasil Diubah !!!");
window.location.href="../../pages/halaman/pegawai.php?page=data_pegawai"</script>';
}
}
?>
