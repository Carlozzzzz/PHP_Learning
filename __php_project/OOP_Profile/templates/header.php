<?php 
session_start(); 

include "classes/dbh.classes.php";
include "classes/profileinfo.classes.php";
include "classes/profileinfo-contr.classes.php";
include "classes/profileinfo-view.classes.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Signup Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
    <style>
        .navbar-dark .navbar-brand {
            color: #fff;
        }

        .logo {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }

        .login-form,
        .signup-form {
            max-width: 400px;
            margin: 0 auto;
        }

        .carousel {
            margin: 0 auto;
            width: 80%;
        }

        .nav-profile img {
            max-height: 36px;
        }
    </style>
</head>

<body>

    <!-- Header -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="assets/img/sample_logo.png" alt="Potato Logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse align-items-center" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gallery</a>
                    </li>
                </ul>
                
                <?php if(isset($_SESSION["userid"])) : ?>
                    <p class="text-white my-2 mx-2 m-sm-0 "><?= $_SESSION['useruid']?></p>
    
                    <div class="nav-item dropdown pe-3">
                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" role="button"
                            id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/img/user3_logo.png" alt="Profile" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" onclick="signout_dialog();"
                                    style="cursor:pointer;">
                                    <i class="bi bi-arrow-left"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                <?php else : ?>
                    <a class="btn btn-primary my-2 my-sm-0" type="submit">Login</a>
                <?php endif; ?>
            </div>
        </nav>

