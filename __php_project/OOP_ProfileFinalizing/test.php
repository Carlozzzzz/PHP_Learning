<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Navigation</title>
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
                <a class="navbar-brand" href="#">
                    <img src="assets/img/sample_logo.png" alt="Potato Logo" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="pages/home.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/profile.php">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/gallery.php">Gallery</a></li>
                    </ul>
                </div>
                <?php if(isset($_SESSION["userid"])) : ?>
                    <div class="navbar-dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/img/user3_logo.png" alt="Profile" class="navbar-dropdown-image">
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

    <!-- Content -->
    <section class="vh-100" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-12 col-xl-4">

                <div class="card" style="border-radius: 15px;">
                <div class="card-body text-center">
                    <div class="mt-3 mb-4">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                        class="rounded-circle img-fluid" style="width: 100px;" />
                    </div>
                    <h4 class="mb-2">Julie L. Arsenault</h4>
                    <p class="text-muted mb-4">@Programmer <span class="mx-2">|</span> <a
                        href="#!">mdbootstrap.com</a></p>
                    <div class="mb-4 pb-2">
                    <button type="button" class="btn btn-outline-primary btn-floating">
                        <i class="fab fa-facebook-f fa-lg"></i>
                    </button>
                    <button type="button" class="btn btn-outline-primary btn-floating">
                        <i class="fab fa-twitter fa-lg"></i>
                    </button>
                    <button type="button" class="btn btn-outline-primary btn-floating">
                        <i class="fab fa-skype fa-lg"></i>
                    </button>
                    </div>
                    <button type="button" class="btn btn-primary btn-rounded btn-lg">
                    Message now
                    </button>
                    <div class="d-flex justify-content-between text-center mt-5 mb-2">
                    <div>
                        <p class="mb-2 h5">8471</p>
                        <p class="text-muted mb-0">Wallets Balance</p>
                    </div>
                    <div class="px-3">
                        <p class="mb-2 h5">8512</p>
                        <p class="text-muted mb-0">Income amounts</p>
                    </div>
                    <div>
                        <p class="mb-2 h5">4751</p>
                        <p class="text-muted mb-0">Total Transactions</p>
                    </div>
                    </div>
                </div>
                </div>

            </div>
            </div>
        </div>

        <br><br>

        <div class="container py-4">
            <div class="p-5 mb-4 bg-body-tertiary rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Custom jumbotron</h1>
                    <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
                    <button class="btn btn-primary btn-lg" type="button">Example button</button>
                </div>
                </div>

                <div class="row align-items-md-stretch">
                <div class="col-md-6">
                    <div class="h-100 p-5 text-bg-dark rounded-3">
                    <h2>Change the background</h2>
                    <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
                    <button class="btn btn-outline-light" type="button">Example button</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                    <h2>Add borders</h2>
                    <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
                    <button class="btn btn-outline-secondary" type="button">Example button</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bootstrap JavaScript -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>