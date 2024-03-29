<?php
if(isset($_POST['username'])){
  $user = $_POST['username'];
  $users = $_SESSION['login'];
  
  include 'config.php';
  $query = $conn->prepare('UPDATE `admin` SET `admin_name`=:user WHERE `admin_name`=:users');
  $query->bindParam(':user', $user, PDO::PARAM_STR);
   $query->bindParam(':users', $users, PDO::PARAM_STR);
  $query->execute();
  header('Location: index.php?page=signout');

}
if(isset($_POST['user'])){
$_SESSION['error'] = '';
$user = $_POST['user'];
$newPassword = $_POST['newpassword'];
$confirmPassword = $_POST['renewpassword'];
  include 'config.php';
if($newPassword != $confirmPassword){
  $_SESSION['error'] = 'Oops, passwords do not match';
}else{

$sql = $conn->prepare('UPDATE `admin` SET `password`=:newpass WHERE `admin_name`=:user');
  $sql->bindParam(':newpass', $newPassword, PDO::PARAM_STR);
   $sql->bindParam(':user', $user, PDO::PARAM_STR);
  $sql->execute();
  header('Location: index.php?page=signout');

}
}





?>

<?php
require('header.php');
include 'sidebar.php';

?>

    <main id="main" class="main">
      <div class="pagetitle">
        <h1>Profile</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Users</li>
            <li class="breadcrumb-item active">Profile</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->

      <section class="section profile">
        <div class="row">
          <div class="col-xl-4">
            <div class="card">
              <div
                class="card-body profile-card pt-4 d-flex flex-column align-items-center"
              >
                <img
                  src="assets/img/login.png"
                  alt="Profile"
                  class="rounded-circle"
                />
                 <?php
              if(!empty($_SESSION['login'])){?>
              <h2>@<?php echo $_SESSION['login']?></h2
              > </a
            ><!-- End Profile Iamge Icon -->
             <?php } else { ?>
             <h2>@Admin</h2>

             <?php } ?>
                
                
                <div class="social-links mt-2">
                  <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="#" class="facebook"
                    ><i class="bi bi-facebook"></i
                  ></a>
                  <a href="#" class="instagram"
                    ><i class="bi bi-instagram"></i
                  ></a>
                  <a href="#" class="linkedin"
                    ><i class="bi bi-linkedin"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-8">
            <div class="card">
              <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">
                  <li class="nav-item">
                    <button
                      class="nav-link active"
                      data-bs-toggle="tab"
                      data-bs-target="#profile-overview"
                    >
                      Overview
                    </button>
                  </li>

                  <li class="nav-item">
                    <button
                      class="nav-link"
                      data-bs-toggle="tab"
                      data-bs-target="#profile-edit"
                    >
                      Edit Profile
                    </button>
                  </li>

                  <li class="nav-item">
                    <button
                      class="nav-link"
                      data-bs-toggle="tab"
                      data-bs-target="#profile-change-password"
                    >
                      Change Password
                    </button>
                  </li>
                </ul>
                <div class="tab-content pt-2">
                  <div
                    class="tab-pane fade show active profile-overview"
                    id="profile-overview"
                  >
                    <h5 class="card-title">Profile Details</h5>

                   

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Username</div>
                      <div class="col-lg-9 col-md-8">

                       <?php
              if(!empty($_SESSION['login'])){?>
              <span>@<?php echo $_SESSION['login']?></span
              > </a
            ><!-- End Profile Iamge Icon -->
             <?php } else { ?>
             <span>@Admin</span>

             <?php } ?>
                      </div>
                    </div>
                  </div>

                  <div
                    class="tab-pane fade profile-edit pt-3"
                    id="profile-edit"
                  >
                    <!-- Profile Edit Form -->
                    <form action='#' method='POST'>
                     

                      <div class="row mb-3">
                        <label for="yourUsername" class="col-md-4 col-lg-3 col-form-label"
                          >Username</label
                        >
                        <div class="input-group has-validation">
                          <span class="input-group-text" id="inputGroupPrepend"
                            >@</span
                          >
                          <input
                            type="text"
                            name="username"
                            class="form-control"
                            id="yourUsername"
                            required
                          />
                          <div class="invalid-feedback">
                            Please choose a username.
                          </div>
                        </div>
                      </div>

                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">
                          Save Changes
                        </button>
                      </div>
                    </form>
                    <!-- End Profile Edit Form -->
                  </div>

                 

                  <div class="tab-pane fade pt-3" id="profile-change-password">
                    <!-- Change Password Form -->
                    <form action='#' method='POST'>
                      <p style='color: red' class='text-center'>
                        <?php
                        if(isset($_SESSION['error'])){
                          echo $_SESSION['error'];
                        }else{
                          echo '';
                        }
                        
                        
                        ?>
                      </p>
                       <div class="row mb-3">
                        <label for="yourUsername" class="col-md-4 col-lg-3 col-form-label"
                          >Username</label
                        >
                        <div class="input-group has-validation">
                          <span class="input-group-text" id="inputGroupPrepend"
                            >@</span
                          >
                          <input
                            type="text"
                            value='<?php echo $_SESSION['login']; ?>'
                            name="user"
                            class="form-control"
                            id="yourUsername"
                            required
                          />
                          <div class="invalid-feedback">
                            Please choose a username.
                          </div>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="currentPassword"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Current Password</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="password"
                            type="password"
                            class="form-control"
                            id="currentPassword"
                          />
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="newPassword"
                          class="col-md-4 col-lg-3 col-form-label"
                          >New Password</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="newpassword"
                            type="password"
                            class="form-control"
                            id="newPassword"
                          />
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="renewPassword"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Re-enter New Password</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="renewpassword"
                            type="password"
                            class="form-control"
                            id="renewPassword"
                          />
                        </div>
                      </div>

                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">
                          Change Password
                        </button>
                      </div>
                    </form>
                    <!-- End Change Password Form -->
                  </div>
                </div>
                <!-- End Bordered Tabs -->
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- End #main -->

  <?php
  include 'footer.html';
  ?>
   