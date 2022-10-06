<?php
if(isset($_GET['page'])){

$page = $_GET['page'];

    switch ($page) {
    // Beranda
    case 'data_pegawai':
    include 'pages/data_pegawai.php';
    break;

    case 'tambah_pegawai':
    include 'pages/pegawai/tambah_pegawai.php';
    break;

    case 'ubah_pegawai';
    include 'pages/pegawai/ubah_pegawai.php';
    break;
    
  }

}

    else  {
      include "pages/beranda.php";
    }
?>