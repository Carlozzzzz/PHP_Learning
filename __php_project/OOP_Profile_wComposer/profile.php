<?php include "templates/header.php";?>

<?php 
    // $profileInfo = new ProfileInfoView();
?>

<!-- Content -->
<section class="container mt-5">
    <h1 id="uid_title">Hello <?= $_SESSION["useruid"]?></h1>
    <h3>About</h3>
    <p id="profileAbout"> ---- </p>

    <h3 id="profileTitle"> ---- </h3>
    <p id="profileInfo"> ---- </p>

    <a href="profilesettings.php" class="btn btn-primary">Profile Settings</a>
</section>

<?php include "templates/footer.php";?>


<script>
    // Assigning Elements Variables
    profileAbout = document.getElementById("profileAbout");
    profileTitle = document.getElementById("profileTitle");
    profileInfo = document.getElementById("profileInfo");

    $(document).ready(function() {
    userId = <?= isset($_SESSION["userid"]) ? $_SESSION["userid"] : 0 ?>;

    // Show the loading indicator
    Swal.fire({
        title: 'Loading',
        text: 'Fetching data...',
        allowOutsideClick: false,
        showConfirmButton: false,
        didOpen: () => {
            Swal.showLoading();
        }
    });

    jQuery.ajax({
        url: "includes/profileinfo.inc.php",
        data: { action: "fetchProfile", userId: userId },
        dataType: "JSON",
        method: "POST",
        success: function(xret) {
            if(xret.bool) {
                setTimeout(function() {
                    profileAbout.textContent = xret[0]['profiles_about'];
                    profileTitle.textContent = xret[0]['profiles_introtitle'];
                    profileInfo.textContent = xret[0]['profiles_introtext'];
                    Swal.close(); 
                }, 600)
            }
            else
            {
                Swal.fire({
                    icon: 'error',
                    title: xret.msg,
                    text: 'Please try again.',
                });
            }
        },
        error: function(xhr, status, error) {
            // Handle the error here
            console.log(xhr.responseText);
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'An error occurred while fetching the data.',
            });
        }
    });
});




   
</script>