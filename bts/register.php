<?php
ob_start();

if(isset($_POST['username'])) {
    $users = htmlspecialchars(trim($_POST['username']));
    $email = htmlspecialchars(trim($_POST['email']));
    $pass = md5(htmlspecialchars(trim($_POST['password'])));
    include 'config.php';
    $req = $conn->prepare('SELECT * FROM user WHERE username=?');
    $req->execute([$users]);
    if($req->rowCount() > 0){
      include 'regForm.php'; 

    }else{
       $sql = $conn->prepare("INSERT INTO `user` (username, email, password)VALUES(:names, :email,:pass)");
       $sql->execute(['names'=>$users, 'email'=>$email, 'pass'=>$pass]);
        header('Location: http://localhost/gateways/bts/index.php?page=login');
        ob_end_flush();

    }
       
     }
     else{?>
  <main>
    <div class="container" style="margin-top: 80px">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="http://localhost/gateways/bts/index.php" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="" style="width: 40px">
                  <span class="d-none d-lg-block">GateWay</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Créer un compte utilisateur</h5>
                    <p class="text-center small">Entrez vos informations personnelles pour créer un compte</p>
                    
                  </div>

                  <form class="row g-3 needs-validation" action='#' method='Post' novalidate>
                    
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Nom d'utilisateur</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Veuillez choisir un nom d'utilisateur.</div>
                      </div>
                    </div>
                     <div class="col-12">
                      <label for="yourEmail" class="form-label">E-mail</label>
                      <div class="input-group has-validation">
                        <input type="email" name="email" class="form-control" id="yourEmail" required>
                        <div class="invalid-feedback">Veuillez choisir un e-mail.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Mot de passe</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">S'il vous plait entrez votre mot de passe!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">Je suis d'accord et j'accepte les<a href="#">termes et conditions</a></label>
                        <div class="invalid-feedback">Vous devez accepter avant de soumettre.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Créer un compte</button>
                    </div>
                   
                  </form>

                </div>
              </div>

              <div class="credits">
                Vous avez déjà un compte? <a href="http://localhost/gateways/bts/index.php?page=login" style="color: blue">s'identifier</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

     <?php }

     
?>