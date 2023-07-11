<?php

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) 
{
    // Grabbing data
    $uid = htmlspecialchars($_POST["uid"], ENT_QUOTES, 'UTF-8');
    $pwd = htmlspecialchars($_POST["pwd"], ENT_QUOTES, 'UTF-8');
   
    // Instantiate SignupCtr class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    $login = new LoginContr($uid, $pwd);
   
    // Running error handlers and user signup
    $login->loginUser();

    // Going back to front page
    header("location: ../index.php?error=none");
}

/**
 * Files the handle the data we send
 */