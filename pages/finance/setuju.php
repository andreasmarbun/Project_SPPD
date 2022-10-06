<?php  

	include "../../conf/conn.php";

	if(isset($_GET['id'])) {
		$id = $_GET['id'];
		
		$query1 = mysqli_query($con, "UPDATE pegawai SET status=1 WHERE nomor='$id' ");		

		$query2 = mysqli_query($con, "SELECT * FROM pegawai WHERE nomor='$id'");
		
		$row = mysqli_fetch_assoc($query2);

		$query = ("INSERT INTO pegawai(nomor,nip,nama,no_hp,tanggal_berangkat,tanggal_kembali,uang_saku,tujuan,jenis_kendaraan,keperluan) VALUES ('','".$nip."','".$nama."','".$no_hp."','".$tanggal_berangkat."','".$tanggal_kembali."','".$uang_saku."','".$tujuan."','".$jenis_kendaraan."','".$keperluan."')");

		if($query) {
			header("location:../finance/finance.php?page=data_finance");
		} else {
			echo "ada yang salah" . mysqli_error($con);
		}
	}


?>