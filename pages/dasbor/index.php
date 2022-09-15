<?php include('../_partials/top.php') ?>

<h1 class="page-header">Dashboard</h1>

<?php include('data-index.php') ?>

<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="panel panel-primary">
      <div class="panel-body">
      <center><h3>Total Warga</h3></center>
        <p>
        <center><h2><b><?php echo $jumlah_warga['total'] ?></h2></b></center>
        </p>
      </div>
      <div class="panel-footer">
        <a href="../warga" class="btn btn-primary" role="button">
          <span class="glyphicon glyphicon-book"></span> Detail »
        </a>
      </div>
    </div>
   </div>
 
  <div class="col-sm-6 col-md-4">
    <div class="panel panel-primary">
    <div class="panel-body">
        <center><h3>Data Kartu Keluarga</h3></center>
        <p><b><center><h2><?php echo $jumlah_kartu_keluarga['total'] ?></b></h2></center></p>
      </div>
      <div class="panel-footer">
        <a href="../kartu-keluarga" class="btn btn-primary" role="button">
          <span class="glyphicon glyphicon-inbox"></span> Detail »
        </a>
      </div>
    </div> 
  </div>

  <div class="col-sm-6 col-md-4">
  <div class="panel panel-primary">
        <div class="panel-body">
        <center><h3>Data Mutasi</h3></center>
        <p><b><center><h2><?php echo $jumlah_mutasi['total'] ?></b></h2></center></p>
      </div>
      <div class="panel-footer">
        <a href="../mutasi" class="btn btn-primary" role="button">
          <span class="glyphicon glyphicon-inbox"></span> Detail »
        </a>
      </div>
    </div>
  </div>
</div>

<div class="row">
<div class="col-sm-6 col-md-4">
    <div class="panel panel-primary">
      <div class="panel-body">
        <h3><center>Usia < 17 Tahun </center></h3>
        <p>
        <center><b><h2><?php echo $jumlah_warga_kd_17['total'] ?></b></h2></center> 
        </p>
      </div>
      </div>  

      <div class="panel panel-primary">
      <div class="panel-body">
        <h3><center>Usia > 17 Tahun </center></h3>
        <p>
        <center><b><h2><?php echo $jumlah_warga_ld_17['total'] ?></b></h2></center> 
        </p>
      </div>
      </div> 
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="panel panel-primary">
    <div class="panel-body">
        <center><h3>Laki-laki</h3></center>
        <p><b><center><h2><?php echo $jumlah_warga_l['total'] ?></b></h2></center></p>
      </div>
      </div>
      <div class="panel panel-primary">
      <div class="panel-body">
        <h3><center>Perempuan </center></h3>
        <p>
        <center><b><h2><?php echo $jumlah_warga_p['total'] ?></b></h2></center> 
        </p>
      </div>
      </div>
    </div> 
  </div>
  
</div>




<?php include('../_partials/bottom.php') ?>
