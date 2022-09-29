
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      TAMBAH PEGAWAI
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">TAMBAH PEGAWAI</li>
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
            <form role="form" method="post" action="../../pages/pegawai/tambah_pegawai_proses.php">
              <div class="box-body">
              <div class="form-group">
                  <label>NIP</label>
                  <input type="text" name="nip" class="form-control" placeholder="NAMA" required>
                </div>
                <div class="form-group">
                  <label>NAMA</label>
                  <input type="text" name="nama" class="form-control" placeholder="NAMA" required>
                </div>
                <div class="form-group">
                  <label>NO HP</label>
                  <input type="number" name="no_hp" class="form-control" placeholder="NO HP" required>
                </div>
                <div class="form-group">
                  <label>TANGGAL BERANGKAT</label>
                  <input type="date" name="tanggal_berangkat" class="form-control" placeholder="NO HP" required>
                </div>
                <div class="form-group">
                  <label>TANGGAL KEMBALI</label>
                  <input type="date" name="tanggal_kembali" class="form-control" placeholder="NO HP" required>
                </div>
                <div class="form-group">
                <label>UANG SAKU</label>
                  <input type="number" name="uang_saku" class="form-control" placeholder="UANG SAKU" required>
                </div>
                <div class="form-group">
                <label>TUJUAN</label>
                  <input type="text" name="tujuan" class="form-control" placeholder="TUJUAN" required>
                </div>
                <div class="form-group">
                <label>JENIS KENDARAAN</label>
                  <input type="text" name="jenis_kendaraan" class="form-control" placeholder="JENIS KENDARAAN" required>
                </div>
                <div class="form-group">
                <label>KEPERLUAN</label>
                  <input type="text" name="keperluan" class="form-control" placeholder="keterangan" required>
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
