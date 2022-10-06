<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      DATA PEGAWAI
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">DATA </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="pegawai.php?page=tambah_pegawai" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
          
          </div>
            <div class="box-body table-responsive">
              <table id="pegawai" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>NIP</th>
                  <th>NAMA</th>
                  <th>NO HP</th>
                  <th>TANGGAL BERANGKAT</th>
                  <th>TANGGAL KEMBALI</th>
                  <th>UANG SAKU</th>
                  <th>TUJUAN</th>
                  <th>JENIS KENDARAAN</th>
                  <th>KEPERLUAN</th> 
                  <th>STATUS</th> 



                  <th>AKSI</th> 

                </tr>
                </thead>
                <tbody>

                <?php
                include "../../conf/conn.php";
                $no=0;
                $query=mysqli_query($con , "SELECT * FROM pegawai ORDER BY nomor DESC");
                while ($row=mysqli_fetch_array($query))
                {
                ?>

                <tr>
                <td><?php echo $no=$no+1;?></td>
                  <td><?php echo $row['nip'];?></td>
                  <td><?php echo $row['nama'];?></td>
                  <td><?php echo $row['no_hp'];?></td>
                  <td><?php echo $row['tanggal_berangkat'];?></td>
                  <td><?php echo $row['tanggal_kembali'];?></td>
                  <td><?php echo $row['uang_saku'];?></td>
                  <td><?php echo $row['tujuan'];?></td>
                  <td><?php echo $row['jenis_kendaraan'];?></td>
                  <td><?php echo $row['keperluan'];?></td>
         
                  <td>
                    

                  <?php
                                                if ($row['status'] == 0){
                                                    echo '<span class=text-warning>Menunggu Persetujuan</span>';
                                                } elseif ($row['status'] == 1) {
                                                    echo '<span class=text-primary>Telah Disetujui</span>';
                                                } else {
                                                    echo '<span class=text-danger>Tidak Disetujui</span>';
                                                }
                                               ?>      
                                                                                                                                                                                                                                                                         
                                    </td>
                  <td>
                    

                    <a href="pegawai.php?page=ubah_pegawai&id=<?=$row['nomor'];?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="../../pages/pegawai/hapus_pegawai.php?id=<?=$row['nomor'];?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>
                    
                </tr>

                <?php } ?>

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

<!-- Javascript Datatable -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#pegawai').DataTable();
  });
</script>