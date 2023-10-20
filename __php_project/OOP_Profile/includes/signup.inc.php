<?php

if($_SERVER["REQUEST_METHOD"] == "POST") 
{
    /**
     * Security purposes
     * htmlspecialchars($_POST["uid"], ENT_QOUTES, 'UTF-8')
     */
    // Grabbing data
    $uid = htmlspecialchars($_POST["uid"], ENT_QUOTES, 'UTF-8');
    $pwd = htmlspecialchars($_POST["pwd"], ENT_QUOTES, 'UTF-8');
    $pwdRepeat = htmlspecialchars($_POST["pwdRepeat"], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');

    // Instantiate SignupCtr class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);
   
    // Running error handlers and user signup
    $signup->signupUser();

    $userId = $signup->fetchUid($uid);

    // Intantiate the ProfileInfoContr class
    include "../classes/profileinfo.classes.php";
    include "../classes/profileinfo-contr.classes.php";
    $profileInfo = new ProfileInfoContr($userId, $uid);

    $profileInfo->defaultProfileInfo();

    // Going back to front page
    header("location: ../index.php?error=none");
}

/**
 * Files the handle the data we send
 */