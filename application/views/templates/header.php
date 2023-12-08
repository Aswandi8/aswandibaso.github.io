<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title><?= $title; ?></title>

    <!-- Site favicon -->
    <?php foreach ($getFavicon as $gF) : ?>
        <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/img/' . $gF['image']); ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/img/' . $gF['image']); ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/img/' . $gF['image']); ?>">
    <?php endforeach; ?>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>src/plugins/datatables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>src/plugins/datatables/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>vendors/styles/style.css">
    <!-- switchery css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>src/plugins/switchery/switchery.min.css">
    <!-- bootstrap-tagsinput css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">
    <!-- bootstrap-touchspin css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
</head>

<body>
    <div class="header">
        <div class="header-left">
            <div class="menu-icon dw dw-menu"></div>
        </div>
        <div class="header-right">
            <div class="user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                        <i class="icon-copy dw dw-notification"></i>
                        <span class="badge notification-active"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="notification-list mx-h-350 customscroll">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="<?= base_url('assets/'); ?>vendors/images/img.jpg" alt="">
                                        <h3>John Doe</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-icon">
                            <img src="<?= base_url('assets/img/profile/' . $user['image']); ?>" alt="">
                        </span>
                        <span class="user-name"><?= $user['name']; ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <a class="dropdown-item" href="<?= base_url('user'); ?>"><i class="dw dw-user1"></i> Profile</a>
                        <!-- <a class="dropdown-item" href="<?= base_url('s1'); ?>"><i class="dw dw-settings2"></i> Setting</a> -->
                        <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>"><i class="dw dw-logout"></i> Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>