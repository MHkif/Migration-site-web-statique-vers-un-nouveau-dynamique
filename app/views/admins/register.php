<section class="vh-100" style="background-color: #eee;">
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <div class="container-fluid m-auto col-lg-8" style="font-family: 'labster', cursive;">
                  <div class="d-flex justify-content-center mb-5"><img src="<?php echo URLROOT; ?>./src/images/cullianPNG.png" alt=" Cullinan" style="width: 120px;"></div>
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-2">Sign up</p>

                  <form action="<?php echo URLROOT; ?>/admins/register" method="POST">

                    <div class="form-group">
                      <label for="username">Username: <sup>*</sup></label>
                      <input type="text" name="username" class="form-control form-control-lg <?php echo (!empty($data['username_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['username']; ?>">
                      <span class="invalid-feedback"><?php echo $data['username_err']; ?></span>
                    </div>
                    <div class="form-group">
                      <label for="email">Email: <sup>*</sup></label>
                      <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
                      <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                    </div>
                    <div class="form-group">
                      <label for="password">Password: <sup>*</sup></label>
                      <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
                      <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                    </div>
                    <div class="form-group">
                      <label for="confirm_password">Confirm Password: <sup>*</sup></label>
                      <input type="password" name="confirm_password" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>">
                      <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
                    </div>

                    <div class="row">
                      <div class="col">
                        <input type="submit" value="Register" class="btn btn-success btn-block">
                        <!-- <button type="submit" name="register" class="btn btn-dark btn-lg px-4 ">Register</button> -->

                      </div>
                      <div class="col">
                        <a href="<?php echo URLROOT; ?>/admins/login" class="btn btn-light btn-block">Have an account? Login</a>
                      </div>
                    </div>

                    <!-- <div class="d-grid justify-content-center" style="font-family: 'labster', cursive;">
                      <button type="submit" name="register" class="btn btn-dark btn-lg px-4 ">Register</button>
                    </div> -->


                  </form>
                </div>


              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="<?php echo URLROOT; ?>./src/images/unsplash.jpg" class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>