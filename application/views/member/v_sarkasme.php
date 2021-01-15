<main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Label Sarkasme</h2>
                <ol>
                    <li><a href="#">Beranda</a></li>
                    <li>Label Sarkasme</li>
                </ol>
            </div>
        </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container-fluid">
            <div class="row ml-lg-5 mr-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <label for="pilih" class="col-sm-1 col-form-label">Hasil Survei</label>
                            <div class="btn-group" id="pilih">
                                <a href="<?= base_url('/member/sarkasme/hasil/1') ?>" type="button" class="btn btn-danger">Anotator 1</a>
                                <a href="<?= base_url('/member/sarkasme/hasil/2') ?>" type="button" class="btn btn-danger">Anotator 2</a>
                                <a href="<?= base_url('/member/sarkasme/hasil/3') ?>" type="button" class="btn btn-danger">Anotator 3</a>
                            </div>
                            <input type="hidden" value="<?= $id_anotator ?>" name="anotator" id="anotator">
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1_sarkasme" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Label</th>
                                        <th>Author</th>
                                        <th>D&T Label</th>
                                        <th>Reply</th>
                                        <th>Responder</th>
                                        <th>D&T Reply</th>
                                        <th>Label</th>
                                        <th>Anotator</th>
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

    </section><!-- End Blog Section -->

</main><!-- End #main -->