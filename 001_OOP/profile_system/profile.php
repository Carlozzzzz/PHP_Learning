<?php include "header.php";?>
<?php 
    $profileInfo = new ProfileInfoView();
?>

<!-- Content -->
<div class="container mt-5">
    <h1>Hello <?= $_SESSION["useruid"]?></h1>
    <h3>About</h3>
    <p><?php $profileInfo->fetchAbout($_SESSION["userid"])?></p>

    <h3><?php $profileInfo->fetchTitle($_SESSION["userid"])?></h3>
    <p><?php $profileInfo->fetchProfileInfo($_SESSION["userid"])?></p>

    <a href="profilesettings.php" class="btn btn-primary">Profile Settings</a>
</div>

<?php include "footer.php";?>
