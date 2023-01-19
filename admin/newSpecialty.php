<?php
require('header.php');
include 'sidebar.php';
?>

<main id="main" class="main">

    <div class="pagetitle">
     <h1>New Specialty</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php?page=home">Home</a></li>
          <li class="breadcrumb-item">Specialty</li>
          <li class="breadcrumb-item active">files</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Uploads</h5>
              <p style='color: red'><?php
              if(isset($_SESSION['error_s'])){
                echo $_SESSION['error_s'];

              }else{
                echo '';

              }
              
              
              ?></p>

              <!-- General Form Elements -->
              <form action='index.php?page=validateSpecialty' method='POST' enctype='multipart/form-data'>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name='name'>
                  </div>
                </div>
                 <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Select Course</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name='course' required>
                      <option selected>Open this select menu</option>
                      <?php
                      include 'getCourse.php';?>
                    
                    </select>
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name='file' required>
                  </div>
                </div>
                
             

                <div class="row mb-3">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Upload</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

        
      </div>
    </section>

  </main><!-- End #main -->



<?php
include 'footer.html';
?>