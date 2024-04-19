

<div class="container-fluid">
      <div class="row no-gutter">
          <!-- The image half -->
          <div class="col-md-3 d-none d-md-flex bg-image">
          </div>
  
            <style>
                h4{
                    color: red;
                    text-align: center;
                }
            </style>


          <!-- The content half -->
          <div class="col-md-6 bg-light">
              <div class="login d-flex align-items-center py-5">
  
                  <!-- Demo content-->
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-10 col-xl-7 mx-auto">
                              <h3 class="display-4">Register</h3><br>
                              <form method="post" action="assets/php/action.php?signup">
                                  <div class="form-group mb-3">
                                      <input id="inputfirstname" type="text" name="first_name" value="<?=showFormData('first_name')?>" placeholder="Firstname" class="form-control rounded-pill border-0 shadow-sm px-4 ">
                                  </div>
                                  <?=showError('first_name')?>
                                  <div class="form-group mb-3">
                                      <input id="inputlastname" type="text" name="last_name" value="<?=showFormData('last_name')?>" placeholder="Lastname" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                  </div>
                                  <?=showError('last_name')?>
                                  <div class="form-group mb-3">
                                      <input id="inputemail" type="email" name="email" value="<?=showFormData('email')?>" placeholder="Email" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                </div>
                                <?=showError('email')?>
                                <div class="form-group mb-3">
                                    <input id="inputusername" type="text" name="username" value="<?=showFormData('username')?>" placeholder="Username"  class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                </div>
                                <?=showError('username')?>
                                <div class="form-group mb-3">
                                    <input id="inputpassword" type="password" name="password" value="<?=showFormData('password')?>" placeholder="Password" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                </div>
                                <?=showError('password')?>

                                

                                <p id="message"></p>
                                <div class="form-group mb-3">
                                    <select name="role" class="text-black/70 bg-white px-3 py-2 transition-all cursor-pointer hover:border-blue-600/30 border border-gray-200 rounded-lg outline-blue-600/50 appearance-none invalid:text-black/30 w-64">
                                        <option value="">Roles</option>
                                        <option value="1">Dog</option>
                                        <option value="2">Cat</option>
                                        <option value="0">Rabbit</option>
                                        </select>
                                </div>
  


                                <script src="js\main.js"></script>

                                  <p class="text-center">Have an account?<a href="?login">Login</a></p>


                                  <div class="custom-control custom-checkbox mb-3">
                                      <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                  </div>
                                  <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Sign in</button>
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