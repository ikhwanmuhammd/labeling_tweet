<div class="content-wrapper halaman" data-halaman="Hasil Survei">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Hasil Survei Anotator 2</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Hasil Survei</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
  <?php if ($this->session->flashdata('flash')) : ?>
    <!-- <div class="row mt-3">
      <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Data tweet <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    </div> -->
  <?php endif; ?>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tabel Survei</h3>
              <a href="<?= base_url('/admin/survei_2/export') ?>" type="button" class="btn btn-success btn-sm float-right ml-2" title="Export" data-backdrop="static" data-keyboard="false"><i class="fas fas fa-print fa-sm"></i> Export to CSV</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2_survei2" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Label</th>
                    <th>Author</th>
                    <th>D&T Label</th>
                    <th>Reply</th>
                    <th>Responder</th>
                    <th>D&T Reply</th>
                    <th>Anotator</th>
                    <th>Label</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot>
                </tfoot>
              </table>
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