<div class="content-wrapper halaman" data-halaman="Data Tweet">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?= $jml_tweet + $jml_tweet2; ?></h3>
              <p>Data Label</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?= base_url('admin/tweet') ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?php
                  $jml_survei =  $jml_survei1 + $jml_survei2 + $jml_survei3 + $jml_survei4;
                  echo $jml_survei;
                  ?></h3>
              <p>Hasil Survei</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?= base_url('admin/survei_1') ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?= $jml_ingin_gabung; ?></h3>
              <p>Ingin Bergabung</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?= base_url('admin/user#ingin_gabung') ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?= $jml_user - 1; ?></h3>
              <p>User Terdaftar</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?= base_url('admin/user#tabel_user') ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header bg-primary">
              <h3 class="card-title">Presentasi Hasil Survey Anotator</h3>
            </div>
            <!-- /.card-header -->

            <div class="card-body">
              <h4 class="card-title">Anotator 1</h4>
              <br>
              <div class="d-flex no-block align-items-center">
                <span>
                  <?php
                  $query1 = $this->db->get_where('tbl_tweet');
                  $query2 = $this->db->get_where('tbl_tweet', array('anotator1 !=' => ''));
                  $jml_all = $query1->num_rows();
                  $jml_done = $query2->num_rows();
                  if ($jml_done > 0) {
                    $persen1 = round(($jml_done / $jml_all) * 100);
                  } else {
                    $persen1 = 0;
                  }
                  echo $persen1 . '%';
                  ?>

                </span>
                <div class="ml-auto">
                  <span><?= $jml_done ?></span>
                  <span>/</span>
                  <span><?= $jml_all ?></span>
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?= $persen1 ?>%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="card-body">
              <h4 class="card-title">Anotator 2</h4>
              <br>
              <div class="d-flex no-block align-items-center">
                <span>
                  <?php
                  $query1 = $this->db->get_where('tbl_tweet');
                  $query2 = $this->db->get_where('tbl_tweet', array('anotator2 !=' => ''));
                  $jml_all = $query1->num_rows();
                  $jml_done = $query2->num_rows();
                  if ($jml_done > 0) {
                    $persen2 = round(($jml_done / $jml_all) * 100);
                  } else {
                    $persen2 = 0;
                  }
                  echo $persen2 . '%';
                  ?>

                </span>
                <div class="ml-auto">
                  <span><?= $jml_done ?></span>
                  <span>/</span>
                  <span><?= $jml_all ?></span>
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?= $persen2 ?>%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="card-body">
              <h4 class="card-title">Anotator 3</h4>
              <br>
              <div class="d-flex no-block align-items-center">
                <span>
                  <?php
                  $query1 = $this->db->get_where('tbl_tweet');
                  $query2 = $this->db->get_where('tbl_tweet', array('anotator3 !=' => ''));
                  $jml_all = $query1->num_rows();
                  $jml_done = $query2->num_rows();
                  if ($jml_done > 0) {
                    $persen3 = round(($jml_done / $jml_all) * 100);
                  } else {
                    $persen3 = 0;
                  }
                  echo $persen3 . '%';
                  ?>

                </span>
                <div class="ml-auto">
                  <span><?= $jml_done ?></span>
                  <span>/</span>
                  <span><?= $jml_all ?></span>
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?= $persen3 ?>%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>


            <div class="card-body">
              <h4 class="card-title">Anotator 4</h4>
              <br>
              <div class="d-flex no-block align-items-center">
                <span>
                  <?php
                  $query1 = $this->db->get_where('tbl_tweet2');
                  $query2 = $this->db->get_where('tbl_tweet2', array('anotator4 !=' => ''));
                  $jml_all = $query1->num_rows();
                  $jml_done = $query2->num_rows();
                  if ($jml_done > 0) {
                    $persen4 = round(($jml_done / $jml_all) * 100);
                  } else {
                    $persen4 = 0;
                  }
                  echo $persen4 . '%';
                  ?>

                </span>
                <div class="ml-auto">
                  <span><?= $jml_done ?></span>
                  <span>/</span>
                  <span><?= $jml_all ?></span>
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?= $persen4 ?>%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="card-footer">
              <h4 class="card-title font-weight-bold">Total Survei</h4>
              <br>
              <div class="d-flex no-block align-items- font-weight-bold">
                <span>
                  <?php
                  $query11 = $this->db->get_where('tbl_tweet');
                  $query12 = $this->db->get_where('tbl_tweet2');
                  $jml_all = $query11->num_rows() + $query12->num_rows();
                  $jml_done = $jml_survei;
                  if ($jml_done > 0) {
                    $persen = round(($jml_done / $jml_all) * 100);
                  } else {
                    $persen = 0;
                  }
                  echo $persen . '%';
                  ?>

                </span>
                <div class="ml-auto">
                  <span class="font-weight-bold"><?= $jml_done ?></span>
                  <span class="font-weight-bold">/</span>
                  <span class="font-weight-bold"><?= $jml_all ?></span>
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?= $persen ?>%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
</div>