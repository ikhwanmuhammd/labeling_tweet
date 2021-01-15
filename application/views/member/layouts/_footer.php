<!-- ======= Footer ======= -->
<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <!-- <div class="footer-newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h4>To Be Anotator</h4>
                    <p>Ingin menjadi anotator dan bagian dari kami? silahkan hubungi kami dengan kirimkan alamat email! Terima kasih.</p>
                </div>
                <div class="col-lg-6">
                    <form action="<?= base_url('website/kirim_email') ?>" method="post">
                        <input type="email" name="email" required><input type="submit" value="Kirimkan">
                    </form>
                </div>
            </div>
        </div>
    </div> -->

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
<!-- DataTables -->
<script src="<?php echo base_url('assets'); ?>/vendor/AdminLTE-3/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/AdminLTE-3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/AdminLTE-3/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/AdminLTE-3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- Template Main JS File -->
<script src="<?= base_url('assets'); ?>/vendor/Moderna/js/main.js"></script>

<script>
    $(function() {
        $("#example1_nonsarkasme").DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],

            "ajax": {
                "url": "<?php echo site_url('member/non_sarkasme/get_data_tweet') ?>",
                "type": "POST",
                "data": {
                    anotator: $("#anotator").val()
                }
            },


            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }, ],
            "language": {
                "lengthMenu": "Tampilkan _MENU_ data per halaman",
                "zeroRecords": "Maaf, data tidak ditemukan",
                "info": "Menampilkan _PAGE_ dari _PAGES_ halaman",
                "infoEmpty": "Tidak ditemukan",
                "infoFiltered": "(hasil dari _MAX_ total data)"
            }
        });

        $("#example1_sarkasme").DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],

            "ajax": {
                "url": "<?php echo site_url('member/sarkasme/get_data_tweet') ?>",
                "type": "POST",
                "data": {
                    anotator: $("#anotator").val()
                }
            },

            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }, ],
            "language": {
                "lengthMenu": "Tampilkan _MENU_ data per halaman",
                "zeroRecords": "Maaf, data tidak ditemukan",
                "info": "Menampilkan _PAGE_ dari _PAGES_ halaman",
                "infoEmpty": "Tidak ditemukan",
                "infoFiltered": "(hasil dari _MAX_ total data)"
            }
        });

        $("#example1_posnet").DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],

            "ajax": {
                "url": "<?php echo site_url('member/posnet/get_data_tweet') ?>",
                "type": "POST",
                "data": {
                    anotator: $("#anotator").val()
                }
            },

            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }, ],
            "language": {
                "lengthMenu": "Tampilkan _MENU_ data per halaman",
                "zeroRecords": "Maaf, data tidak ditemukan",
                "info": "Menampilkan _PAGE_ dari _PAGES_ halaman",
                "infoEmpty": "Tidak ditemukan",
                "infoFiltered": "(hasil dari _MAX_ total data)"
            }
        });


        $("#example1_mulai").DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],

            "ajax": {
                "url": "<?php echo site_url('member/mulai_survei/get_data_tweet') ?>",
                "type": "POST",
                "data": {
                    anotator: $("#anotator").val()
                }
            },

            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }, ],
            "language": {
                "lengthMenu": "Tampilkan _MENU_ data per halaman",
                "zeroRecords": "Maaf, data tidak ditemukan",
                "info": "Menampilkan _PAGE_ dari _PAGES_ halaman",
                "infoEmpty": "Tidak ditemukan",
                "infoFiltered": "(hasil dari _MAX_ total data)"
            }
        });

        $("#example1_mulai_posnet").DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],

            "ajax": {
                "url": "<?php echo site_url('member/mulai_posnet/get_data_tweet') ?>",
                "type": "POST",
                "data": {
                    anotator: $("#anotator").val()
                }
            },

            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }, ],
            "language": {
                "lengthMenu": "Tampilkan _MENU_ data per halaman",
                "zeroRecords": "Maaf, data tidak ditemukan",
                "info": "Menampilkan _PAGE_ dari _PAGES_ halaman",
                "infoEmpty": "Tidak ditemukan",
                "infoFiltered": "(hasil dari _MAX_ total data)"
            }
        });
    });
</script>


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