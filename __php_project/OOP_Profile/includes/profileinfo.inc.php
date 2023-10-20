<?php
session_start();

/**
 * This is where you run your controller and model
 */
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_SESSION["userid"];
    $uid = $_SESSION["useruid"];
    $about = htmlspecialchars($_POST["about"], ENT_QUOTES, "UTF-8");
    $introTitle = htmlspecialchars($_POST["introtitle"], ENT_QUOTES, "UTF-8");
    $introText = htmlspecialchars($_POST["introtext"], ENT_QUOTES, "UTF-8");

    // echo "<pre>";
    // var_dump($_POST);
    // die();

    // Instanstiate the class
    include "../classes/dbh.classes.php";
    include "../classes/profileinfo.classes.php";
    include "../classes/profileinfo-contr.classes.php";
    $profileInfo = new ProfileInfoContr($id, $uid);

    // running the profile update
    $profileInfo->updateProfileInfo($about, $introTitle, $introText);

    // send the user back
    header("location: ../profile.php?error=none");

}