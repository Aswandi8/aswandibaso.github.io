<main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="h6-title"><?= strtoupper($title); ?></h1>
                <ol class="h6-title-small">
                    <li><a href="<?= base_url('id/home'); ?>" class="h6-title-small">Home</a></li>
                    <li><a href="<?= base_url('id/product/escalator'); ?>">Escalator</a></li>
                    <li class="h6-title-small"><?= strtoupper($title); ?></li>
                </ol>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

    <!-- ======= Service Details Section ======= -->
    <section class="service-details">
        <div class="container">
            <div class="row">
                <?php foreach ($getAllEscalator as $gae) : ?>
                    <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="card">
                            <div class="card-img text-center">
                                <img src="<?= base_url('assets/img/product/' . $gae['image']); ?>" class="w-50">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="<?= base_url('id/product/escalator/' . $gae['slug_name']); ?>"><?= $gae['name']; ?></a></h5>
                                <p class="card-text">Escalator - <?= $gae['title']; ?></p>
                                <p class="card-text"><?= $gae['keterangan']; ?></p>
                                <div class="read-more"><a href="<?= base_url('id/product/escalator/' . $gae['slug_name']); ?>"><i class="bi bi-arrow-right"></i> Read More</a></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>
    <!-- End Service Details Section -->
</main>