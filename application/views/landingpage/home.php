 <!-- ======= Hero No Slider Section ======= -->
 <?php foreach ($getJumbotron as $gJ) : ?>
     <section id="hero-no-slider" class="d-flex justify-cntent-center align-items-center" style="background-image: url('<?= base_url('assets/img/' . $gJ['image']); ?>')">
     <?php endforeach; ?>
     <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
         <div class="row justify-content-center">
             <div class="col-xl-8">
                 <h1 class="h1-title">PT. <span>KHALIFAH</span> BORNEO MANDIRI</h1>
                 <h1 class="h2-title">Supplier Unit, Maintenance, Dan Sparepart</h1>
                 <h1 class="h3-title">ELEVATOR, ESCALATOR, TRAVELATOR, HOME LIFT, DUMBWAITER, HOIST LIFT</h1>
                 <a href="<?= base_url('id/about-us'); ?>" class="myButton">Read More</a>
             </div>
         </div>
     </div>
     </section><!-- End Hero No Slider Sectio -->

     <main id="main">

         <!-- ======= Services Section ======= -->
         <section class="services">
             <div class="container">
                 <div class="row">
                     <?php foreach ($getDataService as $gDS) : ?>
                         <div class="col-md-12 col-lg-4 d-flex align-items-stretch" data-aos="fade-up">
                             <div class="icon-box icon-box-green">
                                 <div class="icon"><i class="<?= $gDS['icon']; ?>"></i></div>
                                 <h1 class="p-title"><?= $gDS['title']; ?></h1>
                                 <p class="description-title"><?= $gDS['keterangan']; ?></p>
                             </div>
                         </div>
                     <?php endforeach; ?>
                 </div>
             </div>
         </section><!-- End Services Section -->

         <!-- ======= banner Section ======= -->
         <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
             <div class="container">
                 <?php foreach ($getDataBannerHome as $gDBH) : ?>
                     <div class="row">
                         <div class="col-lg-6 video-box">
                             <img src="<?= base_url('assets/img/landingpage/' . $gDBH['image']); ?>" class="img-fluid" alt="">
                         </div>
                         <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
                             <h1 class="h6-title myPrimary"><a href=""><?= $gDBH['title']; ?></a></h1>
                             <p class="p-description mt-2"><?= $gDBH['keterangan']; ?></p>
                         </div>
                     </div>
                 <?php endforeach; ?>
             </div>
         </section><!-- End banner Section -->

         <!-- ======= Features Section ======= -->
         <section class="features">
             <div class="container">
                 <?php foreach ($getDataFeatures1 as $gDBH) : ?>
                     <div class="row" data-aos="fade-up">
                         <div class="col-md-5 text-center">
                             <img src="<?= base_url('assets/img/landingpage/' . $gDBH['image']); ?>" class="img-fluid w-75" alt="">
                         </div>
                         <div class="col-md-7 pt-4">
                             <h1 class="h6-title">Elevator</h1>
                             <p class="p-description mt-2"><?= $gDBH['keterangan']; ?>
                                 <a href="https://api.whatsapp.com/send?phone=<?= $profile['telp']; ?>" target="_blank" class="myButtonPrimary"><?= $gDBH['tombol']; ?></a>
                         </div>
                     </div>
                 <?php endforeach; ?>
                 <?php foreach ($getDataFeatures2 as $gDBH) : ?>
                     <div class="row" data-aos="fade-up">
                         <div class="col-md-5 order-1 order-md-2">
                             <img src="<?= base_url('assets/img/landingpage/' . $gDBH['image']); ?>" class="img-fluid" alt="">
                         </div>
                         <div class="col-md-7 pt-5 order-2 order-md-1">
                             <h1 class="h6-title"><?= $gDBH['title']; ?></h1>
                             <p class="p-description mt-2"><?= $gDBH['keterangan']; ?></p>
                             <a href="https://api.whatsapp.com/send?phone=<?= $profile['telp']; ?>" target="_blank" class="myButtonPrimary"><?= $gDBH['tombol']; ?></a>
                         </div>
                     </div>
                 <?php endforeach; ?>
             </div>
         </section><!-- End Features Section -->

         <!-- ======= Iklan Section ======= -->
         <section class="banner section-bg" data-aos="fade-up" date-aos-delay="200">
             <div class="container">
                 <?php foreach ($getDataIklan as $gDBH) : ?>
                     <div class="row justify-content-md-center text-center">
                         <div class="col-md-8 content" data-aos="zoom-in" data-aos-duration="1000">
                             <h1 class="h1-banner"><?= $gDBH['title']; ?></h1>
                             <h1 class="h2-banner"><?= $gDBH['sub_title']; ?></h1>
                             <div class="">
                                 <a href="https://api.whatsapp.com/send?phone=6282346964325" target="_blank" class="myButtonPrimary"><?= $gDBH['tombol']; ?></a>
                             </div>
                         </div>
                     </div>
                 <?php endforeach; ?>
             </div>
         </section>
         <!-- End Iklan Section -->

         <!-- ======= Map Section ======= -->
         <section class="map">
             <div class="container">
                 <h1 data-aos="zoom-in" data-aos-duration="1000" class="h6-title">Kunjungin <span>Kantor</span> kami</h1>
                 <h2 data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000" class="h6-title-small">Jl. Indrakila, No. 2, RT. 32, Kel. Gunung Samarinda Baru, Balikpapan, 76128</h2>
             </div>
             <div class="container-fluid p-0">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.895080471477!2d116.85890197366707!3d-1.2326129355670905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df1476daf1b7d13%3A0x7f7ea38343aebbad!2sPT.KHALIFAH%20BORNEO%20MANDIRI!5e0!3m2!1sid!2sid!4v1684138380560!5m2!1sid!2sid" style="border:0;" allowfullscreen="" class="map"></iframe>
             </div>
         </section>
         <!-- End Map Section -->

         <!-- ======= Tetstimonials Section ======= -->
         <section class="our-partner">
             <div class="container">
                 <h1 class="h6-title text-center mb-5"><span>Mitra</span> kami</h1>

                 <div class="logo-slider">
                     <?php foreach ($getPartner as $gDBH) : ?>
                         <div class="items"><img src="<?= base_url('assets/img/partner/' . $gDBH['image']); ?>" alt=""></div>
                     <?php endforeach; ?>
                 </div>
             </div>
         </section>
         <!-- End Ttstimonials Section -->

     </main><!-- End #main -->