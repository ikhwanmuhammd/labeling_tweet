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

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent halaman">
        <div class="container">

            <div class="logo float-left">
                <h1 class="text-light"><a href="<?= base_url('website'); ?>"><span>Data Labeling</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="<?= base_url('assets'); ?>/vendor/Moderna/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu float-right d-none d-lg-block">
                <ul>
                    <li><a href="#header">Beranda</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <!-- <li><a href="#team">Kelompok</a></li> -->
                    <li><a href="#footer">Hubungi</a></li>
                    <li class="drop-down"><a href="">Hasil Survei</a>
                        <ul>
                            <li><a href="<?= base_url('member/sarkasme/hasil/1') ?>">Label Sarkasme</a></li>
                            <li><a href="<?= base_url('member/non_sarkasme/hasil/1') ?>">Label Non-Sarkasme</a></li>
                            <li><a href="<?= base_url('member/posnet/hasil/4') ?>">Label Negatif/Positif/Netral</a></li>
                        </ul>
                    </li>
                    <li class="ml-3">
                        <a>Sudah punya akun?</a>
                    </li>
                    <li>
                        <a href="<?= base_url('auth/login') ?>" class="btn btn-outline-primary btn-rounded-pill waves-effect">Masuk</a>
                    </li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
    <!-- ======= Hero No Slider Section ======= -->
    <!-- ======= Hero No Slider Section ======= -->
    <!-- <section id="hero-no-slider" class="d-flex justify-cntent-center align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <h2>Selamat Datang di Website Data Labeling</h2>
                <p>Website ini bertujuan untuk memberikan informasi tentang berbagai macam labeling yang bersifat sarkasme dan non-sarkasme.</p>
                <a href="#about" class="btn-get-started">Read More</a>
            </div>
        </div>
    </div>
