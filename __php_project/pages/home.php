<?php include "../templates/header.php";?>

<style>
    .stats-class {
        width: 100px;
    }
</style>
<!-- Content -->
<section id="main-section">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-12 col-xl-4">

                <div class="card" style="border-radius: 15px;">
                    <div class="card-body text-center">
                        <div class="mt-3 mb-4">
                            <img src="../assets/img/y_man.jpg"
                                class="rounded-circle img-fluid" style="width: 100px;" />
                        </div>
                        <h4 class="mb-2">Carlos Maralit</h4>
                        <p class="text-muted mb-4">@JuniorWebDev <span class="mx-2">|</span> <a
                                href="http://simplephp.atwebpages.com" target="_blank">http://simplephp.atwebpages.com</a></p>
                        
                        <button type="button" class="btn btn-primary btn-rounded btn-lg">
                            Message now
                        </button>
                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                            <div class="stats-class">
                                <p class="mb-2 h5">5+</p>
                                <p class="text-muted mb-0">Projects</p>
                            </div>
                            <div class="stats-class px-3">
                                <p class="mb-2 h5">$100+</p>
                                <p class="text-muted mb-0">Income amounts</p>
                            </div>
                            <div class="stats-class">
                                <p class="mb-2 h5">0</p>
                                <p class="text-muted mb-0">Total Transactions</p>
                            </div>
                        </div>
                        <div class="mb-4 pb-2">
                            <button type="button" class="btn btn-outline-primary btn-floating">
                                <i class="fab fa-facebook-f fa-lg"></i>
                            </button>
                            <button type="button" class="btn btn-outline-primary btn-floating">
                                <i class="fab fa-twitter fa-lg"></i>
                            </button>
                            <button type="button" class="btn btn-outline-primary btn-floating">
                                <i class="fab fa-skype fa-lg"></i>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include "../templates/footer.php";?>