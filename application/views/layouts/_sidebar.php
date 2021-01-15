<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= base_url('admin/home') ?>" class="brand-link">
    <img src="<?php echo base_url('assets/uploads/images/logo.png') ?>" class="img-circle w-25" alt="Logo Image">
    <span class="brand-text font-weight-light">DATA LABELLING</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url('assets/uploads/images/foto_profil/' . $userdata->photo); ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo $this->session->userdata('username') ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?= base_url('admin/home') ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-poll"></i>
            <p>
              Data Labeling
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/tweet') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Tweet 1
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/tweet_2') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Tweet 2
                </p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-poll"></i>
            <p>
              Hasil Labeling
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url(); ?>admin/survei_1" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Anotator 1
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>admin/survei_2" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Anotator 2
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>admin/survei_3" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Anotator 3
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>admin/survei_4" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Anotator 4
                </p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('admin/user') ?>" class="nav-link">
            <i class="nav-icon fas fa-cogs"></i>
            <p>
              User Manage
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>