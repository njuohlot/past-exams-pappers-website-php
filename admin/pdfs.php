<?php
require('header.php');
include 'sidebar.php';
?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Course/Speciality-Info</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php?page=home">Dashboard</a></li>
          <li class="breadcrumb-item">Pdfs</li>
          <li class="breadcrumb-item active">Uploads</li>
          <li style='margin-left: 5px'><button class='btn btn-primary'><a href="index.php?page=uploads" style='color: white'>Add New</a></button></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pdf-files</h5>
              <p style='color: red'><?php
              if(isset($_SESSION['pdf'])){
                echo $_SESSION['pdf'];

              }else{
                echo '';

              }
              
              
              ?></p>

              
          
          <div class="card">
              <!-- Small tables -->
              <table class="table table-lg">
                <thead>
                  <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Preview</th>
                    <th scope="col">Name</th>
                    <th scope="col">Year</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                include 'config.php';
                $query = $conn->query('SELECT * FROM `upload` ');
               
                while($data=$query->fetch()){?>
                   
                    
                     <tr>
                    <th scope="row"><?php echo $data['id']?></th>
                    <td><img src='assets/img/pdf.png' alt='preview' style='width: 30px; height: 30px; '/></td>
                   <td><?php echo $data['name']?></td>
                   <td><?php echo $data['year']?></td>
                    <td><button class='btn btn-danger'><a href="index.php?page=deletPdf&id=<?php echo $data['id']?>" style='color: #fff'>Delete</a> </button></td>
                  </tr>

                <?php }
                


                
                
                ?>
                  
                 
                </tbody>
              </table>
              <!-- End small tables -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->




<?php
include 'footer.html';
?>

