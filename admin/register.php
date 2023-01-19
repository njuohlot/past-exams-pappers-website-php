<?php
if(isset($_POST['username'])) {
    $_SESSION['user_role'] = '';
    $users = htmlspecialchars(trim($_POST['username']));
    $pass = md5(htmlspecialchars(trim($_POST['password'])));
    $isAdmin = 'default';
    $user = $_SESSION['login'];
    include 'config.php';

      $query = $conn->prepare('SELECT admin_type FROM `admin` WHERE admin_name=?');
      $query->execute([$user]);
      $data=$query->fetch();
 
      if($data['admin_type'] === 'superAdmin'){
        $sql = $conn->prepare("INSERT INTO `admin` (admin_name, admin_type, password)VALUES(:names, :types,:pass)");
       $sql->execute(['names'=>$users, 'types'=>$isAdmin, 'pass'=>$pass]);
        $_SESSION['user_role'] = 'Admin added successfuly';
        header('Location: index.php?page=admindata');

      }else{
        $_SESSION['user_role'] = 'Oops, Current Admin cannot Add user';
        header('Location: index.php?page=admindata');
      }



     }



?>






<?php
require('header.php');
include 'sidebar.php'

?>
  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">gatewayAdmin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create New Admin User</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                     <p style='color: red'><?php
              if(isset($_SESSION['user_role'])){
                echo $_SESSION['user_role'];

              }else{
                echo '';

              }
              
              
              ?></p>
                  </div>

                  <form class="row g-3 needs-validation" action='#' method='Post' novalidate>
                    
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create New Admin</button>
                    </div>
                   
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="#">NewGenerationDevelopers</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->
<?php
include 'footer.html';
?>