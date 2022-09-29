<?php
		 //Fungsi untuk mencegah inputan karakter yang tidak sesuai
		 function input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		//Cek apakah ada kiriman form dari method post
		if ($_SERVER["REQUEST_METHOD"] == "POST") {

			session_start();
			include "../conf/conn.php";
			$username = input($_POST["username"]);
			$password = input(md5($_POST["password"]));

			$sql = "select * from users where username='".$username."' and password='".$password."' limit 1";
			$hasil = mysqli_query ($con,$sql);
			$jumlah = mysqli_num_rows($hasil);

			if ($jumlah>0) {
				$row = mysqli_fetch_assoc($hasil);
				$_SESSION["id_user"]=$row["id_user"];
				$_SESSION["username"]=$row["username"];
				$_SESSION["nama"]=$row["nama"];
				$_SESSION["nik"]=$row["nik"];
				$_SESSION["jabatan"]=$row["jabatan"];
				$_SESSION["tanggal_bergabung"]=$row["tanggal_bergabung"];
				$_SESSION["status_kerja"]=$row["status_kerja"];
				$_SESSION["level"]=$row["level"];
				$_SESSION["profil"]=$row["profil"];
		
		
				if ($_SESSION["level"]=$row["level"]==1)
				{
					
					header("Location:halaman/pegawai.php");
				} else if ($_SESSION["level"]=$row["level"]==2)
				{
					header("Location:../pages/finance/finance.php");
				}else if ($_SESSION["level"]=$row["level"]==3){
					header("Location:../pages/manager/manajer.php");
				}
		
				
			}else {
				echo "<div class='alert alert-danger'>
				<strong>Error!</strong> Username dan password salah. 
			  </div>";
			}

		}
	
	?>