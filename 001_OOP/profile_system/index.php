<?php include "header.php";?>

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

<?php include "footer.php";?>

