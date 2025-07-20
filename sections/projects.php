
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Lance Magollado - Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/me-photo/Resume-Icon.png" rel="icon">

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
<section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Projects</h2>
        <p>Here are some of the projects I've worked on! From creative designs to hands-on development, each one taught me something new. Feel free to explore and see what I’ve been up to.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Apps</li>
            <li data-filter=".filter-product">Designs</li>
            <li data-filter=".filter-branding">Web</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="../assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="../assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1"
                  data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details/portfolio-details.php" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="../assets/img/masonry-portfolio/E-Stradyante-in-Thumbnail.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>E-Strandyante</h4>
              <p>A web-based platform designed for Grade 10 students to take assessment that help identify the most suitable academic strand for them.</p>
                <a href="../assets/img/masonry-portfolio/E-Stradyante-in-Thumbnail.png" title="E-Strandyante Design Thumbnail"
                  data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details/e-stradyante-design.php" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="../assets/img/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
              <h4>E-Strandyante</h4>
              <p>A web-based platform designed for Grade 10 students to take assessment that help identify the most suitable academic strand for them.</p>
                <a href="../assets/img/masonry-portfolio/masonry-portfolio-3.jpg" title="Branding 1"
                  data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details/portfolio-details.php" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="../assets/img/masonry-portfolio/masonry-portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="../assets/img/masonry-portfolio/masonry-portfolio-4.jpg" title="App 2"
                  data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details/portfolio-details.php" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="../assets/img/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="../assets/img/masonry-portfolio/masonry-portfolio-5.jpg" title="Product 2"
                  data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details/portfolio-details.php" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="../assets/img/masonry-portfolio/masonry-portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="../assets/img/masonry-portfolio/masonry-portfolio-6.jpg" title="Branding 2"
                  data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details/portfolio-details.php" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="../assets/img/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="../assets/img/masonry-portfolio/masonry-portfolio-7.jpg" title="App 3"
                  data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details/portfolio-details.php" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="../assets/img/masonry-portfolio/Food-Delivery-Mobile-App-Thumbnail.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Food Delivery App</h4>
                <p>A mobile design in figma for food delivery mobile application.</p>
                <a href="../assets/img/masonry-portfolio/Food-Delivery-Mobile-App-Thumbnail.png" title="Food Delivery Mobile Applcation Design Thumbnail"
                  data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details/portfolio-details.php" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="../assets/img/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="../assets/img/masonry-portfolio/masonry-portfolio-9.jpg" title="Branding 2"
                  data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details/portfolio-details.php" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section>
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