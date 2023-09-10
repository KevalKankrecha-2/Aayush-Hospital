<?php
  session_start();
  if (!isset($_SESSION['Email'])) {
    ?>
    <script type="text/javascript">
      window.location.href = "../demo/loginfile.php";
    </script>
    <?php
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Doctors</title>
  <meta content="" name="description">
  <meta content="" name="keywords">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript">
    
  </script>



  <!-- =======================================================
  * Template Name: Medilab - v4.9.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <?php
    include_once 'Topbar.php';
  ?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Aayush</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="Department.php">Departments</a></li>
          <li><a class="nav-link scrollto active" href="#doctors">Doctors</a></li>
          <li><a class="nav-link scrollto" href="Report.php">Reports</a></li>
          <li><a class="nav-link scrollto" href="appointmentPage.php">Appointments</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Doctors</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Doctors</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

        <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Doctors</h2>
        </div>

        <div class="row">

          <?php

          include_once '../demo/connection.php';
          $query="select DoctorName,DoctorFees,ContactNo,DoctorEmail,d.image,Specialization from doctor d,doctorspecialization ds where d.DoctorSpecialicationID=ds.DoctorSpecialicationID";
          $execute=mysqli_query($con,$query);
          while($row=mysqli_fetch_assoc($execute)){
            ?>
              <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="<?php echo "../demo/".$row['image']?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><?php echo $row['DoctorName'] ?></h4>
                <span><?php echo $row['Specialization'] ?></span>
                <div class="" style="display: flex;flex-direction: column;">
                  <div style="display: flex;flex-direction: row;">
                    <a href="" class="m-2"><i class="ri-mail-line"></i></a> 
                    <p><?php echo $row['DoctorEmail']?></p>
                  </div>
                  <div style="display: flex;flex-direction: row;">
                    <a href="" class="m-2"><i class="ri-phone-fill"></i></a>
                    <p><?php echo $row['ContactNo']?></p>
                  </div>
                  <div style="display: flex;flex-direction: row;">
                    <a href="" class="m-2"><i class="ri-money-dollar-circle-fill"></i></a>
                    <p><?php echo $row['DoctorFees']?></p>
                  </div>
                  
                  
                </div>
              </div>
            </div>
          </div>
          <?php
          }

          ?>

        </div>

      </div>
    </section><!-- End Doctors Section -->

  </main><!-- End #main -->

  <?php
    include_once 'Footer.php';
  ?>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>