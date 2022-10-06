<?php  

include "../../conf/conn.php";

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	

	$query = mysqli_query($con, "UPDATE pegawai SET status=2 WHERE nomor='$id' ");

	if($query) {
		header("location:../halaman/pegawai.php?page=data_pegawai");
	} else {
		echo "error : " . mysqli_error($con);
	}
}


?>