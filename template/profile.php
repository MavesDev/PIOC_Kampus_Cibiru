<div class="account-home-btn d-none d-sm-block">
    <a href="homepage.php" class="text-primary"><i class="mdi mdi-home h1"></i></a>
</div>

<section class="bg-light vh-100">
    <div class="display-table">
        <div class="display-table-cell">

            <div class="">
                <div class="mx-5">
                    <div class="bg-white shadow rounded mx-5">

                        <div class="p-3 custom-form">
                            <form action="php/update_profile.php" method="post">
                                <div class='form-group'>
                                    <label for='new_nama_user'>Username</label>
                                    <input type='text' class='form-control' id='new_nama_user' name='new_nama_user' placeholder=<?php echo "'" . $_SESSION['nama_user'] . "'" ?>>
                                </div>
                                <div class='form-group'>
                                    <label for='new_email'>Email</label>
                                    <input type='text' class='form-control' id='new_email' name='new_email' placeholder=<?php echo "'" . $_SESSION['email'] . "'" ?>>
                                </div>
                                <div class='form-group'>
                                    <label for='new_bio'>Bio</label>
                                    <input type='text' class='form-control' id='new_bio' name='new_bio' placeholder='<?php

                                        include "php/connection.php";

                                        $result = mysqli_query($conn, "select * from user where id_user = " . $_SESSION['id_user'] . ";");
                                        $row = mysqli_fetch_assoc($result);

                                        $bio = $row['bio'];

                                        echo $bio;

                                    ?>'>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                                </div>
                                <div class="mt-3">
                                    <a href="homepage.php" class="btn btn-danger btn-block">Cancel</a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>