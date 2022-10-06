<?php
if(isset($_GET['page'])){

$page = $_GET['page'];

    switch ($page) {
    // Beranda
    case 'data_pegawai':
    include '../../pages/data_pegawai.php';
    break;
    case 'data_laporan':
      include '../../pages/data_laporan.php';
      break;

    case 'tambah_pegawai':
    include '../../pages/pegawai/tambah_pegawai.php';
    break;

    case 'ubah_pegawai';
    include '../../pages/pegawai/ubah_pegawai.php';
    break;

    
    case 'ubah_laporan';
    include '../../pages/pegawai/ubah_laporan.php';
    break;

    


    case 'permintaan_setuju':
      include '../../pages/finance/permintaan_setuju.php';
      break;
    
    case 'data_finance':
      include '../../pages/finance/data_finance.php';
      break;

      case 'permintaan_setuju':
        include '../../pages/finance/permintaan_setuju.php';
        break;
      
    case 'data_manajer':
      include '../../pages/manager/data_manajer.php';
      break;

    case 'pengaturan':
      include '../../pages/pengaturan.php';
      break;

      case 'ubah_password':
        include '../../pages/ubah_password.php';
        break;

      case 'ubah_password_manager':
          include '../../pages/manager/ubah_password_manager.php';
          break;

          case 'ubah_password_finance':
            include '../../pages/finance/ubah_password_finance.php';
            break;

            case 'setuju':
              include '../../pages/pegawai/setuju.php';
              break;

              case 'tidak_setuju':
                include '../../pages/pegawai/tidak_setuju.php';
                break;

                case 'hasil':
                  include '../../pages/pegawai/tambah_hasil.php';
                  break;
  }

}

    else  {
      include "../../pages/beranda.php";
    }
?>