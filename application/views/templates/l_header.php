<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php foreach ($getMeta as $gM) : ?>
        <meta name="description" content="<?= $gM['meta_description']; ?>">
        <meta name="keywords" content="<?= $gM['meta_keywords']; ?>">
        <meta name="author" content="<?= $gM['meta_author']; ?>">
    <?php endforeach; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title; ?></title>

    <!-- Favicons -->
    <?php foreach ($getFavicon as $gF) : ?>
        <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/img/' . $gF['image']); ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/img/' . $gF['image']); ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/img/' . $gF['image']); ?>">
    <?php endforeach; ?>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/assets'); ?>/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/assets'); ?>/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('assets/assets'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/assets'); ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets/assets'); ?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/assets'); ?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/assets'); ?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/assets'); ?>/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo pd-30">
                <?php foreach ($getLogo as $gL) : ?>
                    <a href="<?= base_url(''); ?>"><img src="<?= base_url('assets/img/' . $gL['image']); ?>" alt="" class="img-fluid"></a>
                <?php endforeach; ?>
            </div>
            <nav id="navbar" class="navbar">
                <ul>
                    <?php if ($title == 'Beranda') { ?>
                        <li><a class="active" href="<?= base_url('id/home'); ?>" style="font-weight: 700;">Beranda</a></li>
                    <?php } else {; ?>
                        <li><a href="<?= base_url('id/home'); ?>" style="color:#eee !important;">Beranda</a></li>
                    <?php }; ?>

                    <?php if ($title == 'Produk') { ?>
                        <li class="dropdown"><a class="active" href="<?= base_url('id/product'); ?>" style="font-weight: 700;">Produk <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="<?= base_url('id/product/elevator'); ?>">Elevator</a></li>
                                <li><a href="<?= base_url('id/product/escalator'); ?>">Escalator</a></li>
                                <li><a href="<?= base_url('id/product/spare-part'); ?>">Spare part</a></li>
                            </ul>
                        </li>
                    <?php } else {; ?>
                        <li class="dropdown"><a href="<?= base_url('id/product'); ?>">Produk <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="<?= base_url('id/product/elevator'); ?>">Elevator</a></li>
                                <li><a href="<?= base_url('id/product/escalator'); ?>">Escalator</a></li>
                                <li><a href="<?= base_url('id/product/spare-part'); ?>">Spare part</a></li>
                            </ul>
                        </li>
                    <?php }; ?>

                    <?php if ($title == 'Maintenance') { ?>
                        <li><a class="active" href="<?= base_url('id/maintenance'); ?>" style="font-weight: 700;">Maintenance</a></li>
                    <?php } else {; ?>
                        <li><a href="<?= base_url('id/maintenance'); ?>">Maintenance</a></li>
                    <?php }; ?>

                    <?php if ($title == 'Modernisasi') { ?>
                        <li><a class="active" href="<?= base_url('id/modernization'); ?>" style="font-weight: 700;">Modernisasi</a></li>
                    <?php } else {; ?>
                        <li><a href="<?= base_url('id/modernization'); ?>">Modernisasi</a></li>
                    <?php }; ?>

                    <?php if ($title == 'Tentang Kami') { ?>
                        <li><a class="active" href="<?= base_url('id/about-us'); ?>" style="font-weight: 700;">Tentang Kami</a></li>
                    <?php } else {; ?>
                        <li><a href="<?= base_url('id/about-us'); ?>">Tentang Kami</a></li>
                    <?php }; ?>

                    <?php if ($title == 'Kontak Kami') { ?>
                        <li><a class="active" href="<?= base_url('id/contact-us'); ?>" style="font-weight: 700;">Kontak Kami</a></li>
                    <?php } else {; ?>
                        <li><a href="<?= base_url('id/contact-us'); ?>">Kontak Kami</a></li>
                    <?php }; ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->