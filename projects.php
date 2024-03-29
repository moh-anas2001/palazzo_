<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Palazzo - Projects</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!--  <link href="assets/img/favicon.png" rel="icon"> {% endcomment %} -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/palazzo-logo.png" alt="">
        <!-- <h1>UpConstruction<span>.</span></h1> -->
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="projects.php" class="active">Projects</a></li>
          <!-- <li><a href="blog.php">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url(assets/img/breadcrumbs-bg.jpg);">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Projects</h2>


      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All Projects</li>
            <li data-filter=".filter-civilworks">Civil Projects</li>
            <li data-filter=".filter-interiorworks">Interior Projects</li>
            <!-- <li data-filter=".filter-mepworks">MEP Works</li> -->
            <!-- <li data-filter=".filter-design">Design</li> -->
          </ul><!-- End Projects Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-4 col-md-6 portfolio-item {{proj.section_name}}" id="filter-cilvilworks">
              <div class="portfolio-content h-100">
                <img src="kj" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <!-- <h4></h4>  -->
                  <p>p name</p>
                  <a href="jj" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                </div>
              </div>
            </div><!-- End Projects Item -->


            <div class="col-lg-4 col-md-6 portfolio-item filter-civilworks" id="filter-cilvilworks">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/south shamkha.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Civil works 2</h4>
                  <p>South Shamkha</p>
                  <a href="assets/img/projects/south shamkha.jpg" title="Civil works 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                </div>
              </div>
            </div>
            <!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-civilworks" id="filter-cilvilworks">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/banayas west.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Civil Works 3</h4>
                  <p>Private Villa: Mr.O.Z</p>
                  <a href="assets/img/projects/banayas west.jpg" title="Civil works 3" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                </div>
              </div>
            </div>
            <!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-civilworks" id="filter-cilvilworks">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/Shamkha.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Civil Works 4</h4>
                  <p>Shamkha</p>
                  <a href="assets/img/projects/Shamkha.jpg" title="cilvil works 4" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-civilworks" id="filter-cilvilworks">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/Madinet Al Riyadh.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Civil Works 5</h4>
                  <p>Madinat Al Riyadh</p>
                  <a href="assets/img/projects/Madinet Al Riyadh.jpg" title="civil works 5" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-civilworks" id="filter-cilvilworks">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/South a Shamkha.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Civil Works 6</h4>
                  <p>South A Shamkha</p>
                  <a href="assets/img/projects/South a Shamkha.jpg" title="civil works 6" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-civilworks" id="filter-cilvilworks">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/Shakboot.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Civil Works 7</h4>
                  <p>Private Villa: MSH.Q</p>
                  <a href="assets/img/projects/Shakboot.jpg" title="civil works 7" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-civilworks" id="filter-mepworks">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/Alrahb farm-74 MEP.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>MEP Works 1</h4>
                  <p>Alrahb farm-74</p>
                  <a href="assets/img/projects/Alrahb farm-74 MEP.png" title="MEP Works 1" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-civilworks">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/Private majlis- Hadd Alsadhiyath MEP.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>MEP Works 2</h4>
                  <p>Private Majllis_Hadd Alsaadiyat</p>
                  <a href="assets/img/projects/Private majlis- Hadd Alsadhiyath MEP.png" title="MEP Works 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-interiorworks" id="filter-interiorworks">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/conference room-Liwa tower.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Interior works 1</h4>
                  <p>Conference room</p>
                  <a href="assets/img/projects/conference room-Liwa tower.png" title="Interior Works 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-interiorworks">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/mde of love cafe-shikh fatima.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Interior works2</h4>
                  <p>Made of love cafe</p>
                  <a href="assets/img/projects/mde of love cafe-shikh fatima.png" title="Interior Works 2" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-interiorworks">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/al dimashqi restaurant.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Interior works 3</h4>
                  <p>Al Dimashqi Resturant</p>
                  <a href="assets/img/projects/al dimashqi restaurant.png" title="Interior Works 3" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-interiorworks">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/resident villa - UAE Al riyadh.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Interior works 4</h4>
                  <p>Resident villa</p>
                  <a href="assets/img/projects/resident villa - UAE Al riyadh.png" title="Interior Works 4" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-interiorworks">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/ASA L.L.C.png.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Interior works 5</h4>
                  <p>ASA L.L.C - Offices</p>
                  <a href="assets/img/projects/ASA L.L.C.png.jpg" title="Interior Works 5" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-interiorworks">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/Resident villa- Banyas- Alwathba south.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Interior works 6</h4>
                  <p>Resident villa</p>
                  <a href="assets/img/projects/Resident villa- Banyas- Alwathba south.png" title="Interior Works 6" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-interiorworks">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/south shamkha plot 101 rd 17.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Interior works 7</h4>
                  <p>Resident villa</p>
                  <a href="assets/img/projects/south shamkha plot 101 rd 17.png" title="Interior Works 7" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-interiorworks">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/SOUTH SHAMKHA.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Interior works 8</h4>
                  <p>Resident villa</p>
                  <a href="assets/img/projects/SOUTH SHAMKHA.png" title="Interior Works 8" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="project-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                </div>
              </div>
            </div>
            <!-- End Projects Item -->

          </div><!-- End Projects Container -->

        </div>

      </div>
    </section><!-- End Our Projects Section -->

  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <footer id="footer" style="margin-top: 50px;">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-content">
            <h4 style="font-size: 19px;">Address</h4>
            <ul class="list-unstyled footer-link">
              <li class="d-flex">
                <span class="me-0"></span><span class="text-white">Mezzanine Floor Office no: 3<br>Mohamed Amanalla Husain<br>Khouri And his Children Building,<br>Al Nahyan, Abu Dhabi<br>United Arab Emirates</span>
              </li>
              <li class="d-flex" style="padding-top:0.5cm;">
                <span class="me-0"></span><span class="text-white">Mob&nbsp;:&nbsp;&nbsp;+971529933610<br>Tel&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;+97126736310</span>
              </li>
              <li class="d-flex" style="padding-top:0.5cm;">
                <span class="me-0">Email&nbsp;:&nbsp;</span><span class="text-white">info@palazzouae.com</span>

              </li>
            </ul>
          </div>



          <div class="col-lg-3 col-md-6 footer-links">
            <h4 style="font-size: 19px;">Useful Links</h4>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="services.php">Services</a></li>
              <li><a href="projects.php">Projects</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div>



          <div class="col-lg-3 col-md-6 footer-links">
            <h4 style="font-size: 19px;">Our Services</h4>
            <ul>
              <li><a href="services.php#alt-services-2">General Construction</a></li>
              <li><a href="services.php#alt-services">Interior Design & Fitout</a></li>
              <li><a href="services.php#alt-services-3">MEP Services</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4 style="font-size: 19px;">Our Social Network</h4>

            <div class="social-links mt-3">
              <ul class="list-unstyled footer-link d-flex footer-social">
                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li><a href="https://instagram.com/palazzo.general.contracting?igshid=MzRlODBiNWFlZA=="><span class="fa fa-instagram"></span></a></li>
                <li><a href="https://www.linkedin.com/in/palazzo-general-contracting-17218a291/"><span class="fa fa-linkedin"></span></a></li>
                <li><a href="https://wa.me/+971529933610"><span class="fa fa-whatsapp"></span></a></li>
                <li><a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a></li>


              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><a href="https://www.dacentrictechnologies.com/" target="_blank">DaCentric Technologies</strong></a> All Rights Reserved
      </div>

    </div>
  </footer>


  <!-- <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>UpConstruction</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>End footer info column -->

  <!-- <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
               <li><a href="#">Privacy policy</a></li> -->
  <!-- </ul> -->
  <!-- </div>End footer links column -->

  <!-- <div class="col-lg-2 col-md-3 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Web Development</a></li>
              <li><a href="#">Product Management</a></li> -->
  <!-- <li><a href="#">Marketing</a></li> -->
  <!-- <li><a href="#">Graphic Design</a></li> -->
  <!-- </ul>
          </div>End footer links column  -->



  <!-- </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>DaCentric Technologies</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
  <!-- You can delete the links only if you purchased the pro version. -->
  <!-- Licensing information: https://bootstrapmade.com/license/ -->
  <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
  <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>

  </footer> -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>