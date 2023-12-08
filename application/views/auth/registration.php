<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title><?= $title; ?></title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/img/favicon.png'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/img/favicon.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/img/favicon.png'); ?>">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>src/plugins/jquery-steps/jquery.steps.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>vendors/styles/style.css">

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

<body class="login-page">
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <a href="<?= base_url('auth'); ?>">
                    <img src="<?= base_url('assets/'); ?>img/logo.png" alt="">
                </a>
            </div>
            <div class="login-menu">
                <ul>
                    <li><a href="<?= base_url('auth'); ?>" class="text-success">Login</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="<?= base_url('assets/'); ?>vendors/images/register-page-img.png" alt="">
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-success">Create an Account!</h2>
                            <?= $this->session->flashdata('message'); ?>
                        </div>
                        <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full name" value="<?= set_value('name'); ?>">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <button type="submit" class="btn btn-success btn-lg btn-block">
                                            Register Account
                                        </button>
                                    </div>
                                    <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">Already have an account? <a href="<?= base_url('auth'); ?>">Login!</a></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- success Popup html Start -->
    <button type="button" id="success-modal-btn" hidden data-toggle="modal" data-target="#success-modal" data-backdrop="static">Launch modal</button>
    <!-- success Popup html End -->
    <!-- js -->
    <script src="<?= base_url('assets/'); ?>vendors/scripts/core.js"></script>
    <script src="<?= base_url('assets/'); ?>vendors/scripts/script.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendors/scripts/process.js"></script>
    <script src="<?= base_url('assets/'); ?>vendors/scripts/layout-settings.js"></script>
    <script src="<?= base_url('assets/'); ?>src/plugins/jquery-steps/jquery.steps.js"></script>
    <script src="<?= base_url('assets/'); ?>vendors/scripts/steps-setting.js"></script>
</body>

</html>