<?php
include "../../conf/conn.php";
$query = mysqli_query($con , "SELECT * FROM pegawai WHERE nomor='".$_GET['id']."'");
$row = mysqli_fetch_array($query);
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      UBAH PEGAWAI
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">UBAH PEGAWAI</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="../../pages/pegawai/ubah_laporan_proses.php">
              <div class="box-body">
              <input type="hidden" name="id" value="<?php echo $row['nomor']; ?>">
              <div class="form-group">
              <label>NIP</label>
                <input type="text" class="form-control" name="nip" placeholder="NIP" value="<?php echo $row['nip']; ?>">
                <div class="form-group">
                  <label>NAMA</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $row['nama']; ?>" required>
                </div>
                <div class="form-group">
                  <label>HASIL</label>
                  <input type="text" name="hasil" class="form-control" placeholder="hasil" value="<?php echo $row['hasil']; ?>" required>
                </div>
                <div class="form-group">
                  <label>PERMASALAHAN</label>
                  <input type="text" name="permasalahan" class="form-control" placeholder="uang_saku" value="<?php echo $row['permasalahan']; ?>" required>
                </div>
                <div class="form-group">
                  <label>SARAN</label>
                  <input type="text" name="saran" class="form-control" placeholder="tujuan" value="<?php echo $row['saran']; ?>" required>
                </div>
               




                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->