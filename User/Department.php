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

  <title>Departments</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

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
      $(".box").click(function(){
        $(".DepName").html($(this).children("p").text());
        $(".depabout").html($(this).children("h2").text());
        let pre='../demo/';
        let path=pre.concat($(this).children("h1").text());
        $(".depimg").attr('src', path);;
      })
    })
  </script>

  <style type="text/css">
        .department {
          padding: 80px 0 65px;
        }

        .department .department-top h4 {
          color: #222222;
          font-weight: 600;
          text-transform: uppercase;
          margin-bottom: 5px;
          position: relative;
        }

        .department .department-top h4:before {
          position: absolute;
          content: '';
          background: #00a3c8;
          width: 30px;
          height: 3px;
          bottom: 0;
          left: 50%;
          margin-left: -35px;
          margin-bottom: -23px;
        }

        .department .department-top h4:after {
          position: absolute;
          content: '';
          background: #00a3c8;
          width: 30px;
          height: 3px;
          bottom: 0;
          right: 50%;
          margin-right: -33px;
          margin-bottom: -23px;
        }

        .department .department-top img {
          margin-bottom: 5px;
        }

        .department .department-top p {
          font-size: 16px;
          color: #969696;
          max-width: 550px;
          margin: auto;
          line-height: 28px;
          margin-bottom: 75px;
        }

        .department .nav {
          padding-left: 15px;
        }

        .department .nav a.nav-link {
          width: 47%;
          height: 110px;
          text-align: center;
          -webkit-border-radius: 2px;
          -moz-border-radius: 2px;
          -ms-border-radius: 2px;
          border-radius: 2px;
          -webkit-box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
          box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
          padding-top: 18px;
        }

        .department .nav a.nav-link img {
          max-width: 42px;
          margin-bottom: 10px;
        }

        .department .nav a.nav-link p {
          font-size: 15px;
          color: #222222;
          font-weight: 600;
          text-transform: uppercase;
        }

        .department .nav a.active {
          -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        }

        .department .nav a.active p {
          color: #00a3c8;
        }

        .department .tab-content .tab-pane {
          padding: 18px 25px 22px;
          -webkit-box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
          box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        }

        .department .tab-content .tab-pane .box-heading h4 {
          color: #222222;
          font-weight: 600;
          margin-bottom: 12px;
        }

        .department .tab-content .tab-pane .content-box p {
          font-size: 16px;
          line-height: 32px;
          margin-bottom: 20px;
        }

        .department .tab-content .tab-pane .content-box p span {
          display: block;
          font-size: 15px;
          color: #969696;
          margin-top: 10px;
        }

        .department .tab-content .tab-pane .content-box ul li {
          font-size: 15px;
          color: #969696;
          margin-bottom: 12px;
        }

        .department .tab-content .tab-pane .content-box ul li i {
          color: #00a3c8;
          margin-right: 8px;
        }

        .department .tab-content .tab-pane .image-box img {
          margin-top: 10px;
          margin-bottom: 20px;
        }

        .department .tab-content .tab-pane .image-box a {
          font-size: 16px;
          color: #00a3c8;
          font-weight: 600;
          padding: 8px 30px;
          border: 1px solid #00a3c8;
          -webkit-border-radius: 25px;
          -moz-border-radius: 25px;
          -ms-border-radius: 25px;
          border-radius: 25px;
          float: right;
        }

        .department .tab-content .tab-pane .image-box a:hover {
          background: #00a3c8;
          color: #fff;
        }

        /* ====================
        ##. Department Area 2
        ==================== */
        .department-area2 {
          padding: 80px 0 0;
        }

        .department-area2 .department2-top h4 {
          color: #222222;
          font-weight: 600;
          text-transform: uppercase;
          margin-bottom: 5px;
          position: relative;
        }

        .department-area2 .department2-top h4:before {
          position: absolute;
          content: '';
          background: #00a3c8;
          width: 30px;
          height: 3px;
          bottom: 0;
          left: 50%;
          margin-left: -35px;
          margin-bottom: -23px;
        }

        .department-area2 .department2-top h4:after {
          position: absolute;
          content: '';
          background: #00a3c8;
          width: 30px;
          height: 3px;
          bottom: 0;
          right: 50%;
          margin-right: -33px;
          margin-bottom: -23px;
        }

        .department-area2 .department2-top img {
          margin-bottom: 5px;
        }

        .department-area2 .department2-top p {
          font-size: 16px;
          color: #969696;
          max-width: 550px;
          margin: auto;
          line-height: 28px;
          margin-bottom: 75px;
        }

        .department-area2 .nav {
          padding-left: 15px;
          margin-bottom: 30px;
        }

        .department-area2 .nav a.nav-link {
          width: 18%;
          height: 125px;
          text-align: center;
          -webkit-border-radius: 2px;
          -moz-border-radius: 2px;
          -ms-border-radius: 2px;
          border-radius: 2px;
          border: 1px solid #eeeeee;
          padding-top: 26px;
        }

        .department-area2 .nav a.nav-link img {
          max-width: 42px;
          margin-bottom: 10px;
        }

        .department-area2 .nav a.nav-link p {
          font-size: 15px;
          color: #222222;
          font-weight: 600;
          text-transform: uppercase;
        }

        .department-area2 .nav a.active {
          border-color: #dddddd;
        }

        .department-area2 .nav a.active p {
          color: #00a3c8;
        }

        .department-area2 .tab-content .tab-pane {
          padding: 18px;
          border: 1px solid #eeeeee;
        }

        .department-area2 .tab-content .tab-pane .image-box a {
          font-size: 16px;
          color: #00a3c8;
          font-weight: 600;
          padding: 8px 30px;
          border: 1px solid #00a3c8;
          -webkit-border-radius: 25px;
          -moz-border-radius: 25px;
          -ms-border-radius: 25px;
          border-radius: 25px;
          float: right;
        }

        .department-area2 .tab-content .tab-pane .image-box a:hover {
          background: #00a3c8;
          color: #fff;
        }

        .department-area2 .tab-content .tab-pane .content-box h4 {
          color: #222222;
          font-weight: 600;
          margin-bottom: 12px;
        }

        .department-area2 .tab-content .tab-pane .content-box p {
          font-size: 16px;
          line-height: 32px;
          margin-bottom: 20px;
        }

        .department-area2 .tab-content .tab-pane .content-box p span {
          display: block;
          color: #969696;
          margin-top: 10px;
        }

        .department-area2 .tab-content .tab-pane .content-box ul {
          margin-bottom: 35px;
        }

        .department-area2 .tab-content .tab-pane .content-box ul li {
          font-size: 15px;
          color: #969696;
          margin-bottom: 12px;
        }

        .department-area2 .tab-content .tab-pane .content-box ul li i {
          color: #00a3c8;
          margin-right: 8px;
        }

        .department-area2 .tab-content .tab-pane .content-box a {
          font-size: 16px;
          color: #00a3c8;
          font-weight: 600;
          padding: 8px 30px;
          border: 1px solid #00a3c8;
          -webkit-border-radius: 25px;
          -moz-border-radius: 25px;
          -ms-border-radius: 25px;
          border-radius: 25px;
        }

        .department-area2 .tab-content .tab-pane .content-box a:hover {
          background: #00a3c8;
          color: #fff;
        }

        .department-padding {
          padding-bottom: 88px;
        }

        /* ====================
        ##. Department Area 3
        ==================== */
        .department-area3 {
          padding: 80px 0 52px;
        }

        .department-area3 .department3-top h4 {
          color: #222222;
          font-weight: 600;
          text-transform: uppercase;
          margin-bottom: 5px;
          position: relative;
        }

        .department-area3 .department3-top h4:before {
          position: absolute;
          content: '';
          background: #00a3c8;
          width: 30px;
          height: 3px;
          bottom: 0;
          left: 50%;
          margin-left: -35px;
          margin-bottom: -23px;
        }

        .department-area3 .department3-top h4:after {
          position: absolute;
          content: '';
          background: #00a3c8;
          width: 30px;
          height: 3px;
          bottom: 0;
          right: 50%;
          margin-right: -33px;
          margin-bottom: -23px;
        }

        .department-area3 .department3-top img {
          margin-bottom: 5px;
        }

        .department-area3 .department3-top p {
          font-size: 16px;
          color: #969696;
          max-width: 550px;
          margin: auto;
          line-height: 28px;
          margin-bottom: 75px;
        }

        .department-area3 .department-box {
          padding: 22px 25px;
          -webkit-border-radius: 3px;
          -moz-border-radius: 3px;
          -ms-border-radius: 3px;
          border-radius: 3px;
          -webkit-box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
          box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
          -webkit-transition: 0.2s ease;
          -moz-transition: 0.2s ease;
          -ms-transition: 0.2s ease;
          -o-transition: 0.2s ease;
          transition: 0.2s ease;
          margin-bottom: 30px;
        }

        .department-area3 .department-box .box-icon img {
          max-width: 50px;
          margin-right: 30px;
          margin-top: 5px;
        }

        .department-area3 .department-box .box-content h5 {
          color: #222222;
          text-transform: uppercase;
          font-weight: 600;
          margin-bottom: 7px;
        }

        .department-area3 .department-box .box-content p {
          font-size: 15px;
          color: #666666;
          line-height: 25px;
          margin-bottom: 7px;
        }

        .department-area3 .department-box .box-content a {
          color: #00a3c8;
          font-weight: 600;
        }

        .department-area3 .department-box .box-content a:hover {
          color: #008FD5;
        }

        .department-area3 .department-box:hover {
          -webkit-box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
          box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        /* ====================
        ##. Department Area 4
        ==================== */
        .department-area4 {
          padding: 80px 0 52px;
        }

        .department-area4 .department4-top h4 {
          color: #222222;
          font-weight: 600;
          text-transform: uppercase;
          margin-bottom: 5px;
          position: relative;
        }

        .department-area4 .department4-top h4:before {
          position: absolute;
          content: '';
          background: #00a3c8;
          width: 30px;
          height: 3px;
          bottom: 0;
          left: 50%;
          margin-left: -35px;
          margin-bottom: -23px;
        }

        .department-area4 .department4-top h4:after {
          position: absolute;
          content: '';
          background: #00a3c8;
          width: 30px;
          height: 3px;
          bottom: 0;
          right: 50%;
          margin-right: -33px;
          margin-bottom: -23px;
        }

        .department-area4 .department4-top img {
          margin-bottom: 5px;
        }

        .department-area4 .department4-top p {
          font-size: 16px;
          color: #969696;
          max-width: 550px;
          margin: auto;
          line-height: 28px;
          margin-bottom: 75px;
        }

        .department-area4 .department-box {
          border: 1px solid #eeeeee;
          padding: 30px 25px 40px;
          -webkit-border-radius: 3px;
          -moz-border-radius: 3px;
          -ms-border-radius: 3px;
          border-radius: 3px;
          -webkit-transition: 0.2s ease;
          -moz-transition: 0.2s ease;
          -ms-transition: 0.2s ease;
          -o-transition: 0.2s ease;
          transition: 0.2s ease;
          margin-bottom: 35px;
        }

        .department-area4 .department-box .box-icon {
          background: #eeeeee;
          width: 90px;
          height: 90px;
          -webkit-border-radius: 50%;
          -moz-border-radius: 50%;
          -ms-border-radius: 50%;
          border-radius: 50%;
          margin: auto;
          margin-bottom: 25px;
        }

        .department-area4 .department-box .box-icon img {
          max-width: 45px;
          margin-top: 22px;
        }

        .department-area4 .department-box .box-content h5 {
          color: #222222;
          text-transform: uppercase;
          font-weight: 600;
          margin-bottom: 15px;
        }

        .department-area4 .department-box .box-content p {
          font-size: 15px;
          color: #969696;
          line-height: 25px;
          margin-bottom: 25px;
        }

        .department-area4 .department-box .box-content a {
          color: #00a3c8;
          border: 1px solid #eeeeee;
          padding: 8px 20px;
          -webkit-border-radius: 30px;
          -moz-border-radius: 30px;
          -ms-border-radius: 30px;
          border-radius: 30px;
        }

        .department-area4 .department-box .box-content a:hover {
          background: #00a3c8;
          color: #fff;
          border-color: #00a3c8;
        }

        .department-area4 .department-box:hover {
          -webkit-box-shadow: 0 8px 15px rgba(0, 0, 0, 0.07);
          box-shadow: 0 8px 15px rgba(0, 0, 0, 0.07);
        }
  </style>

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
          <li><a class="nav-link scrollto active" href="#">Departments</a></li>
          <li><a class="nav-link scrollto" href="Doctor.php">Doctors</a></li>
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
          <h2>Departments</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Departments</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="department">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="department-top text-center mb-5">
                            <h4>Our Departments</h4>
                            <img src="images/heartbeat.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3 nav">
                                <?php
                                  include_once("../demo/connection.php");
                                  $query="SELECT * from doctorspecialization";
                                  $execute=mysqli_query($con,$query);
                                  while($row=mysqli_fetch_assoc($execute)){
                                    
                                    ?>

                                    <a class="nav-link mx-2 box">
                                    <h2 class="about" style="display: none;"><?php echo $row['About']?></h2>
                                    <h1 style="display: none;"><?php echo $row['image'] ?></h1>
                                    <img src="<?php echo '../demo/'.$row['icon']; ?>"  alt="">
                                    <p class="specializationname"><?php echo $row['Specialization']?>
                                      
                                    </p>


                                    </a>
                                    <?php
                                  }
                                ?>
                            </div>
                            <div class="col-md-9 tab-content">
                                <div class="tab-pane fade active show" id="gastro" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-12 box-heading">
                                            <h4 class="DepName">Cardiology</h4>
                                        </div>
                                        <div class="col-md-7 content-box">
                                            <p class="depabout">Cardiology is a medical specialty and a branch of internal medicine concerned with disorders of the heart. It deals with the diagnosis and treatment of such conditions as congenital heart defects, coronary artery disease, electrophysiology, heart failure and valvular heart disease.
                                            </p>

                                        </div>
                                        <div class="col-md-5 image-box">
                                            <img src="assets/img/tab-4.jpg" alt="" class="img-fluid depimg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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