<?php foreach ($detailEscalator as $gae) : ?>
    <main id="main">
        <!-- ======= Contact Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="h6-title"><?= strtoupper($title); ?></h1>
                    <ol class="h6-title-small">
                        <li><a href="<?= base_url('id/home'); ?>" class="h6-title-small">Home</a></li>
                        <li><a href="<?= base_url('id/product/escalator'); ?>">Escalator</a></li>
                        <li><a href="<?= base_url('id/product/escalator'); ?>">Product</a></li>
                        <li class="h6-title-small"><?= strtoupper($title); ?></li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End Contact Section -->

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12 entries">
                        <article class="entry entry-single">
                            <div class="entry-img">
                                <img src="<?= base_url('assets/img/product/escalator-bg.png'); ?>" class="img-fluid">
                            </div>
                            <h2 class="entry-title">
                                <a href="blog-single.html"><?= $gae['name']; ?></a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center myPrimary">Escalator - <?= $gae['title']; ?></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    <?= $gae['keterangan']; ?>
                                </p>
                            </div>
                        </article><!-- End blog entry -->
                    </div><!-- End blog entries list -->
                </div>
            </div>
        </section>
        <!-- End Blog Single Section -->

        <!-- ======= Why Us Section ======= -->
        <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
            <div class="section-title">
                <h1 class="h6-title"><span>Spesifikasi</span> product</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 video-box">
                        <img src="<?= base_url('assets/img/product/' . $gae['image']); ?>" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-7 d-flex flex-column justify-content-center p-5">
                        <div class="icon-box">
                            <div class="icon"><i class="fa-solid fa-elevator"></i></div>
                            <h4 class="title">Name:</h4>
                            <p class="description"><?= $gae['name']; ?></p>
                        </div>
                        <div class="icon-box">
                            <div class="icon"><i class="fa-solid fa-layer-group"></i></div>
                            <h4 class="title">Kategori:</h4>
                            <p class="description"><?= $gae['title']; ?></p>
                        </div>
                        <div class="icon-box">
                            <div class="icon"><i class="fa-solid fa-up-long"></i></div>
                            <h4 class="title">Travel Height</h4>
                            <p class="description"><?= $gae['travel_height']; ?></p>
                        </div>
                        <div class="icon-box">
                            <div class="icon"><i class="fa-solid fa-gears"></i></div>
                            <h4 class="title">Power</h4>
                            <p class="description"><?= $gae['motor']; ?></p>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-3 ">
                                <a href="https://api.whatsapp.com/send?phone=<?= $profile['telp']; ?>" target="_blank" class="myButtonPrimary">Kirim Permintaan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Why Us Section ======= -->
        <section class="why-uss" data-aos="fade-up" date-aos-delay="200">
            <div class="section-title">
                <h1 class="h6-title"><?= strtoupper($title); ?> <span>Parameter</span> List</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <img src="<?= base_url('assets/img/product/' . $gae['parameter_list']); ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-12 text-center">
                        <img src="<?= base_url('assets/img/product/' . $gae['parameter_list1']); ?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section><!-- End Why Us Section -->

    </main>
<?php endforeach;; ?>