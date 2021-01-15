<div class="content-wrapper halaman" data-halaman="Data Tweet">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Labeling</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Labeling</li>
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
              <button type="button" class="btn btn-primary btn-sm float-right ml-2" title="Tambah Labeling" data-toggle="modal" data-target="#modal-tambah-tweet" data-backdrop="static" data-keyboard="false"><i class="fas fa-plus fa-sm"></i> Labeling</button>
              <a href="<?= base_url('/admin/tweet/export') ?>" type="button" class="btn btn-success btn-sm float-right ml-2" title="Export" data-backdrop="static" data-keyboard="false"><i class="fas fas fa-print fa-sm"></i> Export to CSV</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1_tweet" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Label</th>
                    <th>Author</th>
                    <th>D&T Label</th>
                    <th>Reply</th>
                    <th>Responder</th>
                    <th>D&T Reply</th>
                    <!-- <th>Anotator</th> -->
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

    <div class="modal fade bd-example-modal-xl" id="modal-tambah-tweet">
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
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="author">Author</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                      </div>
                      <input type="text" class="form-control" id="author" placeholder="Author" name="author" required>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="dnt_tweet">Date And Time Tweet</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control float-right" id="dnt_tweet" name="dnt_tweet" value="<?= date("d-m-Y h:i:s") ?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="reply">Reply</label>
                <textarea class="form-control" id="reply" placeholder="Reply" name="reply" required></textarea>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="responder">Responder</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                      </div>
                      <input type="text" class="form-control" id="responder" placeholder="Responder" name="responder" required>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="dnt_reply">Date And Time Reply</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control float-right" id="dnt_reply" name="dnt_reply" value="<?= date("d-m-Y h:i:s") ?>">
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="form-group">
                <label for="anotator">anotator</label>
                <select class="form-control" id="anotator" placeholder="--anotator--" name="anotator" required>
                  <option value="">--Pilih anotator--</option>
                  <?php foreach ($anotator as $a) : ?>
                    <option value="<?php echo $a->id ?>"><?php echo $a->id; ?></option>
                  <?php endforeach; ?>
                </select>
              </div> -->
            </div>
            <!-- /.modal-body -->
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal-tambah-tweet -->
    <div class="modal fade" id="modal-edit-anotator">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-info" id="bgLabeltweet">
            <h4 class="modal-title" id="formLabeltweet">Edit Anotator</h4>
          </div>
          <!-- form start -->
          <form method="post" action="<?php echo base_url('admin/tweet/edit_anotator') ?>">
            <input type="hidden" name="id_tweet" id="id_tweet">
            <div class="modal-body">
              <div class="form-group">
                <label for="idtweet">ID Tweet</label>
                <input type="number" class="form-control" id="idtweet" name="idtweet" disabled>
              </div>
              <div class="form-group">
                <label for="ubahanotator">Anotator</label>
                <select class="form-control" id="ubahanotator" placeholder="--Anotator--" name="ubahanotator">
                  <option value="">--Pilih Anotator--</option>
                  <?php foreach ($anotator as $a) : ?>
                    <option value="<?php echo $a->id ?>"><?php echo $a->id; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <!-- /.modal-body -->
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal-edit-tweet -->

  </section>
  <!-- /.content -->
</div>