<?php 
/*Sisipkan file untuk koneksi ke database*/
include "../../conf/conn.php";
/*
Buat Variable dari data yang dikirim sebelumnya
trim() merupakan fungsi untuk menghilangkan spasi sebelum dan sesudah string
strip_tags() merupakan fungsi php untuk memfilter dan menghilangkan tags html jika ada yang memasukan tag html
*/
$id = strip_tags(trim($_POST['id'])); 
$nip = strip_tags(trim($_GET['nip'])); 
$nama = strip_tags(trim($_POST['nama'])); 
$no_hp = strip_tags(trim($_POST['no_hp'])); 
$tanggal_berangkat = strip_tags(trim($_POST['tanggal_berangkat'])); 
$tanggal_kembali = strip_tags(trim($_POST['tanggal_kembali'])); 
$uang_saku = strip_tags(trim($_POST['uang_saku'])); 
$tujuan = strip_tags(trim($_POST['tujuan'])); 
$jenis_kendaraan = strip_tags(trim($_POST['jenis_kendaraan'])); 
$keperluan = strip_tags(trim($_POST['keperluan'])); 

/*Cek Apakah semua data sudah di isi
	Jika tidak diisi
*/
$query = "SELECT * from pegawai";
$row = mysql_query($query);
$b = mysql_fetch_array($row);

if($tujuan == '') {
	echo "<script>alert('Tanggal Harus Diisi dengan Bener');self.history.back()</script>";
}	
else {
	/*Dibawah ini proses update ke dalam database */
	$pegawai = "UPDATE pegawai SET status = 'Y' WHERE nip = '$_GET[id]'";
	//echo $update;
	//exit;
	$sukses = mysqli_query($pegawai);
	
	if($sukses){

		echo "<script>alert('Data dengan NIK :".$_GET['id']." Telah Berhasil di Approve')</script>";
		/*Setelah proses update selesai data di kembalikan ke view_canggota*/
		//header('location:admin.php');
		echo "<script>window.location='pages/maanger/manajer.php?page=data_manajer'</script>";
	}
	else
	{
		echo "Gagal diapprove";
	}
}
?>