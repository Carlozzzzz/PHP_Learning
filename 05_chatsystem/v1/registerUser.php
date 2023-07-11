<?php include("template/header.php"); ?>
<?php
	if(isset($_POST["uName"])) :

		$sql = "INSERT INTO users (User) VALUES('".$_POST["uName"]."')";
		
		if($_POST["uName"] == "" || $_POST["uName"] == null) :
			echo "Missing Fields.";
		else :
			if($connect->query($sql))
				header("Location: index.php");
			else
				echo "Error:" . mysqli_error($connect);
		endif;

	endif;
?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4>Register your name</h4>
		</div>
		<div class="modal-body">
			<form action="registerUser.php" method="POST">
                <p>Name</p>
                <input type="text" name="uName" id="uName" class="form-control mb-2" autocomplete="off" />
                <a href="index.php" class="btn btn-secondary float-end">Cancel</a>
                <input type="submit" name="submit" class="btn btn-primary float-end me-2" value="OK" />
            </form>
		</div>
	</div>
</div>

<?php include("template/footer.php"); ?>
	
