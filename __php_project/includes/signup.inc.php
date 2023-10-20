<?php

// autoloading classes
include "class-autoloader.inc.php";

if($_SERVER["REQUEST_METHOD"] == "POST"  && isset($_GET["action"]) &&  $_GET["action"] == "saveData") 
{

    $xretobj = array();
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
    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);
   
    // echo "<pre>";
    // var_dump($signup);
    // die();

    // Running error handlers and user signup
    $result = $signup->signupUser();
    if(isset($result['bool']) && $result['bool'] == false) {
        echo json_encode($result);
        exit();
    }

    $resultUser = $signup->fetchUid($uid);
    
    if(isset($userId['bool']) && $userId['bool'] == false) {
        $xretobj = $resultUser;
        echo json_encode($xretobj);
        exit();
    }

    // Intantiate the ProfileInfoContr class
    $profileInfo = new ProfileInfoContr($resultUser, $uid);

    $result = $profileInfo->defaultProfileInfo();

    if(isset($result['bool']) && $result['bool'] = true){
        $xretobj['bool'] = true;
        $xretobj['msg'] = "Account successfully created.";
    }
    else
    {
        $xretobj = $result;
    }
    // return the response
    echo json_encode($xretobj);
}
