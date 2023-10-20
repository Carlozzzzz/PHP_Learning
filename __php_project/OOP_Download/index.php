<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Signup Page</title>

    <!-- Libraries -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Custom Css-->
    <link rel="stylesheet" href="assets/css/main.css">
    
    <!-- Page CSS -->
    <style>
        body {
            height: 100vh;
        }
    </style>
</head>

<body >
    <!-- Template Login -->
    <section class="gradient-form">
        <div class="container py-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                    <img src="assets/img/login2_logo.png"
                                        style="width: 100px;" alt="logo">
                                    <h4 class="mt-3 mb-5 pb-1">Login Default Template</h4>
                                    </div>

                                    <form name="myform" id="myform" method="POST" autocomplete="off" enctype="multipart/form-data">
                                        <p>Please login to your account</p>

                                        <div class="form-floating mb-4">
                                            <input type="text" name="uid" id="txtusername" 
                                                class="form-control"
                                                placeholder="Phone number or email address" 
                                                required>
                                            <label class="form-label" for="txtusername">Username</label>
                                            <div class="invalid-feedback">
                                                Please provide valid Username.
                                            </div>
                                        </div>

                                        <div class="form-floating mb-4">
                                            <input type="password" name="pwd" id="txtpassword" 
                                                class="form-control"
                                                placeholder="Password" 
                                                required>
                                            <label class="form-label" for="txtpassword">Password</label>
                                            <div class="invalid-feedback">
                                                Please provide valid Password.
                                            </div>
                                        </div>

                                        <button type="button"
                                            class="btn btn-primary btn-block fa-lg gradient-custom-2 me-3 createnew"
                                            onclick="signin()">
                                                Log in
                                        </button>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <a href="" class="text-muted" id="elementToBlock">Forgot password?</a>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <!-- <p class="mb-0 me-2">Don't have an account?</p> -->
                                            <a href="pages/signup.php" class="btn btn-outline-danger createnew" id="createnew">Create new</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">PHP OOP Login</h4>
                                    <p class="small mb-0 decoration-none">Thank to Mr. Dani Krossing for building a solid <a href="https://www.youtube.com/watch?v=Anz0ArcQ5kI&list=PL0eyrZgxdwhypQiZnYXM7z7-OTkcMgGPh&index=1" target="_blank">OOP Tutorials</a> for begginers. In this website, I'm going to display his tutorial together with some modifications that I made.</p>
                                    <br>
                                    <p>Let's Go!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vendors -->
    <script src="assets/vendor/axllent/jquery/jquery.js"></script>
    <script src="assets/vendor/blockui/jquery.blockUI.js"></script>


    <!-- CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Custom -->
    <script src="assets/js/main.js"></script>

    <script>
        function signin() {
            xdata = jQuery("#myform").serialize();
            $.ajax({
                url: "includes/login.inc.php",
                method: "POST",
                data: xdata,
                dataType: "JSON",
                success: function(xret) {
                if (xret.bool) {
                    Swal.fire({
                        title: 'Welcome to Simple PHP Website!',
                        text: "Login success, redirecting to the home page.",
                        icon: 'success',
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        didOpen: () => {
                        Swal.showLoading();
                            setTimeout(() => {
                                window.location.href = "pages/home.php";
                            }, 1000);
                        }
                    });

                } else if (xret.bool == false) {
                    Swal.fire({
                    icon: 'error',
                    title: xret.msg,
                    allowOutsideClick: false
                    });
                }
                },
                error: function(xhr, status, error) {
                // Handle the error here
                console.log(xhr.responseText);
                Swal.fire({
                    icon: 'error',
                    title: 'An error occurred',
                    text: xhr + status + error,
                    allowOutsideClick: false
                });
                }
            });
        }

    </script>
</body>

</html>

