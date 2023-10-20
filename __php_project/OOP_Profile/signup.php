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
       
    </style>
</head>

<body >
    <!-- Template Login -->
    <section class="gradient-form">
        <div class="container py-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="card rounded-3 text-black">
                        <div class="card-body p-md-5 mx-md-4">
                            <div class="text-center">
                            <img src="assets/img/login2_logo.png"
                                style="width: 100px;" alt="logo">
                            <h4 class="mt-3 mb-5 pb-1">Signup</h4>
                            </div>

                            <form name="myform" id="myform" autocomplete="off" enctype="multipart/form-data" novalidate>
                                <p>Create your account</p>

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

                                <div class="form-floating mb-4">
                                    <input type="password" name="pwdRepeat" id="signupPassword" 
                                        class="form-control"
                                        placeholder="Password" 
                                        required>
                                    <label class="form-label" for="signupPassword">Repeat Password</label>
                                    <div class="invalid-feedback">
                                        Please repeat Password.
                                    </div>
                                </div>

                                <div class="form-floating mb-4">
                                    <input type="email" name="email" id="signupEmail" 
                                        class="form-control"
                                        placeholder="Email address" 
                                        required>
                                    <label class="form-label" for="signupEmail">Email address</label>
                                    <div class="invalid-feedback">
                                        Please provide Email.
                                    </div>
                                </div>

                                <button type="submit" id="submit"
                                    class="btn btn-primary btn-block fa-lg gradient-custom-2 me-3 createnew">
                                        SIGN UP
                                </button>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="text-center" href="index.php">Login instead!</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        $(document).ready(function(){
            jQuery.ajax({
                url: "includes/signup.inc.php",
                method: "POST";
                 
            });
        });
    </script>
</body>

</html>



