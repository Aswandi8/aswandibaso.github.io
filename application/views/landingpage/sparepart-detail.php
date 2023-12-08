<?php foreach ($detailSparepart as $gae) : ?>
    <main id="main">
        <!-- ======= Contact Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="h6-title"><?= strtoupper($title); ?></h1>
                    <ol class="h6-title-small">
                        <li><a href="<?= base_url('id/home'); ?>" class="h6-title-small">Home</a></li>
                        <li><a href="<?= base_url('id/product/spare-part'); ?>">sparepart</a></li>
                        <li><a href="<?= base_url('id/product/spare-part'); ?>">Product</a></li>
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
                                <img src="<?= base_url('assets/img/product/sparepart-bg.png'); ?>" class="img-fluid">
                            </div>
                            <h2 class="entry-title">
                                <a href="blog-single.html"><?= $gae['name']; ?></a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center myPrimary">Escalator - <?= $gae['merk']; ?></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    <?= $gae['ringkasan_produk']; ?>
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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="icon-box">
                                    <div class="icon"><i class="fa-solid fa-elevator"></i></div>
                                    <h4 class="title">Name:</h4>
                                    <p class="description"><?= $gae['name']; ?></p>
                                </div>
                                <div class="icon-box">
                                    <div class="icon"><i class="fa-solid fa-layer-group"></i></div>
                                    <h4 class="title">Merk:</h4>
                                    <p class="description"><?= $gae['merk']; ?></p>
                                </div>
                                <div class="icon-box">
                                    <div class="icon"><i class="fa-solid fa-t"></i></div>
                                    <h4 class="title">Tipe:</h4>
                                    <p class="description"><?= $gae['tipe']; ?></p>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="icon-box">
                                    <div class="icon"><i class="fa-solid fa-up-long"></i></div>
                                    <h4 class="title">Ukuran</h4>
                                    <p class="description"><?= $gae['ukuran']; ?></p>
                                </div>
                                <div class="icon-box">
                                    <div class="icon"><i class="fa-solid fa-gears"></i></div>
                                    <h4 class="title">Material</h4>
                                    <p class="description"><?= $gae['material']; ?></p>
                                </div>
                                <div class="icon-box">
                                    <a href="https://api.whatsapp.com/send?phone=<?= $profile['telp']; ?>" target="_blank" class="myButtonPrimary">Kirim Permintaan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Why Us Section -->

    </main>
<?php endforeach;; ?>