</section> -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Selamat Datang di <span>Data Labeling</span></h2>
                    <p class="animate__animated animate__fadeInUp">Website ini bertujuan untuk memberikan informasi tentang berbagai macam labeling yang bersifat sarkasme dan non-sarkasme.</p>
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Sarkasme</h2>
                    <p class="animate__animated animate__fadeInUp">Merupakan salah satu jenis majas yang menggunakan kata-kata pedas untuk menyakiti hati orang lain dan dapat berupa cemoohan atau ejekan. Sarkasme dapat berupa penghinaan yang mengekspresikan rasa kesal dan marah dengan menggunakan kata-kata kasar.</p>
                    <a href="#definisi" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                </div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </section><!-- End Hero -->


    <main id="main">
        <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
            <div class="container">

                <div class="row" id="definisi">
                    <div class="col-lg-12 d-flex flex-column justify-content-center p-5">

                        <div class="icon-box">
                            <div class="icon"><i class='bx bx-home'></i></div>
                            <h4 class="title">Definisi Sarkasme :</h4>
                            <p class="description">
                                Menurut KBBI (Kamus Besar Bahasa Indonesia), sarkasme adalah penggunaan kata-kata pedas, kalimat cemooh atau ejekan kasar yang ditujukan untuk menyakiti hati orang lain.</p>
                            <p class="description">
                                Sedangkan menurut (Ivanko & Pexman, 2003), sarkasme adalah sebuah bentuk ekspresi atau gaya bahasa yang mempunyai makna bertolak belakang dari arti kata dan kalimat yang ada, dengan tujuan untuk menyindir, mengejek dan menyinggung seseorang, suatu produk, ataupun sebuah institusi.</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class='bx bx-message'></i></div>
                            <h4 class="title">Contoh 1 :</h4>
                            <p class="description"><em>
                                    “Dasar otak udang, disuruh melakukan pekerjaan yang sangat mudah seperti ini saja Anda tidak bisa. Lalu apa yang Anda bisa?”. </em></p>
                            <p class="description">
                                Kalimat diatas dapat dikategorikan kalimat sarkasme yang terdiri dari banyak kata-kata negatif dan kata-kata kiasan yang kasar.</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class='bx bx-message'></i></div>
                            <h4 class="title">Contoh 2 :</h4>
                            <p class="description"><em>
                                    “Saya membeli barang A, dan yang datang adalah B. Betapa sebuah pelayanan yang prima!”. </em></p>
                            <p class="description">
                                Pada kalimat Contoh 2, pada awal kalimat terdapat kata-kata positif dan diikuti kalimat pujian pada akhir kalimat. Kedua kalimat bertentangan satu sama lain, sehingga kalimat kedua dianggap kalimat Sarkasme. Atau dapat dikatakan, kedua kalimat merupakan pembentuk kalimat sarkasme.
                            </p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class='bx bx-message'></i></div>
                            <h4 class="title">Contoh 3 :</h4>
                            <p class="description"><em>
                                    Tweet si A: “Saya akan menjadi pemimpin yang adil”,
                                    dan balasan Tweet si B: “Tanganmu kotor kawan”</em></p>
                            <p class="description">
                                Pada kalimat Contoh 3, terlihat Tweet si A menulis kalimat positif, namun kalimat balasan si B menunjukkan kalimat yang bertolak belakang, sehingga kalimat kedua dianggap kalimat Sarkasme. Atau dapat dikatakan, kedua kalimat merupakan pembentuk kalimat sarkasme.</p>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <!-- ======= Services Section ======= -->
        <section class="services">
            <div class="container">

                <div class="row" id="about">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="icon-box icon-box-pink">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">Multiuser</a></h4>
                            <p class="description">Pengguna dapat melakukan secara bersama untuk meningkatkan produktivitas dan efektivitas yang tergantung pada pelabelan.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box icon-box-cyan">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">Data Real</a></h4>
                            <p class="description">Menggunakan data yang dikumpulkan dari sosial media dan telah melalui proses pembersihan dari simbol-simbol yang tidak dibutuhkan.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box icon-box-green">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">Efisien</a></h4>
                            <p class="description">Memaksimalkan seluruh sumber data dalam proses pelabelan secara efisien dengan kriteria tertentu.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box icon-box-blue">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="">Menyeluruh</a></h4>
                            <p class="description">Konsep atau gagasan yang menyeluruh mengenai tanggapan dan pikiran seseorang tentang label Sarkasme dan Non-Sarkasme pada media sosial.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Features Section ======= -->
        <section class="features">
            <div class="container">

                <div class="section-title">
                    <h2>Pengenalan</h2>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="<?= base_url('assets'); ?>/vendor/Moderna/img/features-2.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1">
                        <h3>Sumber data dari media sosial langsung</h3>
                        <p class="font-italic">
                            Data Label berasal dari kumpulan kata-kata / kalimat pengguna dalam media sosial.
                        </p>
                        <ul>
                            <li><i class="icofont-check"></i> Pengguna media sosial di wilayah rural (perdesaan) 90,18% dan wilayah urban (perkotaan) 94,12%.</li>
                            <li><i class="icofont-check"></i> Pengguna media sosial terbanyak berasal dari kalangan usia 20-29 tahun (generasi milenial). Sebanyak 93,5% dari kelompok generasi milenial memiliki akun media sosial.</li>
                            <li><i class="icofont-check"></i> Sebanyak 93,68% responden perempuan menggunakan media sosial dan laki-laki sebanyak 92,07%. </li>
                            <li><i class="icofont-check"></i> Pengguna media sosial terbanyak dari kelompok yang memiliki latar belakang pendidikan tinggi yaitu, Diploma/S1 (97,55%) ; SMA (97,5%) ; dan S2/S3 (96%).</li>
                            <li><i class="icofont-check"></i> Seluruh responden (100%) yang memiliki jumlah pengeluaran lebih dari 10 juta adalah pengguna media sosial. </li>
                        </ul>
                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src="<?= base_url('assets'); ?>/vendor/Moderna/img/features-3.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5">
                        <h3>Keunggulan Media Sosial</h3>
                        <p class="font-italic">Media sosial mudah digunakan dalam berinteraksi sosial. Interaksi yang terjadi di media sosial bagi informan pelajar memudahkan mereka untuk melakukan kegiatan interaksi sosial, karena di media sosial interaksi sosial terjadi secara alami, sadar maupun tidak sadar sesama pengguna saling merespon dari setiap aktivitas mereka di karena adanya proses komunikasi penyampaian dan penerimaan informasi ataupun pesan sesuai maksud dan tujuan masing-masing</p>
                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="<?= base_url('assets'); ?>/vendor/Moderna/img/features-4.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1">
                        <h3>Proses pemberian label dengan cepat, tepat, dan akurat</h3>
                        <p class="font-italic">
                            Sebagai salah satu bagian proses dari pengelolaan data labeling dengan memberikan keterangan sarkasme atau non-sarkasme berdasarkan kata-kata yang tertulis pada media sosial seseorang sebagai sumber informasi publik dan tentunya sebagai bahan pertimbangan kita dalam menggunakan kata-kata dengan bijak setiap harinya.
                        </p>
                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src="<?= base_url('assets'); ?>/vendor/Moderna/img/features-1.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-4">
                        <h3>Berbagai kalangan user dapat bergabung dengan kami</h3>
                        <p class="font-italic">
                            Tak hanya Mahasiswa siapapun dapat bergabung dan berkontribusi bersama kami dalam mewujudkan penggunaan bahasa yang baik dalam media sosial sebagai cermin karakter bangsa.
                        </p>
                    </div>
                </div>


            </div>
        </section><!-- End Features Section -->
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

    <script type="text/javascript">
        const pesan = $('.flash-data').data('flashdata');
        const halaman = $('.halaman').data('halaman');
        if (pesan) {
            Swal.fire({
                title: halaman,
                text: 'Berhasil ' + pesan,
                icon: 'success'
            });
        }
    </script>


</body>

</html>