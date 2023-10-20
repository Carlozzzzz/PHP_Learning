<?php include "templates/header.php";?>

<?php 
    $profileInfo = new ProfileInfoView();
?>

<!-- Content -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <!-- Signup Form -->
            <h2 class="text-center">Profile Settings</h2>
            <form action="includes/profileinfo.inc.php" method="POST" class="signup-form">
                <div class="form-group">
                    <label for="signupName">Profile about</label>
                    <textarea name="about" rows="5" class="form-control" id="about" placeholder="Profile about section..."><?php $profileInfo->fetchAbout($_SESSION["userid"])?></textarea>
                </div>
                <div class="form-group">
                    <label for="introtitle">Profile Title</label>
                    <input type="text" name="introtitle" class="form-control" id="introtitle" value="<?php $profileInfo->fetchTitle($_SESSION["userid"])?>" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="introtext">Change your profile page intro here!</label>
                    <textarea name="introtext" rows="5" class="form-control" id="introtext" placeholder="Profile intro section..."><?php $profileInfo->fetchProfileInfo($_SESSION["userid"])?></textarea>
                </div>
                
                <button name="submit" type="submit" class="btn btn-primary text-center">Save</button>
            </form>
        </div>
    </div>
</div>

<script>
    $.ajax({
        
    });
</script>

<?php include "templates/footer.php";?>


