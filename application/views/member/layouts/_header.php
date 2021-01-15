<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Website - Data Labeling</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('assets'); ?>/vendor/Moderna/img/favicon.png" rel="icon">
    <link href="<?= base_url('assets'); ?>/vendor/Moderna/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets'); ?>/vendor/Moderna/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>/vendor/Moderna/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>/vendor/Moderna/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>/vendor/Moderna/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>/vendor/Moderna/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>/vendor/Moderna/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>/vendor/Moderna/vendor/aos/aos.css" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/vendor/AdminLTE-3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendor/AdminLTE-3/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendor/AdminLTE-3/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendor/AdminLTE-3/dist/css/adminlte.min.css">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets'); ?>/vendor/Moderna/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Moderna - v2.1.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->

    <header id="header" class="fixed-top <?php if (uri_string() == 'member/home') {
                                                echo 'header-transparent';
                                            } ?>">
        <div class="container">

            <div class="logo float-left">
                <h1 class="text-light"><a href="<?= base_url('member/home'); ?>"><span>Data Labeling</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="<?= base_url('assets'); ?>/vendor/Moderna/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <?php
            $gohome = base_url('member/home')
            ?>
            <nav class="nav-menu float-right d-none d-lg-block">
                <ul>
                    <li><a href="<?php echo $gohome . "#header"; ?>">Beranda</a></li>
                    <li><a href="<?php echo $gohome . "#about"; ?>">Tentang</a></li>
                    <li><a href="#footer">Hubungi</a></li>
                    <li class="drop-down"><a href="">Hasil Label</a>
                        <ul>
                            <li><a href="<?= base_url('member/sarkasme/hasil/1') ?>">Label Sarkasme</a></li>
                            <li><a href="<?= base_url('member/non_sarkasme/hasil/1') ?>">Label Non-Sarkasme</a></li>
                            <li><a href="<?= base_url('member/posnet/hasil/4') ?>">Label Negatif/Positif/Netral</a></li>
                        </ul>
                    </li>
                    <li class="drop-down mr-5"><a href="">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $userdata->first_name; ?> <?= $userdata->last_name; ?></span>
                            <img class="img-profile rounded-circle" style="width: 25px;" src="<?= base_url('assets/uploads/images/foto_profil/default.jpg') ?>">
                        </a>
                        <ul>
                            <?php
                            $as = $userdata->as_anotator;
                            $ss = array('1', '2', '3');
                            $pn = array('4');
                            if (in_array($as, $ss)) : ?>
                                <li>
                                    <a class="not-active">
                                        <h6>Anda Sebagai Anotator <?= $userdata->as_anotator ?></h6>
                                    </a>
                                </li>
                                <li><a href="<?= base_url('member/mulai_survei/list/') . $userdata->as_anotator ?>" id="mulai_survei">Mulai Labeling
                                        <span class="badge badge-danger float-right">
                                            <h6>
                                                <?php
                                                $iduser = $userdata->as_anotator;
                                                switch ($iduser) {
                                                    case 1:
                                                        $query = $this->db->get_where('tbl_tweet', array('anotator1' => ''));
                                                        break;
                                                    case 2:
                                                        $query = $this->db->get_where('tbl_tweet', array('anotator2' => ''));
                                                        break;
                                                    case 3:
                                                        $query = $this->db->get_where('tbl_tweet', array('anotator3' => ''));
                                                        break;
                                                }
                                                $count = $query->num_rows();
                                                echo $count;
                                                ?>
                                            </h6>
                                        </span>
                                    </a>
                                </li>
                            <?php elseif (in_array($as, $pn)) : ?>
                                <li>
                                    <a class="not-active">
                                        <h6>Anda Sebagai Anotator <?= $userdata->as_anotator ?></h6>
                                    </a>
                                </li>
                                <li><a href="<?= base_url('member/mulai_posnet/list/') . $userdata->as_anotator ?>" id="mulai_survei">Mulai Labeling
                                        <span class="badge badge-danger float-right">
                                            <h6>
                                                <?php
                                                $query4 = $this->db->get_where('tbl_tweet2', array('anotator4' => ''));
                                                $count = $query4->num_rows();
                                                echo $count;
                                                ?>
                                            </h6>
                                        </span>
                                    </a>
                                </li>
                            <?php endif;
                            ?>
                            <li><a href="<?= base_url() ?>auth/logout">Keluar</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->