<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css1/util.css">
    <link rel="stylesheet" type="text/css" href="css1/main.css">
    <!--===============================================================================================-->
</head>
<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    Account Login
                </span>
                <form class="login100-form validate-form p-b-33 p-t-5" action="logincheck.php" method="post">
                 <?php
                 if(isset($_SESSION['err']))
                 {
                    ?>
                    <div class="alert alert-danger" role="alert" style="background-color:red">
                        <p  style="color:white;font-weight:bold"><?php echo $_SESSION['err'];?></p>
                    </div>
                    <?php
                    unset($_SESSION['err']);
                }
                ?>
                <?php
                if(isset($_SESSION['sess']))
                {
                    ?>
                    <div class="alert alert-danger" role="alert" style="background-color:red">
                        <p  style="color:white;font-weight:bold">Please Login First..!!</p>
                    </div>
                    <?php
                    unset($_SESSION['sess']);
                }
                ?>

                <?php
                if(isset($_SESSION['sess1']))
                {
                    ?>
                    <div class="alert alert-danger" role="alert" style="background-color:red">
                        <p  style="color:white;font-weight:bold">Please Login First..!!</p>
                    </div>
                    <?php
                    unset($_SESSION['sess1']);
                }
                ?>

                <?php
                if(isset($_SESSION['sess2']))
                {
                    ?>
                    <div class="alert alert-danger" role="alert" style="background-color:red">
                        <p  style="color:white;font-weight:bold">Please Login First..!!</p>
                    </div>
                    <?php
                    unset($_SESSION['sess2']);
                }
                ?>

                <?php
                if(isset($_SESSION['sess3']))
                {
                    ?>
                    <div class="alert alert-danger" role="alert" style="background-color:red">
                        <p  style="color:white;font-weight:bold">Please Login First..!!</p>
                    </div>
                    <?php
                    unset($_SESSION['sess3']);
                }
                ?>

                <?php
                if(isset($_SESSION['sess4']))
                {
                    ?>
                    <div class="alert alert-danger" role="alert" style="background-color:red">
                        <p  style="color:white;font-weight:bold">Please Login First..!!</p>
                    </div>
                    <?php
                    unset($_SESSION['sess4']);
                }
                ?>

                <?php
                if(isset($_SESSION['sess5']))
                {
                    ?>
                    <div class="alert alert-danger" role="alert" style="background-color:red">
                        <p  style="color:white;font-weight:bold">Please Login First..!!</p>
                    </div>
                    <?php
                    unset($_SESSION['sess5']);
                }
                ?>

                <?php
                if(isset($_SESSION['sess6']))
                {
                    ?>
                    <div class="alert alert-danger" role="alert" style="background-color:red">
                        <p  style="color:white;font-weight:bold">Please Login First..!!</p>
                    </div>
                    <?php
                    unset($_SESSION['sess6']);
                }
                ?>


                <?php
                if(isset($_SESSION['sess7']))
                {
                    ?>
                    <div class="alert alert-danger" role="alert" style="background-color:red">
                        <p  style="color:white;font-weight:bold">Please Login First..!!</p>
                    </div>
                    <?php
                    unset($_SESSION['sess7']);
                }
                ?>

                <?php
                if(isset($_SESSION['sess8']))
                {
                    ?>
                    <div class="alert alert-danger" role="alert" style="background-color:red">
                        <p  style="color:white;font-weight:bold">Please Login First..!!</p>
                    </div>
                    <?php
                    unset($_SESSION['sess8']);
                }
                ?>


                <?php
                if(isset($_SESSION['sess9']))
                {
                    ?>
                    <div class="alert alert-danger" role="alert" style="background-color:red">
                        <p  style="color:white;font-weight:bold">Please Login First..!!</p>
                    </div>
                    <?php
                    unset($_SESSION['sess9']);
                }
                ?>


                <?php
                if(isset($_SESSION['sess10']))
                {
                    ?>
                    <div class="alert alert-danger" role="alert" style="background-color:red">
                        <p  style="color:white;font-weight:bold">Please Login First..!!</p>
                    </div>
                    <?php
                    unset($_SESSION['sess10']);
                }
                ?>
                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="input100" type="text" name="Username" placeholder="User name" >
                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>
                <div class="container-login100-form-btn m-t-32">
                    <button class="login100-form-btn m-1">
                        Login
                    </button>
                </div>
            </form>
            <button class="login100-form-btn m-1">
                <a href="Register.php" style=" font-family: Ubuntu-Bold;
                font-size: 18px;
                color: #fff;
                line-height: 1.2;
                text-transform: uppercase;">SignUP</a>
            </button>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>