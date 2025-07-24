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

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../assets/styles/main.css" rel="stylesheet">

</head>

<body class="starter-page-page">

    <?php
    include_once("../includes/symbol-bg.php");
    include_once('../includes/header.php');
    ?>

  <main class="main resume-page">

    <!-- Resume Section -->
    <section id="resume-section" class="resume-section">

      <!-- Section Title -->
      <div class="container section-title resume-title-flex" data-aos="fade-up">
        <div class="top-bar">
      <h2><i class="bi bi-file-earmark-person navicon"></i> Resume</h2> 
      <div class="download-btn">
        <a href="../assets/files/cv.pdf" download="Lance_Magollado_Resume.pdf"><i class="bi bi-download navicon"></i> Download</a>
      </div><!-- End Section Title -->
        </div>
          
    </div>

      <div class="container" data-aos="fade-up">
        <div class="pdf-viewer-container">
<canvas id="pdf-canvas"></canvas>
<div class="pdf-controls">
  <button onclick="prevPage()">❮</button>
  <span>Page <span id="page-num">1</span> / <span id="page-count">1</span></span>
  <button onclick="nextPage()">❯</button>
  <button onclick="zoomOut()">-</button>
  <button onclick="resetZoom()">Reset</button>
  <button onclick="zoomIn()">+</button>
</div>      
</div>
      <!-- <div class="container get-in-touch" data-aos="fade-up">
        <h3>Get in Touch</h3>
        <p>If you have any questions or would like to get in touch, feel free to reach out!</p>
      </div> -->
    </section><!-- /Starter Section Section -->

  </main>
<script src="../assets/vendor/pdfjs/build/pdf.js"></script>
<script>
      // PDF Viewer functionality
      document.addEventListener('DOMContentLoaded', function () {
      const url = '../assets/files/cv.pdf'; // Change this to your PDF path

            let pdfDoc = null,
                pageNum = 1,
                pageRendering = false,
                pageNumPending = null,
                scale = 1,
                canvas = document.getElementById('pdf-canvas'),
                ctx = canvas.getContext('2d');

            pdfjsLib.GlobalWorkerOptions.workerSrc = '../assets/vendor/pdfjs/build/pdf.worker.js';

            function renderPage(num) {
                pageRendering = true;
                
                // Clear canvas
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                
                // Get fixed container dimensions (from CSS)
                const container = document.querySelector('.pdf-viewer-container');
                const availableWidth = container.clientWidth - 40; // Account for padding
                const availableHeight = container.clientHeight - 40;

                pdfDoc.getPage(num).then(function(page) {
                    // Get page dimensions at scale=1
                    const viewport = page.getViewport({ scale: 1 });
                    
                    // Calculate base scale to fit width (maintain aspect ratio)
                    const baseScale = availableWidth / viewport.width;
                    
                    // Apply current zoom level
                    const currentScale = baseScale * scale;
                    const scaledViewport = page.getViewport({ scale: currentScale });
                    
                    // Set canvas dimensions (will be larger than container when zoomed in)
                    canvas.width = scaledViewport.width;
                    canvas.height = scaledViewport.height;
                    
                    // Render PDF
                    const renderContext = {
                        canvasContext: ctx,
                        viewport: scaledViewport
                    };
                    
                    page.render(renderContext).promise.then(function() {
                        pageRendering = false;
                        if (pageNumPending !== null) {
                            renderPage(pageNumPending);
                            pageNumPending = null;
                        }
                    });
                });
                
                document.getElementById('page-num').textContent = num;
            }

            function queueRenderPage(num) {
                if (pageRendering) {
                    pageNumPending = num;
                } else {
                    renderPage(num);
                }
            }

            window.prevPage = function () {
                if (pageNum <= 1) return;
                pageNum--;
                queueRenderPage(pageNum);
            }

            window.nextPage = function () {
                if (pageNum >= pdfDoc.numPages) return;
                pageNum++;
                queueRenderPage(pageNum);
            }

            window.zoomIn = function () {
                scale += 0.1;
                queueRenderPage(pageNum);
            }

            window.zoomOut = function () {
                if (scale <= 0.5) return;
                scale -= 0.1;
                queueRenderPage(pageNum);
            }

            window.resetZoom = function () {
                scale = 1;
                queueRenderPage(pageNum);
            }

            pdfjsLib.getDocument(url).promise.then(function(pdfDoc_) {
                pdfDoc = pdfDoc_;
                document.getElementById('page-count').textContent = pdfDoc.numPages;
                renderPage(pageNum);
            }).catch(function(error) {
                console.error('Error loading PDF:', error);
                // Fallback to placeholder content if PDF fails to load
                canvas.width = 600;
                canvas.height = 800;
                
                ctx.fillStyle = '#ffffff';
                ctx.fillRect(0, 0, canvas.width, canvas.height);
                
                ctx.fillStyle = '#ff0000';
                ctx.font = '16px Arial';
                ctx.textAlign = 'center';
                ctx.fillText('PDF not found. Please place your cv.pdf file in the same directory.', canvas.width/2, canvas.height/2);
                
                document.getElementById('page-count').textContent = '1';
            });
        });

        // Responsive adjustments
        function handleResize() {
            const canvas = document.getElementById('pdf-canvas');
            
            if (window.innerWidth <= 768) {
                canvas.style.maxWidth = '100%';
            } else {
                canvas.style.maxWidth = '80%';
            }
        }

        window.addEventListener('resize', handleResize);
        handleResize(); // Call on load
</script>
<?php
include_once('../includes/preloader.php');
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