<?php include "../templates/header.php";?>

<!-- Content -->
<section id="main-section">
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <!-- Signup Form -->
                <h2 class="text-center">Profile Settings</h2>
                <form action="includes/profileinfo.inc.php" id="myform" method="POST" class="signup-form">
                    <div class="form-group border-start border-primary border-4 ps-2 mb-3">
                        <label class=" mb-2" for="txtAbout">Profile about</label>
                        <textarea name="about" rows="5" class="form-control" id="txtAbout" placeholder="Profile about section..."></textarea>
                    </div>
                    <div class="form-group border-start border-primary border-4 ps-2 mb-3">
                        <label class="mb-2" for="txtIntroTitle">Profile Title</label>
                        <input type="text" name="introtitle" class="form-control" id="txtIntroTitle" value="" placeholder="Title">
                    </div>
                    <div class="form-group border-start border-primary border-4 ps-2 mb-2">
                        <label class="ps-2 mb-2" for="txtIntroText">Change your profile page intro here!</label>
                        <textarea name="introtext" rows="5" class="form-control" id="txtIntroText" placeholder="Profile intro section..."></textarea>
                    </div>
                    
                    <button type="button" onclick="save()" class="btn btn-primary text-center">Save</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include "../templates/footer.php";?>

<script>
    // Assigning Elements Variables
    profileAbout = document.getElementById("txtAbout");
    profileTitle = document.getElementById("txtIntroTitle");
    profileInfo = document.getElementById("txtIntroText");

    $(document).ready(function() {
        userId = <?= isset($_SESSION["userid"]) ? $_SESSION["userid"] : 0 ?>;
        console.log(userId );

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
            url: "../includes/profileinfo.inc.php",
            data: { action: "fetchProfile", userId: userId },
            dataType: "JSON",
            method: "POST",
            success: function(xret) {
                if(xret.bool) {
                    setTimeout(function() {
                        profileAbout.value = xret[0]['profiles_about'];
                        profileTitle.value = xret[0]['profiles_introtitle'];
                        profileInfo.value = xret[0]['profiles_introtext'];
                        Swal.close(); 
                    }, 600)
                }
                else if(xret.bool == false)
                {
                    Swal.fire({
                        icon: 'error',
                        title: xret.msg,
                        text: 'Please try again.',
                    });
                }
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'An error occurred while fetching the data.',
                });
            }
        });
    });

    function save() {
        xdata = jQuery("#myform").serialize();
        // Parse the serialized string into an object
        var formData = {};
        decodeURIComponent(xdata).split('&').forEach(function (item) {
            var keyValue = item.split('=');
            formData[keyValue[0]] = keyValue[1];
        });
        $.ajax({
            url: "../includes/profileinfo.inc.php?action=saveData",
            method: "POST",
            data: xdata,
            dataType: "JSON",
            success: function(xret) {
                if (xret.bool) {
                    Swal.fire({
                        title: 'Your work has been saved!',
                        text: xret.msg,
                        icon: 'success',
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        didOpen: () => {
                        Swal.showLoading();
                            setTimeout(() => {
                                window.location.href = "profilesettings.php";
                            }, 1000);
                        }
                    });

                } else if (xret.bool == false) {
                    Swal.fire({
                    icon: 'error',
                    title: xret.msg,
                    allowOutsideClick: false
                    });
                }
            },
            error: function(xhr, status, error) {
            // Handle the error here
            console.log(xhr.responseText);
            Swal.fire({
                icon: 'error',
                title: 'An error occurred',
                text: xhr + status + error,
                allowOutsideClick: false
            });
            }
        });
    }

   
</script>



