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
<?php
  session_start();
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Reports</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
    $(document).ready(function(){
      $("#frmuploadreport").on('submit',(function(e){ 

        $.ajax({
          url: "ReportUpload.php",
          type: "POST",
          data: new FormData(this),
          contentType: false, cache: false, processData:false,
          success: function(html){
            alert("Report Uploded Successfully..!!");
          }
        });
        window.location.reload();
      }));
    })
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
          <li><a class="nav-link scrollto" href="Doctor.php">Doctors</a></li>
          <li><a class="nav-link scrollto active" href="#">Report</a></li>
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
          <h2>Reports</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Reports</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Reports</h2>
        </div>

        <div class="row">
          <form method="post" enctype="multipart/form-data" id="frmuploadreport" >
            <div class="col-lg-12 mb-5">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="email" value="<?php echo $_SESSION['Email'];?>" disabled>
            </div>
            <div class="col-lg-6 mb-5">
              <label for="formreporttype" class="form-label">Report Type</label><br>
              <input type="text" name="type" class="form-control" id="type" >
            </div>

            <div class="col-lg-6">
              <div class="mb-3">
                <label for="formFile" class="form-label">Choose Report</label>
                <input class="form-control" type="file" name="file" id="file">
              </div>
            </div>

            <button type="submit" class="btn btn-primary" id="btnupload">Upload</button>
          </form>

        </div>

      </div>
    </section>

    <section class="container">
      <h1>Report history</h1>

      <table class="table table-bordered">
        <thead>
          <tr>
            <td>File Type</td>
            <td>File</td>
            <td>Uploaded Date</td>
          </tr>
        </thead>
        <tbody>
          <?php

          include_once '../demo/connection.php';
          $email=$_SESSION['Email'];
          $query="select * from files where UserEmail='$email'";
          $execute=mysqli_query($con,$query);
          while($row=mysqli_fetch_assoc($execute)){
           ?>
           <tr>
             <td><?php echo $row['ReportType'];?></td>
             <td><a target="_blank" href="<?php echo $row['PDFURL'];?>">View</a></td>
             <td><?php echo $row['FileDateTime'];?></td>
             
           </tr>
           <?php
          }
          ?>
        </tbody>
      </table>
    </section>

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