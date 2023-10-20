<?php
session_start();

// autoloading classes
include "class-autoloader.inc.php";
##================================================================================================================================
/**
 * Process Data
 * Model, Controller
 * 
 * FROM: profilesettings.php, profile.php
 */
##================================================================================================================================
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET["action"]) && $_GET["action"] == "saveData") {
   
    $id = $_SESSION["userid"];
    $uid = $_SESSION["useruid"];
    $about = htmlspecialchars($_POST["about"], ENT_QUOTES, 'UTF-8');
    $introTitle = htmlspecialchars($_POST["introtitle"], ENT_QUOTES, 'UTF-8');
    $introText = htmlspecialchars($_POST["introtext"], ENT_QUOTES, 'UTF-8');

    // Instanstiate the class
    $profileInfo = new ProfileInfoContr($id, $uid);

    // running the profile update
    $result = $profileInfo->updateProfileInfo($about, $introTitle, $introText);
    
    // send the user back
    echo json_encode($result);
    exit();
}
##================================================================================================================================


##================================================================================================================================
/**
 * Retrieve Data
 * View
 */
##================================================================================================================================
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == "fetchProfile") {
    
    $userId = htmlspecialchars($_POST["userId"], ENT_QUOTES, 'UTF-8');

    // Instantiate the View and get data
    $profileInfo = new ProfileInfoView();

    $results = $profileInfo->fetchAbout($userId);

    // feedback
    $xretobj = array();
    $xretobj['bool'] = true;
    $xretobj['msg'] = "this is my message";

    echo json_encode($results);
    exit();
}

##================================================================================================================================