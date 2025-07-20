<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Lance Magollado - Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/me-photo/Resume-Icon.png" rel="icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  
  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../assets/styles/main.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/vanilla-tilt@1.8.1/dist/vanilla-tilt.min.js"></script>
</head>

<body >
  <!-- Animation Symbol -->
   <?php
   include_once("../includes/symbol-bg.php");
   ?>
   <!-- /Animation Symbol -->
    
   <?php
   include_once("../includes/header.php");
   ?>
  <main class="main">
    <!-- Main Content -->
     <main id="hero" class="hero section">

             <!-- Text Logo in upper left -->
        <div class="portfolio-img-logo" data-aos="zoom-out">
        </div>
         <!-- Content Wrapper -->
        <div class="content-wrapper">
            <div class="text-content"  data-aos="zoom-out">
                <h1 class="name">Lance Kent Geoffrey Magollado</h1>
                <p class="description" style="font-family: Roboto">I'm a <span class="typed" style="color: #1e3c72; font-weight: 600;"
                data-typed-items="Developer., Freelancer., Designer., Programmer."></span><span
                class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
                <div class="cta-buttons">
                    <a href="#portfolio" class="btn btn-primary">View My Work</a>
                    <!-- <a href="assets/files/cv.pdf" download class="btn btn-secondary">Download CV</a> -->
                </div>
            </div>

            <!-- Image Section -->
            <div class="image-section " data-aos="zoom-out">
                <div class="image-container swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                                    {
                        "loop": true,
                        "speed": 600,
                        "autoplay": {
                            "delay": 3000
                        },
                        "slidesPerView": "auto",
                        "navigation": {
                            "nextEl": ".swiper-button-next",
                            "prevEl": ".swiper-button-prev"
                        },
                        "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                        }
                        }
                        
                    </script>
                    <!-- Replace this src with your actual image -->
                        <div class="swiper-wrapper align-items-center">
                             <div class="swiper-slide">
                                 <img src="../assets/img/me-photo/me-1.png" alt="" class="profile-image">
                             </div>
                             <div class="swiper-slide">
                                 <img src="../assets/img/me-photo/me-2.jpg" alt="" class="profile-image">
                         </div>
                            <div class="swiper-slide">
                            <img src="../assets/img/me-photo/me-3.png" alt="" class="profile-image">
                            </div>
                        </div>
            </div>
        </div>

        <div class="social-icons" data-aos="zoom-out">
              <a href="https://www.figma.com/files/team/1419152086350727549/recents-and-sharing?fuid=1419152081943686518" target="_blank" class="social-icon"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/ikent_lance/" target="_blank" class="social-icon"><i class="bi bi-instagram"></i></a>
              <a href="https://www.linkedin.com/in/lancemagollado" target="_blank" class="social-icon"><i class="bi bi-linkedin"></i></a>
              <a href="https://www.youtube.com/@ransuru_19" target="_blank" class="social-icon"><i class="bi bi-youtube"></i></a>
              <a href="https://x.com/Ikent_Lance" target="_blank" class="social-icon"><i class="fab fa-figma"></i></a>
              <a href="https://github.com/LanceKent19" target="_blank" class="social-icon"><i class="bi bi-github"></i></a>
        </div>
        </div>
     </main>

  </main>
  <?php
  include_once("../includes/preloader.php");
  ?>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/typed.js/typed.umd.js"></script>
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>