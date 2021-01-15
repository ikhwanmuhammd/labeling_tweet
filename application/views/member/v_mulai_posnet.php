<main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Mulai Labeling</h2>
                <ol>
                    <li><a href="#">Beranda</a></li>
                    <li>Mulai Labeling</li>
                </ol>
            </div>
        </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">

            <div class="row">
                <input type="hidden" value="<?= $id_anotator ?>" name="anotator" id="anotator">
                <div class="col-lg-8 entries">
                    <table id="example1_mulai_posnet" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tweet</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>

                </div><!-- End blog entries list -->

                <div class="col-lg-4">
                    <div class="sidebar">

                        <?php
                        $ano = 'anotator' . $id_anotator;
                        $lbl = 'dnt_label' . $id_anotator;
                        if ($id_anotator == 4) {
                            $query2 = $this->db->query("select * from tbl_tweet2 where anotator4 <> '' order by dnt_label4 desc limit 10");
                        }
                        $query3 = $this->db->query("select * from tbl_tweet2 where anotator4 <> ''");
                        $count2 = $query2->num_rows();
                        $count3 = $query3->num_rows();
                        ?>
                        <h3 class="sidebar-title">Baru Ditanggapi
                            <span class="badge badge-danger float-right"><?= $count3 ?></span>
                        </h3>
                        <?php

                        if ($count2 > 0) :
                            foreach ($query2->result() as $bt) : ?>
                                <div class="recent-posts">
                                    <div class="post-item clearfix">
                                        <h4><?= $bt->tweet ?></h4>
                                        <div class="direct-chat-infos clearfix">
                                            <span class="direct-chat-name float-left">
                                                <b class="font-weight-bold strong">
                                                    <?php
                                                    if ($bt->$ano == 'positif') {
                                                        echo '<p class="text-success">Positif </a> </p>';
                                                    } elseif ($bt->$ano == 'negatif') {
                                                        echo '<p class="text-danger">Negatif </a> </p>';
                                                    } else {
                                                        echo '<p class="text-warning">Netral </a> </p>';
                                                    }
                                                    ?>
                                                </b>
                                            </span>
                                            <span class="direct-chat-timestamp float-right"><?= $bt->$lbl ?></span>
                                        </div>
                                        <span class="border-top"></span>
                                    </div>

                                </div><!-- End sidebar recent posts-->
                        <?php endforeach;
                        else :
                            echo "Belum ada yang ditanggapi";
                        endif;
                        ?>

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div><!-- End .row -->

        </div><!-- End .container -->

    </section><!-- End Blog Section -->

</main><!-- End #main -->