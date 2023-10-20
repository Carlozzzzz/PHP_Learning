<?php session_start(); ?>
<?php 
include "classes/dbh.classes.php";
include "classes/profileinfo.classes.php";
include "classes/profileinfo-contr.classes.php";
include "classes/profileinfo-view.classes.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Navigation</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
    <style>
    /* Additional CSS styles */
    .navbar-dropdown {
        position: relative;
    }

    .logo {
        width: 40px;
        height: 40px;
    }

    .navbar-dropdown-image {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 5px;
    }

    @media (max-width: 991.98px) {
        .navbar-brand {
            display: none;
        }

        .navbar-dropdown .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            width: 100%;
        }

        .nav-link .dropdown-toggle{
            padding-left: 0 !important;
        }
        
    }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="home.php">
                    <img src="assets/img/sample_logo.png" alt="Potato Logo" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                    </ul>
                </div>
                <?php if(isset($_SESSION["userid"])) : ?>
                    <div class="navbar-dropdown">
                        <a class="nav-link dropdown-toggle text-white ps-0" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/img/user3_logo.png" alt="Profile" class="navbar-dropdown-image">
                            Carlos
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                            <li><button class="dropdown-item" type="button" onclick="signout_dialog()">Logout</button></li>
                        </ul>
                    </div>
                    
                <?php else : ?>
                    <a class="btn btn-primary my-2 my-sm-0" href="index.php">Login</a>
                <?php endif; ?>
                
                
            </div>
        </nav>

        
    </header>