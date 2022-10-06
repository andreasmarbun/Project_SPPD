<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      DATA FINANCE
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

                if(isset($_GET['aksi']) && isset($_GET['id'])) {
                  $aksi = $_GET['aksi'];
                  $id = $_GET['id'];
                  if ($aksi == 'hapus') {
                      $query2 = mysqli_query($con, "DELETE FROM pegawai WHERE nomor='$id' ");
                      
                  }
              }



                
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
                                               <td>                                            
                                                
                                               <a  href="../../pages/finance/setuju.php?id=<?= $row['nomor']; ?>"><span data-placement='top' data-toggle='tooltip' title='Setujui'><button   class="btn btn-success">Setujui</button></span></a>            
                                               <a href="../../pages/finance/cetak.php?id=<?=$row['nomor'];?>"button class="btn btn-primary" name="cmdPrint" id="cmdPrint" type="button">Cetak PDF</button>    
                                              <a  href="../../pages/finance/tidak_setuju.php?id= ?>&id=<?=$row['nomor']; ?>"><span data-placement='top' data-toggle='tooltip' title='Tidak Setuju'><button   class="btn btn-danger" >Tidak Setuju</button></span></a>            
                                               <a href="../../pages/finance/surat_tugas.php?id=<?=$row['nomor'];?>"button class="btn btn-primary" name="cmdPrint" id="cmdPrint" type="button">Cetak ST</button>           
                                                     
                                                                                                                                                                                                                                                                         
                                    </td>
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