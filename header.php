<?php
    include_once 'db.php';
    session_start();
    $_SESSION['default_pwd'] = "password";
    $username="";
    if(isset($_SESSION['user_id'])){
        $username = $_SESSION['username'];
    }

    $login_button = '<li class="nav-item"><a class="nav-link" href="login.php">Log In</a></li>';
    if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == 1){
        $text = "<li><a class=\"dropdown-item\" href=\"admin.php\">Admin Panel</a></li>";
    }else{
        $text = "<li><a class=\"dropdown-item\" href=\"myorders.php\">My Orders</a></li>";
    }
    $dropdown = '<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">'.$username.'</a><ul class="dropdown-menu" aria-labelledby="navbarDropdown">'.$text.'<li><a class="dropdown-item" href="edit_profile.php">Edit Profile</a></li><li><hr class="dropdown-divider"></li><li><a class="dropdown-item" href="logout.php">Log Out</a></li></ul></li>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- local css -->
    <link rel="stylesheet" href="./include/style.css">
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
    crossorigin="anonymous">

    <link rel="icon" type="image" href="assets/logo.png">
    <title><?php echo getTitle(); ?></title>
</head>
<body>

    <!-- navbar -->
    <div id="top">
        <nav class="py-3 navbar navbar-expand-lg auto-hiding-navbar">
            <div class="container">
                <a class="navbar-brand" href="index.php"> <img src="./assets/logo.png" alt="logo" class="logo" />TheFoodStation
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="index.php#about-us">About Us</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="index.php#contact-us">Contact Us</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link"  <?php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == 1){echo "hidden";} ?> href="restaurants.php">Order</a>
                        </li>
                        <!-- if user is signed in then we don't need to show the login button -->
                        <!-- we need to show their names instead -->
                        <?php if(isset($_SESSION['user_id'])) {echo $dropdown;} else {echo $login_button;} ?>

                    </ul>
                </div>
            </div> 
        <!-- end of container class -->
        </nav>
    </div>
    <!-- end of navbar -->


    <?php

        $locations = array("Saud"=>"3490 W Maple St", "John"=>"2020 E Maple St", "Nick "=>"145 Driveway St");

    ?>



