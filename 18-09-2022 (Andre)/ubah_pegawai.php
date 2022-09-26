<?php
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
            <form role="form" method="post" action="pages/pegawai/ubah_pegawai_proses.php">
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
                  <label>NO HP</label>
                  <input type="text" name="no_hp" class="form-control" placeholder="no_hp" value="<?php echo $row['no_hp']; ?>" required>
                </div>
                  <div class="form-group">
                  <label>TANGGAL BERANGKAT</label>
                  <input type="date" name="tanggal_berangkat" class="form-control" placeholder="tanggal_berangkat" value="<?php echo $row['tanggal_berangkat']; ?>" required>
                </div>
                <div class="form-group">
                  <label>TANGGAL KEMBALI</label>
                  <input type="date" name="tanggal_kembali" class="form-control" placeholder="tanggal_kembali" value="<?php echo $row['tanggal_kembali']; ?>" required>
                </div>
                <div class="form-group">
                  <label>UANG SAKU</label>
                  <input type="text" name="uang_saku" class="form-control" placeholder="uang_saku" value="<?php echo $row['uang_saku']; ?>" required>
                </div>
                <div class="form-group">
                  <label>TUJUAN</label>
                  <input type="text" name="tujuan" class="form-control" placeholder="tujuan" value="<?php echo $row['tujuan']; ?>" required>
                </div>
                <div class="form-group">
                  <label>JENIS KENDARAAN</label>
                  <input type="text" name="jenis_kendaraan" class="form-control" placeholder="jenis_kendaraan" value="<?php echo $row['jenis_kendaraan']; ?>" required>
                </div>
                <div class="form-group">
                  <label>KEPERLUAN</label>
                  <input type="text" name="keperluan" class="form-control" placeholder="keperluan" value="<?php echo $row['keperluan']; ?>" required>
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