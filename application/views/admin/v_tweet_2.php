<div class="content-wrapper halaman" data-halaman="Data Tweet">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Labeling 2</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Labeling 2</li>
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
              <h3 class="card-title">Tabel Labeling</h3>
              <button type="button" class="btn btn-primary btn-sm float-right ml-2" title="Tambah Labeling" data-toggle="modal" data-target="#modal-tambah-tweet2" data-backdrop="static" data-keyboard="false"><i class="fas fa-plus fa-sm"></i> Labeling</button>
              <a href="<?= base_url('/admin/tweet_2/export') ?>" type="button" class="btn btn-success btn-sm float-right ml-2" title="Export" data-backdrop="static" data-keyboard="false"><i class="fas fas fa-print fa-sm"></i> Export to CSV</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1_tweet2" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tweet</th>
                    <th>D&T Tweet</th>
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

    <div class="modal fade bd-example-modal-xl" id="modal-tambah-tweet2">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header bg-primary" id="bgLabeltweet">
            <h4 class="modal-title" id="formLabeltweet">Tambah Data tweet</h4>
          </div>
          <!-- form start -->
          <form method="post" action="<?php echo base_url('admin/tweet/simpan_tweet') ?>">
            <div class="modal-body">
              <div class="form-group">
                <label for="tweet">Tweet</label>
                <textarea class="form-control" id="tweet" placeholder="Tweet" name="tweet" required></textarea>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="dnt_tweet">Date And Time Tweet</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-clock"></i></span>
                    </div>
                    <input type="text" class="form-control float-right" id="dnt_tweet" name="dnt_tweet" value="<?= date("d-m-Y h:m") ?>">
                  </div>
                </div>
              </div>
            </div>
            <!-- /.modal-body -->
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
</section>
<!-- /.content -->
</div>