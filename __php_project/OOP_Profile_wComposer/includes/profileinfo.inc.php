<?php
session_start();


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
    $about = $_POST["about"];
    $introTitle = $_POST["introtitle"];
    $introText = $_POST["introtext"];

    // Instanstiate the class
    include "../classes/dbh.classes.php";
    include "../classes/profileinfo.classes.php";
    include "../classes/profileinfo-contr.classes.php";
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
    $action = $_POST['action'];

    if ($action == "fetchProfile") {
        requestProfileData();
    }
    exit();
}

function requestProfileData() {
    if (isset($_POST['userId'])) {
        // Get the Data
        $userId = $_POST['userId'];

        // Instantiate the View and get data
        include "../classes/dbh.classes.php";
        include "../classes/profileinfo.classes.php";
        include "../classes/profileinfo-view.classes.php";
        $profileInfo = new ProfileInfoView();

        $results = $profileInfo->fetchAbout($userId);

        // echo "<pre>";
        // var_dump($results);
        // die();
        // feedback
        $xretobj = array();
        $xretobj['bool'] = true;
        $xretobj['msg'] = "this is my message";

        echo json_encode($results);
    }
}
##================================================================================================================================




