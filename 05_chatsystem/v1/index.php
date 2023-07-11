<?php include("template/header.php"); ?>

<?php

	if(isset($_GET['userId'])) :
		$_SESSION["userId"] = $_GET["userId"];
		header("location: chatbox.php");
	endif;
?>

<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4>Please Select Your Account</h4>
		</div>
		<div class="modal-body">
			<ol>
				<?php
					$users = mysqli_query($connect, "SELECT * FROM users") 
							or die("Failed to query database".mysqli_error());

					if(mysqli_num_rows($users) == 0) :
						echo "No data.";
					else :
						while($user = mysqli_fetch_assoc($users))
						{
							echo '
								<li>
									<a href="index.php?userId='.$user["id"].'">'.$user["User"].'</a>
								</li>
							';
						}
					endif;
				?>
			</ol>
			<a href="registerUser.php" style="float:right;">Register here.</a>
		</div>
	</div>
</div>

<?php include("template/footer.php"); ?>
	
