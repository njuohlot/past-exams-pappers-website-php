<?php
ob_start();
include 'config.php';
if(isset($_GET['id'])){
  $id = $_GET['id'];
$query = $conn->prepare('SELECT * FROM `specialty` WHERE id_course=?');
$query->execute([$id]);
if($query->rowCount() > 0){
while($data=$query->fetch()){?>
<div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                  <a href='http://localhost/gateways/bts/index.php?page=payment&id=<?php echo $data["id"]?>'>
                      <img src="http://localhost/gateways/admin/uploads_specialty/<?php echo $data['file']; ?>" class="img-fluid" alt="speciality">
                     
                  </a>
                 
                
              </div>
              <div class="details position-relative">
                
                <a href="http://localhost/gateways/bts/index.php?page=payment&id=<?php echo $data["id"]?>" class="stretched-link">
                  <h3><?php echo $data['name']; ?></h3>
                </a>
               
              </div>
            </div>
          </div><!-- End Service Item -->  
<?php }
}else{?>

<h3 class='text-center'>Aucune spécialité trouvée</h3>

<?php }

}else{
  header('Location: index.php');
}
ob_end_flush();

?>
