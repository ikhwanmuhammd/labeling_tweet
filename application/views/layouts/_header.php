<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="dropdown user user-menu">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="<?= base_url('assets/uploads/images/foto_profil/' . $userdata->photo); ?>" class="user-image">
        <span class="hidden-xs"><?= $userdata->first_name; ?> <?= $userdata->last_name; ?></span>
      </a>
      <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header">
          <img src="<?= base_url('assets/uploads/images/foto_profil/' . $userdata->photo); ?>" class="img-circle">
          <p>
            <?= $userdata->email; ?>
            <small>Terakhir Masuk , <?= $userdata->last_login; ?></small>
          </p>
        </li>
        <!-- Menu Footer-->
        <li class="user-footer">
          <div class="btn btn-sm">
            <a href="<?php echo base_url() ?>auth/profile/<?php echo $this->session->userdata('id_user'); ?>" class="btn btn-default btn-flat"><i class="fa fa-user" aria-hidden="true"></i> Profil</a>
          </div>
          <div class="btn btn-sm float-right">
            <a href="<?php echo base_url() ?>auth/logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out" aria-hidden="true"></i> Keluar</a>
          </div>
        </li>
      </ul>
    </li>
  </ul>
</nav>