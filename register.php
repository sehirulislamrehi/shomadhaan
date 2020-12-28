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
                         <h3>Create your account.</h3>
                    </div>
               </div>
               <div class="col-md-6">
                    <div class="right">
                         <p>
                              Already A Member ?
                              <a href="login.php">Login</a>
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
                              <form action="" class="register-form">
                                   <div class="col-md-6 col-12" >
                                        <div class="auth-custom">

                                             <div class="form-group">
                                                  <label>First Name*</label>
                                                  <input type="text" placeholder="First Name" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                  <label>Middle Name*</label>
                                                  <input type="text" placeholder="Middle Name" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                  <label>Last Name*</label>
                                                  <input type="text" placeholder="Last Name" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                  <label>Mobile Number*</label>
                                                  <input type="text" placeholder="Mobile" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                  <label>Email*</label>
                                                  <input type="email" placeholder="Email Address" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                  <label>NID / Passport*</label>
                                                  <input type="text" placeholder="NID / Passport Number" class="form-control" required>
                                             </div>


                                        </div>
                                   </div>
                                   <!-- auth custom end -->

                                   <!-- auth via media start -->
                                   <div class="col-md-6 col-12" style="position: relative;">
                                        <div class="auth-custom">
                                             <div class="form-group">
                                                  <label>Date of Birth*</label>
                                                  <input type="date"  class="form-control" required>
                                             </div>
                                             <div class="form-group m-t-15">
                                                  <label>Enter your password*</label>
                                                  <input type="password" placeholder="Enter Password" class="form-control" required>
                                             </div>
                                             <div class="form-group m-t-15">
                                                  <label>Confirm your password*</label>
                                                  <input type="password" placeholder="Confirm Password" class="form-control" required>
                                             </div>
                                             <div class="form-group m-t-15">
                                                  <button type="submit" class="auth-button">Register</button>
                                             </div>
                                             <div class="form-group m-t-15">
                                                  <label>Or, Register With,</label>
                                             </div>
                                             <div class="form-group">
                                                  <a href="" class="auth-with-google"> <i class="fab fa-google"></i> Google</a>
                                             </div>
                                             <div class="form-group">
                                                  <a href="" class="auth-with-facebook"><i class="fab fa-facebook-f"></i>Facebook</a>
                                             </div>
                                        </div>
                                   </div>
                                   <!-- auth via media end -->
                              </form>

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