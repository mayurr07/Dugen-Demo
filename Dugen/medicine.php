<?php
// include('./forms/fetch/fetchtablet.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medicines</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <!-- <link href="assets/css/style.css" rel="stylesheet"> -->
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css?<?php ?>" />


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="./index.php">Dugen</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="./index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="./About.php">About Us</a></li>
          <li class="dropdown"><a href="#"><span>products</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Medicine</a></li>
          </li>
        </ul>
        <li><a class="nav-link scrollto" href="./Gallery.php">Gallery</a></li>
        </li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        <li><a class="getstarted scrollto" href="./index.php">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <body>
      <!-- ======= Portfolio Details Section ======= -->
      <section id="portfolio-details" class="portfolio-details">
        <h2>Medicines</h2>
        <!-- <p>Click on the buttons inside the tabbed menu:</p> -->

        <div class="tab">
          <button class="tablinks" onclick="openCity(event, 'London')">Tablets</button>
          <button class="tablinks" onclick="openCity(event, 'Paris')">Capsules</button>
          <button class="tablinks" onclick="openCity(event, 'Tokyo')">Oral Liquids</button>
          <button class="tablinks" onclick="openCity(event, 'inject')">Injectables</button>
        </div>

        <div id="London" class="tabcontent">
          <?php
          while ($rows = $result->fetch_assoc()) {
          ?>
            <p><?php echo $rows['name']; ?></p>
          <?php } ?>
        </div>

        <div id="Paris" class="tabcontent">
          <?php
           include('./forms/fetch/fetchcaps.php') ?> 
          <?php
          while ($rows = $result->fetch_assoc()) {
          ?>
            <p><?php echo $rows['name']; ?></p>
          <?php } ?>
        </div>

        <div id="Tokyo" class="tabcontent">
          <?php
          include('./forms/fetch/fetchoral.php') ?>
          <?php
          while ($rows = $result->fetch_assoc()) {
          ?>
            <p><?php echo $rows['name']; ?></p>
          <?php } ?>
        </div>

        <div id="inject" class="tabcontent">
          <?php
          include('./forms/fetch/fetchinject.php') ?>
          <?php
          while ($rows = $result->fetch_assoc()) {
          ?>
            <p><?php echo $rows['name']; ?></p>
          <?php } ?>
        </div>
      </section>

  </main><!-- End #main -->

  <!-- contact us -->

  <section id="contact" class="contact section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Inquiry</h2>
        <!-- <p>We'd love to hear from you.</p> -->
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Our Address</h3>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>Email Us</h3>
            <p>contact@example.com</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>Call Us</h3>
            <p>+91 1234567890</p>
          </div>
        </div>

      </div>

      <div class="row">

        <div class="col-lg-6 ">
          <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7542.957647926574!2d72.86700282471351!3d19.042673948427982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8cbb5e978f3%3A0x5f536a43a0635ff1!2sPratikhsha%20Nagar%2C%20Koliwada%2C%20Sion%2C%20Mumbai%2C%20Maharashtra%20400022!5e0!3m2!1sen!2sin!4v1633771032060!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Medicine" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message or About Medicine" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section>
  <!-- contact us end  -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <!-- <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Dugen</h3>
            <p>
              Lorem ipsum dolor sit.<br>
              Lorem, ipsum dolor.<br>
              Lorem, ipsum. <br><br>
              <strong>Phone:</strong> +09 9999 2222 9<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div> -->

          <div class="col-lg-2 col-md-6 footer-links">
            <h3>dugen</h3>
            <ul>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">products</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
              Armed with the vision to develop a global pharmaceutical company, Dugen Pharma constantly endeavors to
              identify key business players with an edge.
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Contact</h3>
            <p>
              Lorem ipsum dolor sit.<br>
              Lorem, ipsum dolor.<br>
              Lorem, ipsum. <br><br>
              <strong>Phone:</strong> +09 9999 2222 9<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h3>works at</h3>
            <ul>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> -->
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur aut in reprehenderit vero
              accusantium aliquam voluptatibus illo impedit corporis. Sed!
            </ul>
          </div>
          <!-- <div class="col-lg-4 col-md-6 footer-newsletter">s
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div> -->

        </div>
      </div>
    </div>

    <div class="container">

      <div class="copyright-wrap d-md-flex py-4">
        Designed by unknowns <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
      <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
    </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
  </script>

</body>

</html>
