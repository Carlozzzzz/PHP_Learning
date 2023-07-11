<?php
session_start();
include("includes/DBConnection.php");

$fromUser = $_POST["fromUser"];
$toUser = $_POST["toUser"];
$output = "";

$sql = "
    SELECT * FROM messages 
    WHERE (FromUser = '".$fromUser."' AND ToUser = '".$toUser."')
    OR (FromUser = '".$toUser."' AND ToUser = '".$fromUser."')
    ";
$chats = mysqli_query($connect, $sql)
        or die("Failed to query database".mysqli_error());

while($chat = mysqli_fetch_assoc($chats)) 
{
    if($chat["FromUser"] == $fromUser)
    {
        $output = "
            <div class='text-end'>
                <p class='touser-msg mb-0'>
                    ".$chat["Message"]."
                </p>
            </div>
        ";
    }
    else
    {
        $output .= "
            <div class='text-start'>
                <p class='fromuser-msg mb-0'>
                    ".$chat["Message"]."
                </p>
            </div>
        ";
    }
    echo $output;
}