<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>BuiltByLance</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Logo-modified.png" rel="icon">


  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/styles/main.css" rel="stylesheet">

</head>

<body >

  <header id="header" class="header d-flex flex-column justify-content-center">

    <i class="header-toggle d-xl-none bi bi-list" data-aos="zoom-out"></i>

    <?php
    include_once("includes/navbar.php");
    ?>
  </header>

  <main class="main">
    <!-- Hero Section -->
    <?php
    include_once("sections/hero.php");
    ?>
    <!-- /Hero Section -->


    <!-- About Section -->
     <?php
     include_once("sections/about.php");
     ?>
    <!-- /About Section -->

    <!-- Skills Section -->
    <?php
    include_once("sections/skills.php");
    ?>
    <!-- /Skills Section -->
    <!-- Stats Section -->
    <?php
    // include_once("sections/stats.php");
    ?>
    <!-- /Stats Section -->


    <!-- Resume Section -->
     <?php
     include_once("sections/resume.php");
     ?>
    <!-- /Resume Section -->


    <!-- Portfolio Section -->
     <?php
     include_once("sections/portfolio.php");
     ?>
    <!-- /Portfolio Section -->


    <!-- Services Section -->
     <?php
     include_once("sections/services.php");
     ?>
    <!-- /Services Section -->


    <!-- Testimonials Section -->
    <?php
    // include_once("sections/testimonials.php");
    ?>
    <!-- /Testimonials Section -->


    <!-- Contact Section -->
     <?php
     include_once("sections/contact.php");
     ?>
   <!-- /Contact Section -->
  </main>


  <!-- Footer Section -->
  <?php
  include_once("includes/footer.php");
  ?>
  <!-- /Footer Section -->


    <?php
    include_once("includes/scroll-top.php");
    ?>

  <!-- Preloader -->
  <div id="preloader">
    <div class="preloader-inner">
      <div class="preloader-progress-wrap">
        <svg class="preloader-progress" width="90" height="90" viewBox="0 0 90 90">
          <defs>
            <linearGradient id="preloader-gradient" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" stop-color="#1e3c72"/>
              <stop offset="50%" stop-color="#f46b45"/>
              <stop offset="100%" stop-color="#eea849"/>
            </linearGradient>
          </defs>
          <circle class="preloader-bg" cx="45" cy="45" r="40" stroke-width="8" fill="none" />
          <circle class="preloader-bar" cx="45" cy="45" r="40" stroke-width="8" fill="none" stroke="url(#preloader-gradient)" />
        </svg>
        <img src="assets/img/Logo-modified.png" alt="Logo" class="preloader-logo swing-effect">
      </div>
      <div class="preloader-title">BuiltByLance</div>
    </div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>