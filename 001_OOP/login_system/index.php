<?php session_start(); ?>
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
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Me</a>
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

    <!-- Content -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <!-- Login Form -->
                <h2 class="text-center">Login</h2>
                <form action="includes/login.inc.php" method="POST" class="login-form">
                    <div class="form-group">
                        <label for="loginName">Username</label>
                        <input name="uid" type="text" class="form-control" id="loginName" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label for="loginPassword">Password</label>
                        <input name="pwd" type="password" class="form-control" id="loginPassword" placeholder="Password">
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary text-center">Login</button>
                </form>
            </div>

            <div class="col-md-6">
                <!-- Signup Form -->
                <h2 class="text-center">Signup</h2>
                <form action="includes/signup.inc.php" method="POST" class="signup-form">
                    <div class="form-group">
                        <label for="signupName">Username</label>
                        <input name="uid" type="text" class="form-control" id="signupName" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label for="signupPassword">Password</label>
                        <input name="pwd" type="password" class="form-control" id="signupPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="signupPassword">Repeat Password</label>
                        <input name="pwdRepeat" type="password" class="form-control" id="signupPassword" placeholder="Retype Password">
                    </div>
                    <div class="form-group">
                        <label for="signupEmail">Email address</label>
                        <input name="email" type="email" class="form-control" id="signupEmail" placeholder="Enter email">
                    </div>
                    
                    <button name="submit" type="submit" class="btn btn-primary text-center">SIGN UP</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>