<?php
// autoloading classes
include "class-autoloader.inc.php";

if($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // Grabbing data
    $uid = htmlspecialchars($_POST["uid"], ENT_QUOTES, 'UTF-8');
    $pwd = htmlspecialchars($_POST["pwd"], ENT_QUOTES, 'UTF-8');

    $login = new LoginContr($uid, $pwd);

    // Running error handlers and user signup
    $xresult =  $login->loginUser();

    // Encoding result
    echo json_encode($xresult);
}
else
{
    header("location: ../index.php?error=loginrequired");
    exit();
}

exit();