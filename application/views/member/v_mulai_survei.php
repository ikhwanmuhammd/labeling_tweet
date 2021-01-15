<main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Mulai Survei</h2>
                <ol>
                    <li><a href="#">Beranda</a></li>
                    <li>Mulai Survei</li>
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
                    <table id="example1_mulai" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <!-- <th>ID</th> -->
                                <th>Label</th>
                                <!-- <th>Author</th> -->
                                <!-- <th>D&T Label</th> -->
                                <th>Reply</th>
                                <!-- <th>Responder</th> -->
                                <!-- <th>D&T Reply</th> -->
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                    <!-- <div class="blog-pagination">
                        <ul class="justify-content-center">
                            <li class="disabled"><i class="icofont-rounded-left"></i></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
                        </ul>
                    </div> -->

                </div><!-- End blog entries list -->

                <div class="col-lg-4">
                    <div class="sidebar">

                        <!-- <h3 class="sidebar-title">Cari</h3>
                        <div class="sidebar-item search-form">
                            <form action="">
                                <input type="text" class="form-control" name="search_text" id="search_text" placeholder="Masukkan kata yang dicari">
                                <button type="submit"><i class="icofont-search"></i></button>
                            </form>
                        </div> -->
                        <!-- End sidebar search formn-->


                        <?php
                        $ano = 'anotator' . $id_anotator;
                        $lbl = 'dnt_label' . $id_anotator;
                        if ($id_anotator == 1) {
                            $query2 = $this->db->query("select * from tbl_tweet where anotator1 <> '' order by dnt_label1 desc limit 10");
                        } elseif ($id_anotator == 2) {
                            $query2 = $this->db->query("select * from tbl_tweet where anotator2 <> '' order by dnt_label2 desc limit 10");
                        } else {
                            $query2 = $this->db->query("select * from tbl_tweet where anotator3 <> '' order by dnt_label3 desc limit 10");
                        }

                        if ($id_anotator == 1) {
                            $query3 = $this->db->query("select * from tbl_tweet where anotator1 <> '' ");
                        } elseif ($id_anotator == 2) {
                            $query3 = $this->db->query("select * from tbl_tweet where anotator2 <> '' ");
                        } else {
                            $query3 = $this->db->query("select * from tbl_tweet where anotator3 <> '' ");
                        }

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
                                                    if ($bt->$ano == 'non-sarkasme') {
                                                        echo '<p class="text-success">Non Sarkasme <a href="/tweet/member/mulai_survei/ulangi/' . $bt->id . '?anotator=' . $id_anotator . '" class="fa fa-edit"></a> </p>';
                                                    } else {
                                                        echo '<p class="text-danger">Sarkasme <a href="/tweet/member/mulai_survei/ulangi/' . $bt->id . '?anotator=' . $id_anotator . '" class="fa fa-edit"></a> </p>';
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