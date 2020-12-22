<?php 
include 'includes/db.php';
$err = '';
session_start();
if (isset($_POST['login'])) {

    $admin ="admin";
    /* Form Value Validation */

    if ($_POST['username'] == '') {

        $err = "<div class='alert alert-primary' role='alert'>Username is Empty</div>";
    }elseif ($_POST['password'] == '') {
        $err = "<div class='alert alert-primary' role='alert'>Password is Empty</div>";

    }
    else{

        $user = $_POST['username'];
        $pass = $_POST['password'];

        $q = "SELECT * FROM users WHERE username = '$user' AND password ='$pass'";
        $r = mysqli_query($con,$q);
        $val = mysqli_num_rows($r);
        
        if ($val == 1) {

            header('location:admin');
            $_SESSION['username'] = "admin";

        }else{

        $err = "<div class='alert alert-primary' role='alert'>User not found</div>";
        }
    }




}


 ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Telver Login</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="login-form">
    <center>
    
    <img src="img/core-img/logo.png" alt="" class="img-login">

    <div class="container-form">
         <div class="contact-form-area">
                            <form method="post">
                                <div class="row">
                                    <div class="col-12">
                                    <label class="err-message"><?php echo $err; ?></label>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="username" placeholder="Username">
                                    </div>
                                     <div class="col-12">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                    <div class="col-12">
                                        <button class="btn newsbox-btn mt-30" name="login">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </center>
                </div>
    </div>
    

</div>

<!-- Footer Start Here  -->


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Footer Content -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content text-center">
                    


        <!-- Copywrite Text -->
 <p class="copywrite-text"><a href="#">
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="$" target="_blank">BOT</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="../js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="../js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="../js/active.js"></script>
</body>

</html>