<!-- ======= Footer ======= -->
<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="footer-top">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-4 col-md-12 footer-links">
                    <h4>Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('id/home'); ?>">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('id/product'); ?>">Product</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('id/maintenance'); ?>">Maintenance</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('id/modernization'); ?>">Modernisasi</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('id/company-profile'); ?>">Company Profile</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('id/about-us'); ?>">About Us</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 footer-links">
                    <h4>Pelayanan Kami</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> On Call 24 Jam</li>
                        <li><i class="bx bx-chevron-right"></i> Service Maintenance 1x perbulan atau 2x perbulan</li>
                        <li><i class="bx bx-chevron-right"></i> Free Pelumasan (Oil Rail)</li>
                        <li><i class="bx bx-chevron-right"></i> Free Standby Event</li>
                        <li><i class="bx bx-chevron-right"></i> Free Biaya Panggilan Error</li>
                        <li><i class="bx bx-chevron-right"></i> Free Biaya Perbaikan Trouble Tidak Termasuk Spare Part</li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                        <strong class="mt-5"><?= $profile['name']; ?></strong> <br>
                        <?= $profile['alamat']; ?> <br> <br>
                        <strong>Phone: </strong> <?= $profile['telp1']; ?><br>
                        <strong>Email: </strong> <?= $profile['email']; ?><br>
                        <strong>Email: </strong> <?= $profile['email1']; ?><br>
                    <div class="social-links mt-3">
                        <a href="<?= $profile['twitter']; ?>" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="<?= $profile['facebook']; ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="<?= $profile['image']; ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
                    </div>
                    </p>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span><?= $profile['name']; ?></span></strong> <?= date('Y'); ?>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

<script src="<?= base_url('assets/'); ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="<?= base_url('assets/'); ?>assets/vendor/aos/aos.js"></script>
<script src="<?= base_url('assets/'); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/'); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= base_url('assets/'); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url('assets/'); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url('assets/'); ?>assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="<?= base_url('assets/'); ?>assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url('assets/'); ?>assets/js/main.js"></script>
<!-- Slick -->

<script>
    $('.logo-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2000,
        Infinite: true,
    });
</script>
</body>

</html>