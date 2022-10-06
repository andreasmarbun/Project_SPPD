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
                  <th>HASIL</th>
                  <th>PERMASALAHAN</th>
                  <th>SARAN</th> 
                  <th>AKSI</th> 

                </tr>
                </thead>
                <tbody>

                <?php
                include "../../conf/conn.php";
                $no=0;
                $query=mysqli_query($con , "SELECT * FROM pegawai ORDER BY 'status' DESC");
                while ($row=mysqli_fetch_array($query))
                {
                ?>

                <tr>
                <td><?php echo $no=$no+1;?></td>
                  <td><?php echo $row['hasil'];?></td>
                  <td><?php echo $row['permasalahan'];?></td>
                  <td><?php echo $row['saran'];?></td>
                  
                  <td>
                  <a href="../../pages/finance/cetak.php?id=<?=$row['nomor'];?>"button class="btn btn-primary" name="cmdPrint" id="cmdPrint" type="button">Cetak PDF</button>  
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