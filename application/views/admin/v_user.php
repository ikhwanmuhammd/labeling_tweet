<div class="content-wrapper halaman" data-halaman="Data User">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>User Manage</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">User Manage</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#tabel_user" data-toggle="tab">
                    <h5>Tabel User</h5>
                  </a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="#tabel_anotator" data-toggle="tab">
                    <h5>Tabel Anotator</h5>
                  </a></li> -->
                <li class="nav-item"><a class="nav-link" href="#ingin_gabung" data-toggle="tab">
                    <h5>Ingin Bergabung</h5>
                  </a></li>
              </ul>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="tabel_user">
                  <button type="button" class="btn btn-success btn-sm" title="Tambah User" data-toggle="modal" data-target="#modal-tambah-user" data-backdrop="static" data-keyboard="false"><i class="fas fa-plus fa-sm"></i> Tambah User</button>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1_user" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Username</th>
                          <th>Wewenang</th>
                          <th>Nama Depan</th>
                          <th>Nama Terakhir</th>
                          <th>Email</th>
                          <th>HP</th>
                          <th>Status</th>
                          <th>Dibuat</th>
                          <th>Sebagai Anotator</th>
                          <th width="50px"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        foreach ($user as $u) : ?>
                          <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $u->username ?></td>
                            <td>
                              <?php
                              if ($u->id_role == 1) :
                                echo 'Admin';
                              else :
                                echo 'Member';
                              endif;
                              ?>
                            </td>
                            <td><?= $u->first_name ?></td>
                            <td><?= $u->last_name ?></td>
                            <td><?= $u->email ?></td>
                            <td><?= $u->phone ?></td>
                            <td>
                              <?php
                              if ($u->status == 1) :
                                echo '<span class="badge badge-success">Aktif</span>';
                              else :
                                echo '<span class="badge badge-danger">Nonaktif</span>';
                              endif;
                              ?>
                            </td>
                            <td><?= $u->created_at ?></td>
                            <td><?= $u->as_anotator ?></td>
                            <td>
                              <?php
                              $link_id = 'user/hapus_user/' . $u->id;
                              if ($u->id_role == 1) :
                                echo "";
                              else :
                                echo '<a href="' . $link_id . '" class="btn btn-danger btn-sm" id="tombol_hapus" data-toggle="tooltip" data-placement="top" title="Hapus User"><i class="fa fa-trash fa-sm"></i></a>';
                              endif;
                              ?>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                      <tfoot>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>


                <!-- <div class="tab-pane" id="tabel_anotator">
                  <button type="button" class="btn btn-success btn-sm mb-3" title="Tambah User" data-toggle="modal" data-target="#modal-tambah-anotator" data-backdrop="static" data-keyboard="false"><i class="fas fa-plus fa-sm"></i> Tambah Anotator</button>
                  <table class="table table-bordered table-striped" id="example1_anot">
                    <thead>
                      <tr>
                        <th width="30px">ID</th>
                        <th>Nama</th>
                        <th width="50px">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($anotator as $a) : ?>
                        <tr>
                          <td><?= $a->id ?></td>
                          <td><?= ucfirst($a->nama) ?></td>
                          <td><a href="user/hapus_anotator/<?= $a->id ?>" class="btn btn-danger btn-sm" id="tombol_hapus" data-toggle="tooltip" data-placement="top" title="Hapus Anotator"><i class="fa fa-trash fa-sm"></i></a></td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                    </tfoot>
                  </table>
                </div> -->

                <div class="tab-pane" id="ingin_gabung">
                  <table class="table table-bordered table-striped" id="example1_ingin">
                    <h5>Belum Terdaftar</h5>
                    <thead>
                      <tr>
                        <th width="30px">No</th>
                        <th>Email</th>
                        <th width="50px">Konfirmasi</th>
                        <th width="50px">Hapus</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      $belum_gabung = $this->db->get_where('tbl_gabung', array('join_at' => NULL));
                      foreach ($belum_gabung->result() as $bg) : ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= ucfirst($bg->email) ?></td>
                          <td><a href="user/konfirmasi/<?= $bg->id ?>" class="btn btn-success btn-sm" id="tombol_oke" data-toggle="tooltip" data-placement="top" title="Konfirmasi"><i class="fa fa-check-double fa-sm"></i></a></td>
                          <td><a href="user/batal_minta/<?= $bg->id ?>" class="btn btn-danger btn-sm" id="tombol_hapus" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash fa-sm"></i></a></td>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                    </tfoot>
                  </table>
                  <br><br>
                  <table class="table table-bordered table-striped" id="example1_join">
                    <h5>Sudah Terdaftar</h5>
                    <thead>
                      <tr>
                        <th width="30px">No</th>
                        <th>Email</th>
                        <th width="50px">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      $sudah_gabung = $this->db->get_where('tbl_gabung', array('join_at !=' => NULL));
                      foreach ($sudah_gabung->result() as $sg) : ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= ucfirst($sg->email) ?></td>
                          <td><a href="user/batal_gabung/<?= $sg->id ?>" class="btn btn-danger btn-sm" id="tombol_oke" data-toggle="tooltip" data-placement="top" title="Batal"><i class="fa fa-times fa-sm"></i></a></td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                    </tfoot>
                  </table>
                </div>
              </div>
              <!-- tab-content -->
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
    </div>

    <!-- modal-tambah-user -->
    <div class="modal fade" id="modal-tambah-user">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-primary" id="bgLabeluser">
            <h4 class="modal-title" id="formLabeluser">Tambah User</h4>
          </div>
          <!-- form start -->
          <form method="post" action="<?php echo base_url('admin/user/simpan_user') ?>">
            <div class="modal-body">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="confirm_password" required>
                    <span id='message'></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="example@mail.com" name="email" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                <div class="input-group ml-2">
                  <div class="custom-control custom-radio col-md-6">
                    <input class="custom-control-input" type="radio" id="aktif" name="status" value="1" checked>
                    <label for="aktif" class="custom-control-label font-weight-normal">Aktif</label>
                  </div>
                  <div class="custom-control custom-radio col-md-6">
                    <input class="custom-control-input" type="radio" id="nonaktif" name="status" value="0" required>
                    <label for="nonaktif" class="custom-control-label font-weight-normal">Nonaktif</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="as_anotator">Sebagai Anotator</label>
                <select class="form-control" id="as_anotator" placeholder="--Anotator--" name="as_anotator" required>
                  <option value="">--Pilih Anotator--</option>
                  <option value="0">Bukan Anotator</option>
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


    <!-- modal-tambah-anotator -->
    <div class="modal fade" id="modal-tambah-anotator">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-primary" id="bgLabelanotator">
            <h4 class="modal-title" id="formLabelanotator">Tambah Anotator</h4>
          </div>
          <!-- form start -->
          <form method="post" action="<?php echo base_url('admin/user/simpan_anotator') ?>">
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="id_anotator">ID</label>
                    <input type="number" class="form-control" id="id_anotator" name="id_anotator">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="nama_anotator">Nama Anotator</label>
                    <input type="text" class="form-control" id="nama_anotator" name="nama_anotator">
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
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

  </section>
  <!-- /.content -->

</div>