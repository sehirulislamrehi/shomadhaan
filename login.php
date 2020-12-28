<?php
include "include/header.php";
include "include/topbar.php";
include "include/navbar.php";
?>

<!-- authentication page start -->
<section class="auth-section">
     <div class="container">

          <!-- welcome part -->
          <div class="row">
               <div class="col-md-4 offset-md-2">
                    <div class="left">
                         <h3>Welcome to Shomadhaan Login.</h3>
                    </div>
               </div>
               <div class="col-md-6">
                    <div class="right">
                         <p>
                              New Member ?
                              <a href="register.php">Register</a>
                              here
                         </p>
                    </div>
               </div>
          </div>
          <!-- welcome part end-->

          <!-- auth row start -->
          <div class="row">
               <div class="col-md-8 offset-md-2">
                    <div class="auth-box">
                         <div class="row">

                              <!-- auth custom start -->
                              <div class="col-md-6">
                                   <div class="auth-custom">
                                        <form action="">
                                             <div class="form-group">
                                                  <label>Enter your email address*</label>
                                                  <input type="email" placeholder="Email Address" class="form-control" required>
                                             </div>
                                             <div class="form-group m-t-15">
                                                  <label>Enter your password*</label>
                                                  <input type="password" placeholder="Enter Password" class="form-control" required>
                                             </div>
                                             <div class="form-group m-t-15">
                                                  <button type="submit" class="auth-button">Login</button>
                                             </div>
                                        </form>
                                        <a href="">Forget Password?</a>
                                   </div>
                              </div>
                              <!-- auth custom end -->

                              <!-- auth via media start -->
                              <div class="col-md-6" style="position: relative;">
                                   <div class="auth-media">
                                        <form action="">
                                             <div class="form-group">
                                                  <label>Or, Login With,</label>
                                             </div>
                                             <div class="form-group">
                                                  <a href="" class="auth-with-google"> <i class="fab fa-google"></i> Google</a>
                                             </div>
                                             <div class="form-group">
                                                  <a href="" class="auth-with-facebook"><i class="fab fa-facebook-f"></i>Facebook</a>
                                             </div>
                                        </form>
                                   </div>
                              </div>
                              <!-- auth via media end -->

                         </div>
                    </div>
               </div>
          </div>
          <!-- auth row end -->

     </div>
</section>
<!-- authentication page end -->

<?php
include "include/footer.php";
?>