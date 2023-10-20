<?php include "../templates/header.php";?>

<!-- Content -->
<section id="main-section">
    <div class="container py-4">
        <div class="p-5 mb-4 bg-body-tertiary rounded-3">
            <div class="container-fluid border-start border-primary border-5 ps-2 my-5">
                <h1 class="display-5 fw-bold" id="profileTitle">Loading...</h1>
                <p class="col-md-8 fs-4" id="profileInfo">Loading...</p>
                <a href="profilesettings.php" class="btn btn-primary btn-lg" type="button">Profile Setting</a>
            </div>
        </div>

        <div class="row align-items-md-stretch">
            <div class="col-md-6  mb-md-0 mb-4 ">
                <div class="h-100 p-5 text-bg-dark rounded-3">
                    <h2>Other details</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, distinctio..</p>
                    <button class="btn btn-outline-light" type="button">View more</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                    <h2>About</h2>
                    <p id="profileAbout">Loading...</p>
                    <button class="btn btn-outline-secondary" type="button">View more</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Page -->
<?php include "../templates/footer.php";?>


<script>
// Assigning Elements Variables
profileAbout = document.getElementById("profileAbout");
profileTitle = document.getElementById("profileTitle");
profileInfo = document.getElementById("profileInfo");

$(document).ready(function() {
    /**
     * Load profile data
     */

    // Loading indicator
    showSwalLoading();

    userId = <?= isset($_SESSION["userid"]) ? $_SESSION["userid"] : 0 ?>;
    jQuery.ajax({
        url: "../includes/profileinfo.inc.php",
        data: {
            action: "fetchProfile",
            userId: userId
        },
        dataType: "JSON",
        method: "POST",
        success: function(xret) {
            if (xret.bool) {
                setTimeout(function() {
                    try {
                        profileAbout.textContent = xret[0]['profiles_about'];
                        profileTitle.textContent = xret[0]['profiles_introtitle'];
                        profileInfo.textContent = xret[0]['profiles_introtext'];

                        Swal.close();
                    }catch(err){
                        console.log(`Error: ${err}`);
                    }

                }, 600)
            } else {
                errorTitle = "Failed to loacate";
                errorSwalLoading(errorTitle, xret.msg);
            }
        },
        error: function(xhr, status, error) {
            // Handle the error here
            let capitalzieXhr = status.charAt(0).toUpperCase() + status.slice(1);
            errorSwalLoading(capitalzieXhr, error);
        }
    });
});
</script>