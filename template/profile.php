<div class="account-home-btn d-none d-sm-block">
    <a href="homepage.php" class="text-primary"><i class="mdi mdi-home h1"></i></a>
</div>

<section class="bg-account-pages vh-100">
    <div class="display-table">
        <div class="display-table-cell">
            <div class="container">
                <div class="row no-gutters align-items-center">
                    <div class="col-lg-12">
                        <div class="login-box">
                            <div class="row align-items-center no-gutters">
                                <div class="col-lg-6">
                                    <div class="bg-light">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-10">
                                                <div class="home-img login-img text-center d-none d-lg-inline-block">
                                                    <div class="animation-2"></div>
                                                    <div class="animation-3"></div>
                                                    <img src="images/features/img-4.png" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-11">
                                            <div class="p-4">
                                                <div class="text-center mt-3">
                                                    <a href="php/update_profile.php"><img src="images/logopioc.png" alt=""
                                                            height="22"></a>
                                                    <p class="text-muted mt-3">Profile</p>
                                                </div>
                                                
                                                <div class="p-3 custom-form">
                                                    <form action="php/update_profile.php" method="post">
<?php

echo "<div class='form-group'>";
echo "    <label for='new_nama_user'>Username</label>";
echo "    <input type='text' class='form-control' id='new_nama_user' name='new_nama_user' placeholder='";

echo $_SESSION['nama_user'];

// echo "'>";
// echo "</div>";
// echo "<div class='form-group'>";
// echo "    <label for='new_bio'>Bio</label>";
// echo "    <input type='text' class='form-control' id='new_bio' name='new_bio' placeholder='";

// //

echo "'>";
echo "</div>";
echo "<div class='form-group'>";
echo "    <label for='new_email'>Email</label>";
echo "    <input type='text' class='form-control' id='new_email' name='new_email' placeholder='";

echo $_SESSION['email'];

echo "'>";
echo "</div>";

?>
                                                        <div class="mt-3">
                                                            <button type="submit" class="btn btn-primary btn-block">Update</button>
                                                        </div>
                                                        <div class="mt-3">
                                                            <a href="homepage.php" class="btn btn-primary btn-block">Cancel</a>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>
</section>