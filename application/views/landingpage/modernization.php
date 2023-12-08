<main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1 class="h6-title"><?= $title; ?></h1>
                <ol class="h6-title-small">
                    <li><a href="<?= base_url(''); ?>" class="h6-title-small">Home</a></li>
                    <li class="h6-title-small"><?= $title; ?></li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Contact Section -->

    <!-- ======= Services Section ======= -->
    <section class="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="section-title">
                    <h1 class="h6-title"><?= $getDataModernisasi['section_1']; ?></h1>
                </div>
                <?php foreach ($getDataModernisasiSection1 as $gd) : ?>
                    <div class="col-md-12 col-lg-4 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="icon-box icon-box-green">
                            <div class="icon"><i class="<?= $gd['icon']; ?>"></i></div>
                            <h4 class="title"><?= $gd['title']; ?></a></h4>
                            <p><?= $gd['keterangan']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Services Section ======= -->
    <section class="services section-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="section-title">
                    <h1 class="h6-title"><?= $getDataModernisasi['section_2']; ?></h1>
                </div>
                <?php foreach ($getDataModernisasiSection2 as $gd) : ?>
                    <div class="col-md-12 col-lg-4 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="icon-box icon-box-green">
                            <h4 class="title"><?= $gd['title']; ?></a></h4>
                            <p><?= $gd['keterangan']; ?></p>
                            <!-- <div class="icon"><i class="<?= $gd['icon']; ?>"></i></div> -->
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- End Services Section -->



    <!-- ======= Services Section ======= -->
    <section class="services section-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="section-title">
                    <h1 class="h6-title"><?= $getDataModernisasi['section_4']; ?></h1>
                </div>
                <?php foreach ($getDataModernisasiSection4 as $gd) : ?>
                    <div class="col-md-12 col-lg-4 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="icon-box icon-box-green">
                            <h4 class="title"><a href=""><?= $gd['title']; ?></a></h4>
                            <img src="<?= base_url('assets/img/modernisasi/' . $gd['image']); ?>" alt="" class="img-fluid">
                            <p class="mt-3"><?= $gd['keterangan']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="h6-title"><?= $getDataModernisasi['section_5']; ?></h1>
            </div>
            <?php foreach ($getDataModernisasiSection5 as $gd) : ?>
                <div class="row">
                    <div class="col-lg-5">
                        <img src="<?= base_url('assets/img/modernisasi/' . $gd['image']); ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-7 pt-4 pt-lg-0 just" style="text-align: justify;">
                        <?= $gd['keterangan']; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section><!-- End About Section -->

    <!-- ======= Iklan Section ======= -->
    <section class="banner section-bg" data-aos="fade-up" date-aos-delay="200">
        <div class="container">
            <?php foreach ($getDataIklan as $gDBH) : ?>
                <div class="row justify-content-md-center text-center">
                    <div class="col-md-8 content" data-aos="zoom-in" data-aos-duration="1000">
                        <h1 class="h1-banner"><?= $gDBH['title']; ?></h1>
                        <h1 class="h2-banner"><?= $gDBH['sub_title']; ?></h1>
                        <div class="">
                            <a href="https://api.whatsapp.com/send?phone=<?= $profile['telp']; ?>" target="_blank" class="myButtonPrimary"><?= $gDBH['tombol']; ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <!-- End Iklan Section -->

</main><!-- End #main -->