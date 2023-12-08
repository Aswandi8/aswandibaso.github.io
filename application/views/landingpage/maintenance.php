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
                    <h1 class="h6-title"><?= $getDataMaintenance['section_1']; ?></h1>
                </div>
                <?php foreach ($getDataMaintenanceSection1 as $gd) : ?>
                    <div class="col-md-12 col-lg-4 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="icon-box icon-box-green">
                            <div class="icon"><i class="<?= $gd['icon']; ?>"></i></div>
                            <h4 class="title"><a href="https://api.whatsapp.com/send?phone=<?= $profile['telp']; ?>" target="_blank"><?= $gd['title']; ?></a></h4>
                            <a href="https://api.whatsapp.com/send?phone=<?= $profile['telp']; ?>" target="_blank" class="myButtonPrimary"><?= $gd['tombol']; ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Services Section ======= -->
    <section class="services section-bg" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">
            <div class="row justify-content-center">
                <div class="section-title">
                    <h1 class="h6-title"><?= $getDataMaintenance['section_2']; ?></h1>
                </div>
                <?php foreach ($getDataMaintenanceSection2 as $gDS) : ?>
                    <div class="col-md-12 col-lg-4 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="icon-box icon-box-green">
                            <!-- <div class="icon"><i class="bx bxl-dribbble"></i></div> -->
                            <h1 class="p-title"><?= $gDS['title']; ?></h1>
                            <p class="description-title"><?= $gDS['keterangan']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section><!-- End Services Section -->

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