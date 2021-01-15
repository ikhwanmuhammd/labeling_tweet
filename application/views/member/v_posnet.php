<main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Label Positif/Negatif/Netral</h2>
                <ol>
                    <li><a href="#">Beranda</a></li>
                    <li>Label Positif/Negatif/Netral</li>
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
                            <input type="hidden" value="<?= $id_anotator ?>" name="anotator" id="anotator">
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1_posnet" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tweet</th>
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