
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      LAPORAN HASIL
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">TAMBAH HASIL</li>
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
            <form role="form" method="post" action="../../pages/pegawai/hasil_proses.php">
              <div class="box-body">
              <div class="form-group">
                  <label>NIP</label>
                  <input type="text" name="nip" class="form-control" placeholder="NIP" required>
                </div>
                <div class="form-group">
                  <label>NAMA</label>
                  <input type="text" name="nama" class="form-control" placeholder="NAMA" required>
                </div>
                <div class="form-group">
                  <label>Hasil Laporan</label>
                  <input type="text" name="hasil_laporan" class="form-control" placeholder="HASIL LAPORAN" required>
                </div>
                <div class="form-group">
                  <label>Kendala</label>
                  <input type="text" name="kendala" class="form-control" placeholder="KENDALA" required>
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
