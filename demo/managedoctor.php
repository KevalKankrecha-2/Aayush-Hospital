<?php
session_start();
require_once("connection.php");
if(!isset($_SESSION['un'])){
  $_SESSION['sess6']="PLEASE LOGIN FIRST.......";
  ?>
  <script>
    window.location.href = "loginfile.php";
  </script>
  <?php
}
$query="SELECT * FROM doctorspecialization";
$execute=mysqli_query($con,$query);

?>



<!DOCTYPE html>
<html lang="en">
<style type="text/css">
</style>
<head>
  <style type="text/css">

    .alert {
      padding: 20px;
      background-color: green;
      color: white;
    }

    .closebtn {
      margin-left: 15px;
      color: white;
      font-weight: bold;
      float: right;
      font-size: 22px;
      line-height: 20px;
      cursor: pointer;
      transition: 0.3s;
    }
  </style>
  <meta charset="UTF-8">

  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Aayush Hospital</title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/bootstrap.css">

  <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

  <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/css/app.css">
  <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
  <div id="app">
    <div id="sidebar" class="active">
      <div class="sidebar-wrapper active">
        <div class="sidebar-header">
          <div class="d-flex justify-content-between">
            <div class="logo">
             <a href="#"><img style="height:100px;width:90px;" src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
           </div>
           <div class="toggler">
            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
          </div>
        </div>
      </div>
      <div class="sidebar-menu">
        <ul class="menu">
          <li class="sidebar-title">Menu</li>

          <li class="sidebar-item active ">
            <a href="aayush.php" class='sidebar-link'>
              <i class="fa fa-heartbeat" style="font-size:24px"></i>
              <span>Aayush Dashboard</span>
            </a>
          </li>

          <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
              <i class="fa fa-user-md" style="font-size:24px"></i>
              <span>Doctor</span>
            </a>
            <ul class="submenu ">
              <li class="submenu-item ">
                <a href="Adddoctor.php">Add Doctor</a>
              </li>
              <li class="submenu-item ">
                <a href="managedoctor.php">Manage Doctors</a>
              </li>

            </ul>
          </li>

          <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
              <i class="fa fa-plus-square" style="font-size:24px"></i>
              <span>Specialization</span>
            </a>
            <ul class="submenu ">
              <li class="submenu-item ">
                <a href="Addspecialization.php">Add Specialization</a>
              </li>
              <li class="submenu-item ">
                <a href="managespecification.php">Manage Specialization</a>
              </li>
            </ul>
          </li>

          <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
              <i class="fa fa-hospital-o" style="font-size:24px"></i>
              <span>Appointment</span>
            </a>
            <ul class="submenu ">
              <li class="submenu-item ">
                <a href="manageappointment.php">Manage Appointment</a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
              <i class="fa fa-user" style="font-size:24px"></i>
              <span>User</span>
            </a>
            <ul class="submenu ">
              <li class="submenu-item ">
                <a href="manageuseretails.php">View User</a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
              <i class="fa fa-file" style="font-size:24px"></i>
              <span>Report</span>
            </a>
            <ul class="submenu ">
              <li class="submenu-item ">
                <a href="managereport.php">View Report</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
  </div>
  <!-- Actucal Page Layout..!!!! -->
  <div id="main">
    <header class="mb-3">
      <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
      </a>
    </header>
    <div class="page-heading"> <h3> <?php echo $_SESSION['un']; ?> </h3> <button class="btn btn-primary" type="submit"><a href="logout.php" style="color:white">Logout</a></button> </div>
    
    
    <table border="2" class="table table-bordered">

      <thead>
        <th colspan="9" style="text-align: center;font-size: 30px;">Doctor Details</th>
        <tr style="font-size: 25px;">
         <th>Name</th>
         <th>Password</th>
         <th>Specialization</th>
         <th>Fees</th>
         <th>ContactNo</th>
         <th>Email</th>
         <th colspan="2" style="text-align: center">Action</th>
       </tr>
     </thead>



     <?php
     $query="select DoctorId,DoctorName,DoctorPassword,Specialization,DoctorFees,ContactNo,DoctorEmail from doctor d,doctorspecialization ds where d.DoctorSpecialicationID=ds.DoctorSpecialicationID";
     $execute=mysqli_query($con,$query);


     while($data=mysqli_fetch_assoc($execute))
     {
      ?>
      <?php
      $a=$data['DoctorId'];

      ?>
      <tbody>
        <tr>
          <td><?php echo $data['DoctorName']; ?></td>
          <td><?php echo $data['DoctorPassword']; ?></td>
          <td><?php echo $data['Specialization']; ?></td>
          <td><?php echo $data['DoctorFees']; ?></td>
          <td><?php echo $data['ContactNo']; ?></td>
          <td><?php echo $data['DoctorEmail']; ?></td>

          <td style="text-align:center;">
            <a href="editdoctor.php?DoctorId=<?php echo $data['DoctorId']; ?>" class="edit_btn" >
              <li class="list-inline-item">
               <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button> </li></a>
               <a href="deletedoctor.php?DoctorId=<?php echo $data['DoctorId']; ?>" onclick="return confirmation()" class="del_btn" >
                <li class="list-inline-item">
                  <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></li></a>
                </td>


              </tr> 
            </tbody>
            <?php
          }
          ?>
        </table> 



        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
      </div>
    </div>
  </div>
</div>
</div>
<script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/vendors/apexcharts/apexcharts.js"></script>
<script src="assets/js/pages/dashboard.js"></script>

<script src="assets/js/main.js"></script>

<script type="text/javascript">
  function confirmation(){
    var a=confirm("Are you sure to want to delete??");
    return a;
  }

</script>
</body>

</html>