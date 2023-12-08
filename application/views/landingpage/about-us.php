<main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="h6-title"><?= strtoupper($title); ?></h1>
                <ol class="h6-title-small">
                    <li><a href="<?= base_url('id/home'); ?>" class="h6-title-small">Home</a></li>
                    <li class="h6-title-small"><?= strtoupper($title); ?></li>
                </ol>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="h6-title"><?= strtoupper($title); ?></h1>
                <ol class="h6-title-small">
                    <li><a href="<?= base_url('id/home'); ?>" class="h6-title-small">Home</a></li>
                    <li class="h6-title-small"><?= strtoupper($title); ?></li>
                </ol>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

    <!-- ======= banner Section ======= -->
    <section class="why-us " data-aos="fade-up" date-aos-delay="200">
        <div class="container">
            <?php foreach ($getDataSejarah as $gDBH) : ?>
                <div class="row">
                    <div class="col-lg-4">
                        <img src="<?= base_url('assets/img/about/' . $gDBH['image']); ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 d-flex flex-column justify-content-center p-5">
                        <h1 class="h6-title myPrimary"><a href=""><?= $gDBH['title']; ?></a></h1>
                        <p class="p-description mt-2"><?= $gDBH['keterangan']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section><!-- End banner Section -->

    <!-- ======= Service Details Section ======= -->
    <section class="service-details" data-aos="fade-up" date-aos-delay="200">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="card">
                        <div class="card-img text-center">
                            <?php foreach ($getVisi as $gd) : ?>
                                <img src="<?= base_url('assets/img/' . $gd['image']); ?>" alt="..." style="max-height: 300px;">
                            <?php endforeach; ?>
                        </div>
                        <div class="card-body">
                            <ul>
                                <h1 class="h6-title text-center">Visi</h1>
                                <?php foreach ($getDataVisi as $gd) : ?>
                                    <li><?= $gd['visi']; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="card">
                        <div class="card-img text-center">
                            <?php foreach ($getMisi as $gd) : ?>
                                <img src="<?= base_url('assets/img/' . $gd['image']); ?>" alt="..." style="max-height: 300px;">
                            <?php endforeach; ?>
                        </div>
                        <div class="card-body">
                            <ul>
                                <h1 class="h6-title text-center">Misi</h1>
                                <?php foreach ($getDataMisi as $gd) : ?>
                                    <li><?= $gd['misi']; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Service Details Section -->

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

    <!-- ======= Facts Section ======= -->


    <!-- ======= Tetstimonials Section ======= -->
    <section class="our-partner" data-aos="fade-up" date-aos-delay="200">
        <div class="container">
            <h1 class="h6-title text-center mb-5"><span>mitra</span> kami</h1>

            <div class="logo-slider">
                <?php foreach ($getPartner as $gDBH) : ?>
                    <div class="items"><img src="<?= base_url('assets/img/partner/' . $gDBH['image']); ?>" alt=""></div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- End Ttstimonials Section -->

    <section class="facts section-bg" data-aos="fade-up" date-aos-delay="200">
        <div class="container">

            <div class="row counters justify-content-center">
                <?php foreach ($getMitra as $gM) : ?>
                    <div class="col-lg-4 col-12 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="<?= $gM['total']; ?>" data-purecounter-duration="2" class="purecounter"></span>
                        <p><?= $gM['title']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section><!-- End Facts Section -->

</main><!-- End #main -->