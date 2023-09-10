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

  <title>Appointments</title>
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

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="Department.php">Departments</a></li>
          <li><a class="nav-link scrollto" href="Doctor.php">Doctors</a></li>
          <li><a class="nav-link scrollto" href="Report.php">Reports</a></li>
          <li><a class="nav-link scrollto active" href="#">Appointments</a></li>
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
          <h2>Appointments</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Appointments</li>
          </ol>
        </div>

        <section>
         <table border="2" class="table table-bordered">

          <thead>
            <th colspan="9" style="text-align: center;">Appointment Details</th>

            <tr>

             <th>Doctor<br><center>Specialization</center></th>
             <th>Doctor Name</th>
             <th>User Name</th>
             <th>Appointment<br><center>Date</center></th>
             <th>Appointment<br><center>Time</center></th>
             <th>Email</th>
             <th>DoctorStatus</th>
           </tr>
         </thead>



         <?php
         require_once("../demo/connection.php");
        $emailadd=$_SESSION['Email'];
         $query="select app.AppointId,ds.Specialization,d.DoctorName,u.FullName,app.AppointmentDate,app.AppointmentTime,u.Email,app.DoctorStatus from doctor d,doctorspecialization ds,user u,appointment app where app.DoctorSpecialization=ds.DoctorSpecialicationID and app.DoctorId=d.DoctorId and app.Email=u.Email and u.Email='$emailadd'";
         $execute=mysqli_query($con,$query);

         if (mysqli_errno($con)) {
          echo mysqli_error($con);    
        }
        while($data=mysqli_fetch_assoc($execute))
        {
          ?>
          <?php
          ?>
          <tbody>
            <tr>
              <td><?php echo $data['Specialization']; ?></td>
              <td><?php echo $data['DoctorName']; ?></td>
              <td><?php echo $data['FullName']; ?></td>
              <td><?php echo $data['AppointmentDate']; ?></td>
              <td><?php echo $data['AppointmentTime']; ?></td>
              <td><?php echo $data['Email']; ?></td>
              <td id="<?php echo $data['AppointId']?>">
                <?php 
                if ($data['DoctorStatus']== 1) {
                  echo "Pending.!";
                }
                else if ($data['DoctorStatus']==2) {
                  echo "Accepted.!";
                }
                else if ($data['DoctorStatus']==3) {
                 echo "Rejected.!";
               }
              ?>
            </td>
          </tr> 
        </tbody>
        <?php
      }
      ?>
    </table> 
  </section>
  
        <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2 style="font-weight:bold;font-size:50px;">Make an Appointment</h2>
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
</div>
</section><!-- End Breadcrumbs Section -->


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