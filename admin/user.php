<?php
require('header.php');
include 'sidebar.php';
?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Client Info</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php?page=home">Dashboard</a></li>
          <li class="breadcrumb-item">Client</li>
          <li class="breadcrumb-item active">User</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Users</h5>
              <p style='color: red'><?php
              if(isset($_SESSION['users'])){
                echo $_SESSION['users'];

              }else{
                echo '';

              }
              
              
              ?></p>

              
          
          <div class="card" style="overflow-x: scroll; overflow-y: scroll; height: 200px">
              <!-- Small tables -->
              <table class="table table-lg">
                <thead>
                  <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                include 'config.php';
                $query = $conn->query('SELECT * FROM `user` ');
               
                while($data=$query->fetch()){?>
                   
                    
                     <tr>
                    <th scope="row"><?php echo $data['id']?></th>
                    <td><?php echo $data['username']?></td>
                    <td><?php echo $data['email']?></td>
                    <td><button class='btn btn-danger'><a href="index.php?page=deleteuser&id=<?php echo $data['id']?>" style='color: #fff'>Delete</a> </button></td>
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