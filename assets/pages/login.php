<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v18/vendor/bootstrap/css/bootstrap.min.css">
    <link href="login/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="login/style.css" />

    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-3 d-none d-md-flex bg-image">
            </div>


            <!-- The content half -->
            <div class="col-md-6 bg-light">
                <div class="login d-flex align-items-center py-5">

                    <!-- Demo content-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                <h3 class="display-4">LOGIN!</h3>
                                <form method="post" action="assets/php/action.php?login">
                                    <div class="form-floating form-group mb-3">
                                    <input type="text" name="username_email"  value="<?=showFormData('username_email')?>" class="form-control rounded-pill border-0 shadow-sm px-4" placeholder="username/email">
                                    <label for="floatingInput">username/email</label>
                                    </div>
                                    <?=showError('username_email')?>
                                    <div class="form-floating form-group mb-3">
                                    <input type="password" name="password" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">password</label>

                                    </div>
                                    <?=showError('password')?>
                                    <?=showError('checkuser')?>

                                    <div><a href="?forgotpassword&newfp" class="text-decoration-none">Forgot password ?</a></div><br>

                                    <div> <p class="text-center">Don’t have an account? <a href="?signup">Create One</a></p> </div>
                                    

                                    <div class="custom-control custom-checkbox mb-3">
                                        <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                    </div>
                                    <style>
                                        .btn-primary-login {
                                        color: black;
                                        background-color: #ffce00;
                                        border-color: #ffce00;
                                    }

                                    .btn-primary-login:hover {
                                        color: black;
                                        background-color: #9c7d04;
                                        border-color: #9c7d04;
                                    }
                                    </style>
                                    <form action="process.php" method="post">
                                        <!-- other form fields go here -->
                                        <input type="submit" name="submit" value="Submit" class="btn btn-primary-login btn-block text-uppercase mb-2 rounded-pill shadow-sm">
                                    </form>
                                    <div class="text-center d-flex justify-content-between mt-4">

                                        <p class="w-100 text-center" style="color:rgb(0, 0, 0);">&mdash; Or Sign In With &mdash;</p>


                                </form>
                            </div>
                        </div>
                    </div><!-- End -->

                </div>
            </div><!-- End -->

        </div>
    </div>