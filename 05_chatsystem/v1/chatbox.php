<?php include("template/header.php"); ?>


<?php
    echo $_SESSION["userId"];
	$users = mysqli_query($connect, "SELECT * FROM users WHERE id = '".$_SESSION["userId"]."' ")
            or die("Failed to query database".mysqli_error());
    // Retrieving the users
    $user = mysqli_fetch_assoc($users);
?>

<div class="container-fluid">
	<div class="row">

		<div class="col-md-4">
            <p>Hi <?= $user["User"] ?>!</p>
            <input type="text" id="fromUser" value="<?= $user["id"]?>" hidden>
            <p>Send messageto: </p>
            <ul>
                <?php
                    $msgs = mysqli_query($connect, "SELECT * FROM users")
                            or die("Failed to query database".mysqli_error());

                    while($msg = mysqli_fetch_assoc($msgs))
                    {
                        echo '<li><a href="?toUser='.$msg["id"].'">'.$msg["User"].'</a></li>';
                    }
                ?>
            </ul>

            <a href="index.php">back</a>
        </div>
        
        <div class="col-md-4">
            <div class="modal-content">
                <div class="modal-header" style="">
                    <h4>
                        <?php
                            if(isset($_GET["toUser"])) :
                                $sql = "
                                    SELECT * FROM users 
                                    WHERE id = '".$_GET["toUser"]."' ";
                                $userName = mysqli_query($connect, $sql)
                                        or die("Failed to query database".mysqli_error($userName));

                                $uName = mysqli_fetch_assoc($userName);
                                echo '<input type="text" value=" '.$_GET['toUser'].' " id="toUser" hidden/>';
                                echo $uName["User"];
                            else :
                                $sql = "
                                    SELECT * FROM users ";
                                $userName = mysqli_query($connect, $sql)
                                        or die("Failed to query database".mysqli_error());

                                $uName = mysqli_fetch_assoc($userName);
                                $_SESSION["toUser"] = $uName["id"];
                                $userId = isset($_GET['toUser']) ? $_GET['toUser'] : 0;
                                echo '<input type="text" value=" '.$userId.' " id="toUser" hidden/>';
                                echo $uName["User"];
                            endif;
                        ?>
                    </h4>
                </div>
                <div class="modal-body" id="msgBody" style="height: 400px; overflow-y: scroll; overflow-x: hidden;">
                    <?php
                        if(isset($_GET["toUser"])) :
                            $sql = "
                                SELECT * FROM messages 
                                WHERE (FromUser = '".$_SESSION["userId"]."' AND ToUser = '".$_GET["toUser"]."')
                                OR (FromUser = '".$_GET["toUser"]."' AND ToUser = '".$_SESSION["userId"]."')
                                ";
                            $chats = mysqli_query($connect, $sql)
                                    or die("Failed to query database".mysqli_error());
                        else :
                            $sql = "
                                SELECT * FROM messages 
                                WHERE (FromUser = '".$_SESSION["userId"]."' AND ToUser = '".$_SESSION["toUser"]."')
                                OR (FromUser = '".$_SESSION["toUser"]."' AND ToUser = '".$_SESSION["userId"]."')
                                ";
                            $chats = mysqli_query($connect, $sql)
                                    or die("Failed to query database".mysqli_error());
                        endif;

                        while($chat = mysqli_fetch_assoc($chats)) :
                            if($chat["FromUser"] == $_SESSION["userId"]) :
                                echo "
                                    <div class='text-end'>
                                        <p class='touser-msg mb-0'>
                                            ".$chat["Message"]."
                                        </p>
                                    </div>
                                ";
                            else :
                                echo "
                                    <div class='text-start'>
                                        <p class='fromuser-msg mb-0'>
                                            ".$chat["Message"]."
                                        </p>
                                    </div>
                                ";
                            endif;
                        endwhile;
                    ?>
                </div>
                <div class="modal-footer d-flex align-items-center">
                    <div class="flex-grow-1">
                        <textarea id="message" class="form-control" style="height: 70px; width: 100%;"></textarea>
                    </div>
                    <button id="send" class="btn btn-primary">Send</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            
        </div>
        <div class="col-md-4">
            
        </div>
	</div>
</div>
<?php include("template/footer.php"); ?>
<script type="text/javascript">
    var num = 0;
    var test = <?= isset($_GET["toUser"]) ? $_GET["toUser"] : 0 ?>;
    $(document).ready(function(){
        $("#send").on("click", function(){
            $.ajax({
                url: "insertMessage.php",
                method: "POST",
                data: {
                    fromUser: $("#fromUser").val(),
                    toUser: $("#toUser").val(),
                    message: $("#message").val()
                },
                dataType: "text",
                success: function(data) 
                {
                    $("message").val("");
                }
            });
        });

        if(test)
        {
            setInterval(function(){
                $.ajax({
                    url: "realTimechat.php",
                    method: "POST",
                    data: {
                        fromUser: $("#fromUser").val(),
                        toUser: $("#toUser").val(),
                    },
                    datatype: "text",
                    success: function(data) {
                        $("#msgBody").html(data);
                    }
                })
            }, 700);
        }
        else
        {
            $("#msgBody").html("");

        }
    });
</script>
