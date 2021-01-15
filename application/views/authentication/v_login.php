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

	<!-- Template Main CSS File -->
	<link href="<?= base_url('assets'); ?>/vendor/Moderna/css/style.css" rel="stylesheet">

	<!-- =======================================================
  * Template Name: Moderna - v2.1.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="bg-secondary">
	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top">
		<div class="container">

			<div class="logo float-left">
				<h1 class="text-light"><a href="<?= base_url('website'); ?>"><span>Data Labeling</span></a></h1>
			</div>
			<nav class="nav-menu float-right d-none d-lg-block">
				<ul>
					<li class="ml-3">
						<a href="<?= base_url('website') ?>">Kembali ke Halaman Awal</a>
					</li>
				</ul>
			</nav><!-- .nav-menu -->
		</div>

	</header><!-- End Header -->

	<main id="main">
		<section class="team section-bg">

			<div class="container">

				<!-- Outer Row -->
				<div class="row justify-content-center">

					<div class="col-lg-6 mt-4">

						<div class="card o-hidden border-0 shadow-lg my-5">
							<div class="card-body p-0">
								<!-- Nested Row within Card Body -->
								<div class="row">
									<div class="col-lg">
										<div class="p-5">
											<div class="text-center">
												<h1 class="h4 text-gray-900 mb-4">Login <?= $site['nama_website']; ?></h1>
											</div>
											<form class="user" method="post" action="<?= base_url('auth/login'); ?>">
												<div class="form-group">
													<input type="text" name="email" class="form-control form-control-user" id="email" placeholder="Masukkan Email..">
													<span class="glyphicon  glyphicon-envelope form-control-feedback"></span>
												</div>
												<div class="form-group">
													<input type="password" name="password" class="form-control form-control-user" placeholder="Password" required minlength="5">
													<span class="glyphicon glyphicon-lock form-control-feedback"></span>
												</div>
												<div class="row">
													<div class="checkbox icheck col-xs-12 col-sm-6 col-md-6">
														<label>
															<?php echo form_checkbox('remember_code', '1', false, 'id="remember_code"'); ?>
															Ingat Saya
														</label>
													</div>
													<div class="col-xs-12 col-sm-6 col-md-6" style="padding-bottom: 5px">
														<button type="submit" name="submit" value="login" class="btn btn-primary btn-block btn-flat"><i class="fa fa-sign-in" aria-hidden="true"></i> Masuk</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="myalert">
							<?php echo $this->session->flashdata('alert', true); ?>
						</div>
					</div>

				</div>

			</div>
		</section>
	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

		<div class="footer-newsletter">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<h4>Register</h4>
						<p>Ingin menjadi anotator atau bagian dari kami? silahkan hubungi kami dengan kirimkan alamat email! Terima kasih.</p>
					</div>
					<div class="col-lg-6">
						<form action="<?= base_url('website/kirim_email') ?>" method="post">
							<input type="email" name="email" required><input type="submit" value="Kirimkan">
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-top">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Link Pintasan</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="#head">Beranda</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#about">Tentang</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#team">Kelompok</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Label Sarkasme</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Label Non-Sarkasme</a></li>
						</ul>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Layanan Kami</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
						</ul>
					</div>

					<div class="col-lg-3 col-md-6 footer-contact">
						<h4>Silahkan Hubungi</h4>
						<p>
							Jl. Menteng Raya No.29, RT.1/RW.10, Kb. Sirih, Kec. Menteng<br>
							Jakarta Pusat, 10340<br>
							Indonesia <br><br>
							<strong>Phone:</strong> +62 887 2033 101<br>
							<strong>Email:</strong> afiyati.reno@mercubuana.ac.id<br>
						</p>

					</div>

					<div class="col-lg-3 col-md-6 footer-info">
						<h3>About Data Labeling</h3>
						<p>Merupakan situs web informasi data sosial media dan pelabelan terhadap hasil survei yang telah dilakukan oleh Anotator.</p>
						<div class="social-links mt-3">
							<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
							<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
							<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
							<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="container">
			<div class="copyright">
				&copy; Copyright <strong><span>Data Labeling</span></strong>. All Rights Reserved
			</div>
			<div class="credits">
				Developed by <a href="https://www.instagram.com/ikhwan.muhammd/">Ikhwan & Team</a>
			</div>
		</div>
	</footer><!-- End Footer -->

	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

	<!-- Vendor JS Files -->
	<script src="<?= base_url('assets'); ?>/vendor/Moderna/vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets'); ?>/vendor/Moderna/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets'); ?>/vendor/Moderna/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="<?= base_url('assets'); ?>/vendor/Moderna/vendor/php-email-form/validate.js"></script>
	<script src="<?= base_url('assets'); ?>/vendor/Moderna/vendor/venobox/venobox.min.js"></script>
	<script src="<?= base_url('assets'); ?>/vendor/Moderna/vendor/waypoints/jquery.waypoints.min.js"></script>
	<script src="<?= base_url('assets'); ?>/vendor/Moderna/vendor/counterup/counterup.min.js"></script>
	<script src="<?= base_url('assets'); ?>/vendor/Moderna/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets'); ?>/vendor/Moderna/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="<?= base_url('assets'); ?>/vendor/Moderna/vendor/aos/aos.js"></script>

	<!-- Template Main JS File -->
	<script src="<?= base_url('assets'); ?>/vendor/Moderna/js/main.js"></script>

	<script>
		$(function() {
			$('input').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
				increaseArea: '20%' // optional
			});
		});
		$('#myalert').delay('slow').slideDown('slow').delay(4100).slideUp(600);
	</script>

</body>

</html>