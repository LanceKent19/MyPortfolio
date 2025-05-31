<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Portfolio Details - E-Strandyante</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/Logo-modified.png" rel="icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../assets/styles/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="portfolio-details-page">

  <header id="header" class="header d-flex flex-column justify-content-center">

    <i class="header-toggle d-xl-none bi bi-list"></i>

    <!-- Navigation Bar -->
     <?php
     include_once("../includes/navbar-dynamic.php");
     ?>
    <!-- /Navigation Bar -->
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container">
        <nav class="breadcrumbs">
          <ol>
            <li><a href="../index.php">Home</a></li>
            <li class="current">Portfolio Details</li>
          </ol>
        </nav>
        <h1>E-Strandyante</h1>
        <p>Academic Strand Assessment Platform for G10 Students</p>
      </div>
    </div><!-- End Page Title -->
    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up">

        <div class="portfolio-details-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
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
          <div class="swiper-wrapper align-items-center">

            <div class="swiper-slide">
              <img src="../assets/img/portfolio/E-Stradyante/E-Stradyante-in-Thumbnail.png" alt="">
            </div>

            <div class="swiper-slide">
              <img src="../assets/img/portfolio/E-Stradyante/Login-Page.png" alt="">
            </div>

            <div class="swiper-slide">
              <img src="../assets/img/portfolio/E-Stradyante/Login-Step1-Student Page.png" alt="">
            </div>

            <div class="swiper-slide">
              <img src="../assets/img/portfolio/E-Stradyante/E-Stradyante-Figma.png" alt="">
            </div>

          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-pagination"></div>
        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8" data-aos="fade-up">
            <div class="portfolio-description">
              <h2 class="project-header">Project Overview</h2>
              <h3></h3>
              <p>
                E-Strandyante is a comprehensive web-based platform specifically designed for 
                Grade 10 students to take detailed assessments that help identify the most 
                suitable academic strand for their senior high school journey. The platform 
                combines advanced psychometric testing with an intuitive user interface to 
                provide personalized recommendations based on students' interests, aptitudes, 
                and career aspirations.
              </p>
              <h2 class="project-header">Design Features & Solutions</h2>
            <div class="features-grid">
                        <div class="feature-card">
                            <div class="feature-icon">🎯</div>
                            <h3 class="feature-title">Multi-Step Assessment Flow</h3>
                            <p class="feature-desc">Designed an intuitive step-by-step questionnaire with progress indicators to reduce cognitive load and assessment anxiety.</p>
                        </div>
                        <div class="feature-card">
                            <div class="feature-icon">🎨</div>
                            <h3 class="feature-title">Youth-Centric UI Design</h3>
                            <p class="feature-desc">Developed a modern, colorful interface that appeals to Gen Z students while maintaining professional credibility.</p>
                        </div>
                        <div class="feature-card">
                            <div class="feature-icon">📚</div>
                            <h3 class="feature-title">Strand Information Hub</h3>
                            <p class="feature-desc">Created comprehensive strand profile pages with career paths, subject previews, and success stories to inform decisions.</p>
                        </div>
                    </div>
              <h2 class = "project-header">Design Challenges & Solutions</h2>
              <p><b>Challenge: </b>How will I design a website that will appeals to Gen Z students?</p>
              <p><b>Solution</b>
               I focus on creating a user interface that resonates with Gen Z’s visual and digital 
               preferences. </p>
               <p>
               My design uses clean layouts, intuitive navigation, and vibrant yet 
               purposeful colors that reflect both energy and clarity. I incorporate modern UI 
               patterns, subtle animations, and responsive components to make the experience smooth 
               across devices. Inspired by Gen Z's love for tech-savvy, minimal, and functional design, 
               I also ensure the interface feels familiar—like an app—while maintaining a professional 
               look aligned with educational systems. The goal is to build trust, engagement, and ease 
               of use from the first click.
              </p>
            </div>
          </div>

          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong> Website UI/UX Design</li>
                <li><strong>Client</strong>Educational Institution</li>
                <li><strong>Project date</strong> 01 September, 2024</li>
                <li><strong>Design Status</strong>Completed                
                <div class="progress-bar">
                        <div class="progress-fill" style="width: 100%;"></div>
                </div>
              </li>

                <li><strong>Duration</strong>2 Weeks</li>
                <li><a href="https://www.figma.com/design/6LyqCjO3CUfR8EqjZY9zUn/Profiling-System-UI?node-id=0-1&p=f&t=Avv8HlusQm7G6JYs-0" target= "_blank" class="btn-visit align-self-start">View Figma Design</a></li>
              </ul>
            </div>
            <div class="portfolio-info">
              <h3>Project Tools</h3>
              <div class="tech-stack">
                <span class="tech-tag">Figma</span>
                <span class="tech-tag">Wireframing</span>
                <span class="tech-tag">Canva</span>
                <span class="tech-tag">Prototyping</span>
                <span class="tech-tag">Usability Testing</span>
              </div>
            </div>
             <div class="portfolio-info related-projects">
              <h3>Related Projects</h3>
              <div class="projects-grid">

                <div class="project-card">
                  <div class="project-thumbnail thumbnail-education">
                    <div class="sample-mockup">
                      <div class="device-mockup"></div>
                      <div class="mockup-title">Example</div>
                      <div class="mockup-subtitle">Example Dashboard</div>
                    </div>
                  </div>
                  <div class="project-content">
                    <div class="project-title">Example hehehe</div>
                    <div class="project-description">
                      blahblashfklaflksfasjfkaslklfsjasjfajkslaksflksajfkjaslfksafkljas
                    </div>
                    <div class="project-meta">
                      <span class="project-category">Education</span>
                      <span class="project-date">01 September, 2024</span>
                    </div>
                  </div>
                </div>
              <div class="project-card">
                  <div class="project-thumbnail thumbnail-education">
                    <div class="sample-mockup">
                      <div class="device-mockup"></div>
                      <div class="mockup-title">Example</div>
                      <div class="mockup-subtitle">Example Dashboard</div>
                    </div>
                  </div>
                  <div class="project-content">
                    <div class="project-title">Example hehehe</div>
                    <div class="project-description">
                      blahblashfklaflksfasjfkaslklfsjasjfajkslaksflksajfkjaslfksafkljassaddddddddddddddddddddddddd
                    </div>
                    <div class="project-meta">
                      <span class="project-category">Education</span>
                      <span class="project-date">01 September, 2024</span>
                    </div>
                  </div>
                </div>

              </div>
             </div>

            <div class="view-all">
              <a href="#" class="view-all-link">
                View All Projects
                <span class="arrow">→</span>
              </a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Portfolio Details Section -->

  </main>

    <!-- Footer -->
     <?php
     include_once("../includes/footer.php");
     ?>
    <!-- /Footer -->

    <!-- Scroll Top -->
     <?php
     include_once("../includes/scroll-top.php");
     ?>
    <!-- Scroll Top -->

  <!-- Preloader -->
  <div id="preloader"></div>

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