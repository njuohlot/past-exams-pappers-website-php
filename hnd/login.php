<?php
ob_start();

if(isset($_POST['username'])) {
  require 'config.php';
  $username =  htmlspecialchars(trim($_POST['username']));;
  $password = $pass = md5(htmlspecialchars(trim($_POST['password'])));
  
  

$query = $conn->prepare('SELECT username, password FROM  user WHERE (username=:username) AND (password=:password)');
$query->bindParam(':username', $username);
$query->bindParam(':password', $password);
$query->execute();
if($query->rowCount() > 0){
 
  $_SESSION['user'] = $username;
  header('Location: http://localhost/gateways/hnd/index.php');
ob_end_flush();
}else{?>
  
  <main>
    <div class="container"  style="margin-top: 80px">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="" style="width: 40px">

                  <span class="d-none d-lg-block">GateWay</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your GatWay Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                    <p class="text-center small" style='color: red'>Invalid Username or Password, Try again!!</p>
                  </div>

                  <form class="row g-3 needs-validation" action='#' method='POST' novalidate>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                   
                  </form>

                </div>
              </div>

              <div class="credits">
               
                Do not have an account? <a href="index.php?page=register" style='color: blue'>Register</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main>
  
<?php }




}else { 

  include 'loginform.php';

}

?>