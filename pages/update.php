<?php

require_once "../conf/conn.php";

$passwordlama = $_POST['passwordlama'];

$passwordbaru = $_POST['passwordbaru'];

$konfirmasipassword = $_POST['konfirmasipassword'];

$username = $_POST['username'];

$cekuser = "SELECT * from users where username = '$username' and password = '$passwordlama'";

$querycekuser = mysqli_query($con, $cekuser);

$count = mysqli_num_rows($querycekuser);

if ($count >= 1){

$updatepassword = "UPDATE users set password = '$passwordbaru' where username = '$username'";

$updatequery = mysqli_query($updatepassword);

if($updatequery)

{

"Password telah diganti menjadi $passwordbaru";

}

}

?>