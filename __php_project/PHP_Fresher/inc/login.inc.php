<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username =  htmlspecialchars($_POST["usernameTxt"], ENT_QUOTES, 'UTF-8');
    $password =  htmlspecialchars($_POST["passwordTxt"], ENT_QUOTES, 'UTF-8');

    include "../model/dbh.classes.php";
    include "../model/UserModel.php";
    include "../controller/LoginController.php";

    $login = new LoginController($username, $password);

    $result = $login->loginUser();

    echo "<pre>";
    var_dump($result);
    echo "</pre>";
    // die();

    if($result['bool'] == false) {
        header("location: ../view/login.php?emptyinputs");
        exit();
    } else {
        header("location: ../view/home.php");
        exit();
    }


    

}