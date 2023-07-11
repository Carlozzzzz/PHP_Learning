<?php 
session_start(); 

include "classes/dbh.classes.php";
include "classes/profileinfo.classes.php";
include "classes/profileinfo-contr.classes.php";
include "classes/profileinfo-view.classes.php";

// include "includes/class-autoloader.inc.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Signup Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
    </style>
</head>

<body>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- <a class="navbar-brand" href="#">
            <img src="potato_logo.png" alt="Potato Logo" class="logo">
            My Website
        </a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse align-items-center" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gallery</a>
                </li>
            </ul>
        <?php if(isset($_SESSION["userid"])) : ?>
            <p class="text-white my-2 mx-2 m-sm-0 "><?= $_SESSION['useruid']?></p>
            <a href="includes/logout.inc.php" class="btn btn-primary my-2 my-sm-0" type="submit">Logout</a>
        <?php else : ?>
            <a class="btn btn-primary my-2 my-sm-0" type="submit">Login</a>
        <?php endif; ?>

        </div>
    </nav>