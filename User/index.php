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
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Aayush-Hospital</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
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
      $("#department").on("change",function(){
       var spe=$(this).val();
        $.ajax({
          type:"POST",
          url:"getdoctorbyspe.php",
          data:"spe="+spe,
          success:function(html)
          {
            $("#doctor").html(html);
         }
       })
      });

     $("#appointmentform").on('submit',(function(e){
     var date=$("#date").val();
     var time=$("#time").val();
     var email=$("#email").val();
     var Specialization = $('#department').find(":selected").val();
     var doctorid=$('#doctor').find(":selected").val();
        $.ajax({
          url: "appointment.php",
          type: "POST",
          data: {date: date, time: time,email: email,Specialization: Specialization,doctorid: doctorid},
          success: function(html){
             alert("Appointment Booked Successfully..!");
             window.location.reload();
          }
        });
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
          <li><a class="nav-link scrollto active" href="#">Home</a></li>
          <li><a class="nav-link scrollto" href="Department.php">Departments</a></li>
          <li><a class="nav-link scrollto" href="Doctor.php">Doctors</a></li>
          <li><a class="nav-link scrollto" href="Report.php">Reports</a></li>
          <li><a class="nav-link scrollto" href="appointmentPage.php">Appointments</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Aayush Hospital</h1>
      <h2>Have A Great Health.</h2>
      <a href="#about" class="btn-get-started scrollto">View More</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose Aayush?</h3>
              <p>
                At Aayush Hospitals, we strive to provide “Best Outcome. Best Experience” for every patient entrusted to our care. Our services to you and your families are guided by Compassion, Communication, Commitment, Collaboration and Consistency – our Quality Behavior Standards.
              </p>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Care and Respect</h4>
                    <p>We respect your personal values, religious and ethnic beliefs and need for personal privacy.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Confidentiality of Records</h4>
                    <p>We are bound by law and professional ethics to keep your medical records, including Electronic Medical Records and all aspects of care rendered to you, strictly confidential.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Your Responsibilities</h4>
                    <p>While we have a responsibility to safeguard your interests as our patient, it is important that you play your part in the entire treatment process. We want to give you the best possible care that meets your needs and to address the anxieties of your family.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

 

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <?php
              	include_once '../demo/connection.php';
              	$querydoc="select count(doctorId) as doct from doctor";
              	$executedoc=mysqli_query($con,$querydoc);
              	$doctorcount=mysqli_fetch_assoc($executedoc);
              ?>
              <span data-purecounter-start="0" data-purecounter-end="<?php 	echo $doctorcount['doct'];?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Doctors</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <?php
              	include_once '../demo/connection.php';
              	$querydep="select count(DoctorSpecialicationID) as dep from doctorspecialization";
              	$executedep=mysqli_query($con,$querydep);
              	$depcount=mysqli_fetch_assoc($executedep);
              ?>
              <span data-purecounter-start="0" data-purecounter-end="<?php 	echo $depcount['dep'];?>"  data-purecounter-duration="1" class="purecounter"></span>
              <p>Departments</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p>Research Labs</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Make an Appointment</h2>
        </div>

        <form  method="post" id="appointmentform" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-12 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" value="<?php echo $_SESSION['Email']; ?>" data-rule="email" disabled data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 form-group mt-3">
              <input type="date" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
             <div class="col-md-6 form-group mt-3">
              <input type="time" name="time" class="form-control datepicker" id="time" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group mt-3">

              <select name="department" id="department" class="form-select">
                <option>Select Department</option>
                <?php 
                  include_once '../demo/connection.php';
                  $query="select * from doctorspecialization";
                  $execute=mysqli_query($con,$query);
                  while($row=mysqli_fetch_assoc($execute)){
                    ?>
                      <option value=<?php echo $row['DoctorSpecialicationID'] ?>><?php echo $row['Specialization']; ?></option>
                    <?php
                  }
                ?>
              </select>
            </div>
            <div class="col-md-6 form-group mt-3">
              <select name="doctor" id="doctor"  class="form-select">
              </select>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
            <div class="validate"></div>
          </div>
          <div class="text-center"><button id="btnsubmit" type="submit">Make an Appointment</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->





    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Gallery</h2>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->


  </main><!-- End #main -->

<?php
  include 'Footer.php';
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