<?php 

include 'db.php';

session_start();
if ($_SESSION['username'] == "admin") {


}else{
    header('location:../');
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
    <title>Telver | Admin</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../style.css">
</head>

<body>
<header class="header-area">

        <!-- Navbar Area -->
    <?php include 'nav.php'; ?>
        <!-- Nav End -->


                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
<!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>