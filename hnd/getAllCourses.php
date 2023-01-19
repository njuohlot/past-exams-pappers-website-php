<?php
include 'config.php';
$query = $conn->query('SELECT * FROM `course` WHERE options="HND"');
while($data=$query->fetch()){

?>
<div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                  <a href='http://localhost/gateways/hnd/index.php?page=specialty$id=<?php echo $data["id"]?>'>
                      <img src="http://localhost/gateways/admin\uploads_course\<?php echo $data['images']; ?>" class="img-fluid" alt="course">
                     
                  </a>
                 
                
              </div>
              <div class="details position-relative">
                
                <a href="http://localhost/gateways/hnd/index.php?page=specialty&id=<?php echo $data["id"]?>" class="stretched-link">
                  <h3><?php echo $data['name']; ?></h3>
                </a>
               
              </div>
            </div>
          </div><!-- End Service Item -->  
<?php } ?>