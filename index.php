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

  <script src="https://cdn.jsdelivr.net/npm/vanilla-tilt@1.8.1/dist/vanilla-tilt.min.js"></script>
</head>

<body >
  <!-- Animation Symbol -->
   <?php
   include_once("includes/symbol-bg.php");
   ?>
   <!-- /Animation Symbol -->

  <header id="header" class="header d-flex flex-column justify-content-center">

    <i class="header-toggle d-xl-none bi bi-list"></i>

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
    //  include_once("sections/services.php");
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

  <?php
  include_once("includes/preloader.php");
  ?>

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