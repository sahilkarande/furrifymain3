<?php
    global $user;
?>



    <div class="login">
        <div class="col-4 bg-white border rounded p-4 shadow-sm">
            <form>
                <div class="d-flex justify-content-center">

                    <img class="mb-4" src="assets/images/logo.png" alt="" height="60">
                </div>
                <h1 class="h5 mb-3 fw-normal">Hello, <b><?=$user['first_name'].' '.$user['last_name']?> </b> Your Account Is Blocked By Furrify</h1>




                <div class="mt-3 d-flex justify-content-between align-items-center">
                    <a href="assets/php/action.php?logout" class="btn btn-danger" type="submit">Logout</a>



                </div>

            </form>
        </div>
    </div>


    